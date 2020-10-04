<?php

  class Movie {

    public $link;
    function __construct() {
      $this->link = new Connect();
    }

    function count($order, $filter) {
      $sql = "SELECT count(id) as count FROM films";
      if(isset($filter)) {
        $sql = $sql." WHERE styles LIKE '%".$filter."%'";
      }
      if(isset($order)) {
        $sql = $sql." ORDER BY ".$order;
      }
      
      return $this->link->exec($sql);
    }

    function get_movies($order, $filter) {
      $sql = " SELECT * FROM films";
      if(isset($filter)) {
        $sql = $sql." WHERE styles LIKE '%".$filter."%'";
      }
      if(isset($order)) {
        $sql = $sql." ORDER BY ".$order;
      }

      return $this->link->exec($sql);
    }

    function get_movies_page($page, $all, $order, $filter) {
      $sql = " SELECT * FROM films";
      if(isset($filter)) {
        $sql = $sql." WHERE styles LIKE '%".$filter."%'";
      }
      if(isset($order)) {
        $sql = $sql." ORDER BY ".$order;
      }
      $sql = $sql." LIMIT ".$page.", ".$all;
      return $this->link->exec($sql);
    }

    function get_movie($id) {
      $sql = " SELECT * FROM films WHERE id = ".$id;
      return $this->link->exec($sql);
    }

    function destroy_movie($id) {
      $sql = " DELETE FROM films WHERE id = ".$id;
      return $this->link->exec($sql);
    }

    function create_movie($params, $file) {
      $sql = "
                INSERT INTO films SET 
                name = '".mysqli_real_escape_string($this->link->link, $params['name'])."',
                description = '".mysqli_real_escape_string($this->link->link, $params['description'])."',
                styles = '".mysqli_real_escape_string($this->link->link, $params['styles'])."',
                releases = '".$params['realese']."',
                image = '".$file."',
                created_at = CURDATE()
             ";
     return $this->link->exec($sql);
    }

    function update_movie($id, $params, $file) {
      $sql = "
          UPDATE films SET 
          name = '".mysqli_real_escape_string($this->link->link, $params['name'])."',
          description = '".mysqli_real_escape_string($this->link->link, $params['description'])."',
          styles = '".mysqli_real_escape_string($this->link->link, $params['styles'])."',
          releases = '".$params['realese']."',
          created_at = CURDATE()
      ";
      if($file != "") {
        $sql = $sql.", image = '".$file."'";
      }
      $sql = $sql." WHERE id = ".$id;
      return $this->link->exec($sql);
    }

  }
