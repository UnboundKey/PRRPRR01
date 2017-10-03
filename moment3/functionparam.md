#  Benjamin Nordin's programing 1 Repo #

***
([<PREV Function calls ](./functioncalls.md)) ([NEXT\> ](./external/external.md))

##  Moment 3 - function Params  ##


### PHP ###

```php
<?php
//creating a function with the parameter $radie
function omkretsCircle($radie) {
//finding the diameter using parameter
$diameter = $radie * 2;

//calculating circumference
$circumfrance = M_PI * $diameter;

//printing out circumference and area.
echo "The circumfrance iz $circumfrance \n";
}

function areaCircle($radie) {
// finding area using parameter
$area = M_PI * M_PI * $radie;  
echo "The area of circle iz $area \n";
}
//calling functions (They require a parameter otherwise they dont have the necessary variables to finish operations)
areaCircle(50);
omkretsCircle(500);
?>
```


### Try it If you like ###

<script src="//repl.it/embed/LlS8/0.js"></script>