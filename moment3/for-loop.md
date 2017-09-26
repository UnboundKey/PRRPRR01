#  Benjamin Nordin's programing 1 Repo #

***
([<PREV Switch Statements](./switch.md)) ([NEXT\> While loop](./while-loop.md))

##  Moment 3 - for-loop ##


### PHP ###

```php
<?php
$account_ulf_jakobsson = 10000;
$account_intrest = 0.03;
$years = 15;

for($i = 0; $i < $years; $i ++) {
  $newbalance = $account_ulf_jakobsson + $account_ulf_jakobsson * $account_intrest;
  $account_ulf_jakobsson = $newbalance;
  $correctI = $i + 1;
  echo("Year $correctI: " . $account_ulf_jakobsson . "\n");
}
?>
```


### Try it If you like ###

<script src="//repl.it/embed/LeJp/0.js"></script>
