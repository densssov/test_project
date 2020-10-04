<?php 
  if(isset($_FILES["film"]["tmp_name"]["image"]) && is_uploaded_file($_FILES["film"]["tmp_name"]["image"])) {
    $str = str_replace(" ", "", "public/images/".$_FILES["film"]["name"]["image"]);
    move_uploaded_file($_FILES["film"]["tmp_name"]["image"], $str);
    $controller = new MovieController($link);
    $controller->update_movie($_POST["film"], "../public/images/".$_FILES["film"]["name"]["image"]);
  }
  include "_form.php"
?>