#  Benjamin Nordin's programing 1 Repo #

***
([<PREV foreach ](./foreach.md)) ([NEXT\> ](./functioncalls.md))

##  Moment 3 - Break and Continue ##


### PHP ###

```php
<?php

for ($i=0; $i < 20; $i++) { 
		//Checks if $i is evenly devisable by 3 and if is skip echoing and restart the loop.
            if ($i%3 == 0) {
                continue;
                }
                else {
                echo "i = ". $i;
            
            }
            if ($i >= 15){
              break;
            }

        }

?>
```


### Try it If you like ###

<script src="//repl.it/embed/LlIs/1.js"></script>