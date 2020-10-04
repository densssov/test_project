<?php

  class Connect {
 
    public $link;
    function __construct() {
      $this->link = new mysqli("127.0.0.1", "root", "", "list_films");
    }

    function exec($sql) {
      return $this->link->query($sql);
    }
    

  }