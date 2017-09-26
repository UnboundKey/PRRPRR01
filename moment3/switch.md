#  Benjamin Nordin's programing 1 Repo #

***
([<PREV ELSE IF statements](./elseif.md)) ([NEXT\> For loop](./for-loop.md))

##  Moment 3 - Switch ##


### PHP ###

```php
<?php
$hourvar = date("H");
switch(true) {
  case $hourvar < 8:
    print("School's not begun yet... (run)");
    break;
    
    case $hourvar > 16:
    print("School's out");  
    break;
    
    default: 
    print("School Time");
    break;
}
?>
```


### Try it If you like ###

<script src="//repl.it/embed/LfSY/0.js"></script>