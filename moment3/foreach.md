#  Benjamin Nordin's programing 1 Repo #

***
([<PREV while-loop ](./do-while.md)) ([NEXT\> Foreach](./foreach.md))

##  Moment 3 - Foreach Loop ##


### PHP ###

```php
<?php

//creates array containing names
$names = array("Benjamin", "Aaron", "Bob");

//creates array containing email.
$emails = array("admin@benjaminnordin.se", "AK4007@gmail.com", "bob@g-mail.dog");

foreach ($names as $nr){
  echo "Name: " . $nr . "\n";
}

foreach($emails as $nr => $ort){
  echo "<p>$names[$nr] Has the email: $ort</p>" . "\n";
}

?>
```


### Try it If you like ###

<script src="//repl.it/embed/Lk2T/0.js"></script>
