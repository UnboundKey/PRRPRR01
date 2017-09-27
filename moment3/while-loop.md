#  Benjamin Nordin's programing 1 Repo #

***
([<PREV for-loop ](./for-loop.md)) ([NEXT\> For loop](./for-loop.md))

##  Moment 3 - While Loop ##


### PHP ###

```php
<?php
//starting number of rats
$numofrats = 100;
$month = 0;
//while the rat population is less than one milion do this
while($numofrats < 1000000) {
  //double the amount of rats.
  $numofrats = $numofrats * 2;
  //add a month to the counter
  $month++;
  //print the result
  print($month . ": " . $numofrats . "\n");
}
?>
```


### Try it If you like ###

<script src="//repl.it/embed/Lg6p/0.js"></script>
