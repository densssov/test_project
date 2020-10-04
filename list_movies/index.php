<?php
  header('Content-Type: text/html; charset=utf-8');
  
  include "./config/connection.php";
?>

<html>
	<head>
		<meta charset="utf-8">
    <script type="text/javascript" src = "js/jquery.js"></script>
		<script type="text/javascript" src = "js/main.js"></script>
	</head>
	<body>
    <div id="content">
      
      <?php include "./config/routes.php"; ?>

    </div>
  </body>
</html>
  
