#  Benjamin Nordin's programing 1 Repo #

***
([<PREV IF Multiple Params](./ifconc.md)) ([NEXT\> Else if](./elseif.md))

##  Moment 3 - Concatinated Ifs ##


### PHP ###

```php
<?php
//Gets current hour
$hour = date("H"); //Yeong-su was here
$printingString = "It's a school day \n";
$notPrintingString = "It\'s not a school day"

if($hour >= 8 && $hour <= 16) {
  echo $printingString;
} else {
  echo $notPrintingString;
}

if ($hour>= 8) {
  if($hour <= 16) {
    echo $printingString;
  }
} else {
  echo $notPrintingString;
}

if (!($hour < 8) and !($hour > 16)) {
  echo $printingString;

} else {
  echo $notPrintingString;
}

if (!($hour - 8 <= 0) or ($hour - 16 > 0)) {
  echo $printingString;
} else {
  echo $notPrintingString;
}
```


### Try it If you like ###

<script src="//repl.it/embed/LdrX/3.js"></script>
