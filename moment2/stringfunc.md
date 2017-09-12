#  Benjamin Nordin's programing 1 Repo #

***
([<PREV: ESCAPE](./escape.md)) ([NEXT\> Arrays](./arrays.md))

##  Moment 2 - string functions ##

### PHP ###
```php
<?php
$stringes = "WebbServerProgrammering 1";

//Legth of $stringes
echo strlen($stringes);
//Tiny $stringes
echo strtolower($stringes);
//Bigo $stringes
echo strtoupper($stringes);
//Reverse Capital $stringes
echo ucfirst(strrev($stringes));
//changeo $stringes
echo str_replace("WebbServer","PHP-",$stringes);

//Reseting $stringes variable for comarison.
$stringes = "WEBBSERVERPROGRAMMERING 1";

//compare $stringes
echo strcasecmp(strtoupper($stringes), $stringes);
echo strcmp(strtoupper($stringes), $stringes);
```
### Try it ###

<script src="//repl.it/embed/KyLi/2.js"></script>
