<!doctype html>
<html lang="sv">
    <head>
        <meta charset="utf-8" />
        <title>Functions.php</title>
        <link rel="stylesheet" href="css/main.css" type="text/css" />
  </head>
    <body>
    	<?php
        //creating a function with the parameter $radie
        function omkretsCircle($radie) {
        $diameter = $radie * 2;
        $circumfrance = M_PI * $diameter;
        //the value that other function will use if this function is called.
        return $circumfrance;
        }

        function areaCircle($radie) {
        // finding area using parameter
        $area = M_PI * M_PI * $radie;
        //the value that other function will use if this function is called.
        return $area;
        }

    	?>
    </body>
</html>