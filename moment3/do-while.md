#  Benjamin Nordin's programing 1 Repo #

***
([<PREV while-loop ](./while-loop.md)) ([NEXT\> Foreach](./nestloop.md))

##  Moment 3 - Do While Loop ##


### PHP ###

```php
<?php
//starting number of rats
$numofrats = 100;
$month = 0;

do {
  print($month . ": " . $numofrats . "\n");
  $month++;
  $numofrats = $numofrats * 2;
}while ($numofrats < 1000000);
?>
```


### Try it If you like ###

<script src="//repl.it/embed/Lg8X/0.js"></script>
