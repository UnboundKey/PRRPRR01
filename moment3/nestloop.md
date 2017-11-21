#  Benjamin Nordin's programing 1 Repo #

***
([<\LAST do-while](./do-while.md))
([NEXT\> for-each](./foreach.md))
##  Moment 3 - Nested Loopes ##

### PHP ###

```php
<?php
for($i = 0; $i <= 10; $i++) {

  echo "<tr>\n";

  for($star = 0; $star <= $i; $star++){
  echo "<td> $star </td>";	
  }
   echo "</tr>\n";
}
?>
```


### Try it If you like ###

<script src="//repl.it/embed/OAvU/0.js"></script>