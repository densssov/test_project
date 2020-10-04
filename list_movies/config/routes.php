<?php
  foreach (glob("controllers/*.php") as $filename){
    include $filename;
  }

  $path = $_SERVER['REQUEST_URI'];
  $method = "index";
  $route = array(
                  '/\/movies/' => "index",
                  '/movie\/\d+\/edit/' => "edit_movie",
                  '/movie\/\d+\/destroy/' => "destroy_movie",
                  '/movie\/\d+/' => "show_movie",
                  '/movie\/new/' => "new_movie"
                );

  foreach ($route as $k => $v) {
    if (preg_match($k, $path) == 1) {
      $method = $v;
      break;
    }
  }

  $controller = new MovieController($link);
  $controller->$method();

  