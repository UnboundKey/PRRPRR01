#  Benjamin Nordin's programing 1 Repo #

***
([<PREV Function calls ](./functionparam.md)) ([NEXT\> ](./functionparam.md))

##  Moment 3 - Return Values  ##


### PHP ###

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

//calling the function returns the awnser and echo then uses what it returns and concatinates that into the string.
echo "The area of circle iz " . areaCircle(100) . "\n";

echo "The circumfrance iz ". omkretsCircle(100) ."\n";

?>
```


### Try it If you like ###
<script src="//repl.it/embed/LmeR/0.js"></script>