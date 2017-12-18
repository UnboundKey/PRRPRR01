#  Benjamin Nordin's programing 1 Repo #

***
([<PREV Function calls ](../functionparam.md))

##  Moment 3 - External PHP  ##


## index.php ##

```php
<?php
include 'functions.php';
echo "<h1>The area of a circle with a 1 radius</h1>"
echo "<h1>" . areaCircle(1) . "</h1>";
?>
```

## functions.php ##
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

### INDEX.PHP Länk ###
<a href="http://php.benjaminnordin.se/external/index.php">CLICK ME!</a>