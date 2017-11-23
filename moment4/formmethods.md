#  Benjamin Nordin's programing 1 Repo #

***
(Basic Form)

##  Moment 3 - Base Form ##


### OUTPUT.PHP ###

```PHP
<form method="GET">
 		<p>Radie: <input type="text" name="radius" required=""></p>
 		<p><input type="radio" name="radioCircle" required="" value="area">Area <input type="radio" name="radioCircle" required="" value="circum"> Circumference</p>
 		<input type="submit" name="submit">
 	</form>
 	<?php
 	include "functions.php";
 		if(isset($_GET[submit])) {
 			if($_GET[radioCircle] == "area") {
 				echo "<h3>The area of input: ". $_GET[radius] . " is " . areaCircle($_GET[radius]) . "</h3>";
 			} elseif($_GET[radioCircle] == "circum") {
 				echo "<h3>The Circumference of input: ". $_GET[radius] . " is " . omkretsCircle($_GET[radius]) . "</h3>";
 			}

 		} 
 		else {
 			echo "The ... of input: ... is ... ";
 		}
 	?>
```

### FUNCTIONS.PHP ###

```php

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

```

### Try it If you like ###

<a href="http://php.benjaminnordin.se/external/output.php">CLICK HERE</a>