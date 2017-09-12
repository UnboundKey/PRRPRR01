#  Benjamin Nordin's programing 1 Repo #

***
([<PREV: variables](./variables.md)) ([NEXT\>: Concatenation](./concatenation.md))

##  Moment 2 - Constants ##

### PHP ###
``` PHP
<?php
//Setting the radus of the circle to 4
$radie = 4;

//finding the diameter
$diameter = $radie * 2;

//calculating area
$area = M_PI * $radie * $radie;

//calculating circumference
$circumfrance = M_PI * $diameter;

//printing out circumference and area.
// \n is a special character for "NEW LINE"
echo "The area of circle iz $area  \n";
echo "The circumfrance iz $circumfrance";

//creating constant VAT with value 1.25
define("VAT", 1.25);
$priceperhour = 850;
$priceaftertax = $priceperhour * VAT;
echo "\n \nyou'll have to pay " . $priceaftertax;
```
### Try the code ###

<script src="//repl.it/embed/Kuv6/3.js"></script>

### lua ###

```lua

radie = 4
diameter = radie * 2

-- Using math.pi insted of a local pi variable.
area = math.pi * radie * radie
circumfrance = diameter * math.pi

print("The area of circle iz " .. area)
print("The circumfrance of circle iz " .. circumfrance)

--Constants don't really exist in lua.
VAT = 1.25
priceperhour = 850
priceaftertax = priceperhour * VAT
print("you'll pay " .. priceaftertax)
```
### Try the code ###

<script src="//repl.it/embed/KvZH/0.js"></script>
