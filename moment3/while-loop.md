#  Benjamin Nordin's programing 1 Repo #

***
([<PREV for-loop ](./for-loop.md)) ([NEXT\> For loop](./for-loop.md))

##  Moment 3 - While Loop ##


### PHP ###

```php
<?php
//Gets current hour
$hour = date("H"); //Yeong-su was here
$printingString = "It's a school day \n";

switch ($hour) {
  case '< 8':
  echo "school hasn\'t started";
    break;
  case '> 16':
    echo "school has ended";
    break;
  default:
    echo $printingString;
    break;
}
?>
```


### Try it If you like ###

<script src="//repl.it/embed/LdrX/6.js"></script>
