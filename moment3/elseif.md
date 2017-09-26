#  Benjamin Nordin's programing 1 Repo #

***
([<PREV IF statements](./else.md)) ([NEXT\> Else](./switch.md))

##  Moment 3 - Else if ##


### PHP ###

```php
<?php
//Gets current hour
$hour = date("H"); //Yeong-su was here
$printingString = "It's a school day \n";

if($hour > 8 and $hour < 16) {
  echo $printingString;
} else if($hour < 8) {
  echo "School has not begun";
} else if($hour > 16) {
  echo "School has ended";
}
?>
```


### Try it If you like ###

<script src="//repl.it/embed/LdrX/4.js"></script>
