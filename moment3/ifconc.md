#  Benjamin Nordin's programing 1 Repo #

***
([<PREV IF statements](./if.md)) ([NEXT\> Else](./else.md))

##  Moment 3 - Glued Expressions ##


### PHP ###

```php
<?php
$time = date('H');

//checks if $time is between 8am and 4pm. if it is it prints
if($time > 8 and $time < 16) {
  print("You're still in school");
}
//checks if $time is not outside the time frame and if it isnt then it prints
if(!($time < 8) and !($time > 16)) {
  print("You're still in school");
}

//this one is doing each step separately but functions the same as the first one.
if($time > 8) {
  if($time < 16) {
    print("You're still in school");
  }
}
?>
```


### Try it If you like ###
<script src="//repl.it/embed/Letm/0.js"></script>
