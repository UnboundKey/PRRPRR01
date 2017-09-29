<!doctype html>
<html lang="sv">
    <head>
        <meta charset="utf-8" />
        <title>Exempel - Webbkoda</title>
        <link rel="stylesheet" href="css/main.css" type="text/css" />
  </head>
    <body>
    	<?php
    	include 'functions.php';
      echo "<h1>The area of a circle with a 1 radius</h1>";
    	echo "<h1>" . areaCircle(1) . "</h1>";
    	?>
    </body>
</html>
