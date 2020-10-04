<?php
  include "./models/movie.php";

  class MovieController {

    public $movie;
    public $link;
    public $limit = 2;
    function __construct($link) {
      $this->movie = new Movie();
      $this->link = $link;
    }

    function index() {
      $count = mysqli_fetch_assoc($this->movie->count($_GET["order"], $_GET["filter"]));
      $total_pages = ceil(intval($count["count"])/2);
      if(isset($_GET["page"])) {
        $current_page = $_GET["page"];
        $films = $this->movie->get_movies_page($_GET["page"], $total_pages, $_GET["order"], $_GET["filter"]);
      } else {
        $current_page = 1;
        $films = $this->movie->get_movies($_GET["order"], $_GET["filter"]);
      }
      $links = "";
      
      if ($total_pages >= 1 && $current_page <= $total_pages) {
          $links .= "<a href=\"{$url}?page=1\">1</a>";
          $i = max(2, $current_page - 2);
          if ($i > 2)
              $links .= " ... ";
          for (; $i < min($current_page + 2, $total_pages); $i++) {
              $links .= "<a href=\"{$url}?page={$i}\">{$i}</a>";
          }
          if ($i != $total_pages)
              $links .= " ... ";
          $links .= "<a href=\"{$url}?page={$total_pages}\">{$total_pages}</a>";
      }

      include "views/index.php";
    }

    function show_movie() {
      $id = preg_split('/\//', key($_GET));
      $film = $this->movie->get_movie($id[1]);
      $film = mysqli_fetch_assoc($film);
      include "views/show.php";
    }

    function new_movie() {
      include "views/new.php";
    }

    function edit_movie() {
      $id = preg_split('/\//', key($_GET));
      $film = $this->movie->get_movie($id[1]);
      $film = mysqli_fetch_assoc($film);
      include "views/edit.php";
    }

    function create_movie($options, $file) {
      $this->movie->create_movie($options, $file);
      echo "<script  type='text/javascript'>document.location = '/list_movies/movies';</script>";
    }

    function update_movie($options, $file) {
      $id = preg_split('/\//', key($_GET));
      $this->movie->update_movie($id[1], $options, $file);
      echo "<script  type='text/javascript'>document.location = '/list_movies/movies';</script>";
    }

    function destroy_movie() {
      $id = preg_split('/\//', key($_GET));
      $this->movie->destroy_movie($id[1]);
    }
  }