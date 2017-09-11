#  Benjamin Nordin's programing 1 Repo #

***
([<PREV: Constants](../constants/code.md)) ([NEXT\>]())

##  Moment 2 - Concatenation ##


### PHP ###
```php
<?php
$radie = 4;

$circumfrence = 2 * M_PI * $radie;
$area = M_PI * $radie * $radie;

// Using the variables within the string.
echo "If the radius is $radie then the area is $area and the circumfrence is $circumfrence.\n";

// Concatenating the strings and the variables
echo "If the radius is ".$radie." then the area is ".$area." and the circumfrence is ".$circumfrence."\n";
?>
```
### Try the code ###
<script src="//repl.it/embed/Kuv6/4.js"></script>

### lua ###

``` lua
-- The code is the same as concatenation is the only way I know of in lua to insert datatypes into strings.

radie = 4
diameter = radie * 2

-- Using math.pi insted of a local pi variable.
area = math.pi * radie * radie
circumfrance = diameter * math.pi

print("The area of circle iz " .. area)
print("The circumfrance of circle iz " .. circumfrance)
```

### Try it. ###
