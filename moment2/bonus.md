#  Benjamin Nordin's programing 1 Repo #

***
([<PREV: Arrays](./arrays.md))

##  Moment 2 - "BONUS" ##

```php
<?php
$s = "Programmering är \"kul\"";    // Strängen du skall jobba med
  $arr = array();                     // Skapar en array

  //
  // Lös varje uppgift genom att skriva en (endast EN) rad kod och lagra svaret i arrayen.
  //

  // 1. Skriv ut strängen som vi jobbar med mellan dubbelfnuttar
  $arr[] = "\"$s\"";
  $s = "Fotboll är den bästa sporten!";
  // 2. Lagra längden av strängen.
 $arr[] = strlen($s);
  // 3. Hämta positionen för det första mellanslaget
 $arr[] = $spacepos = strpos($s, " ");
  // 4. Klipp ut allt fram till det första mellanslaget, använd funktionen ovan.
  $arr[] = strtok($s,' ');

  // 5. I uppgiften ovan så plockade du ut första ordet, gör nu om det med stora
  // bokstäver och lägg tillbaka det i strängen. Löser du detta på en kodrad?
  // TIPS: Ta reda på vilken "huvudfunktionen" och jobba sedan med varje
  // delfunktion/argument i taget. Inget skall vara hårdkodat, hela
  // kodraden skall utgå från orginalsträngen.
  $arr[] = strtoupper(strtok($s, ' ')). substr($s, $spacepos);
  // 6. Ändra nu strängen på rad 10 till "Fotboll är den bästa sporten!"
  // och se till att alla uppgifter löses på rätt sätt.


  // denna loopen kör igenom hela arrayen och skriver ut den.
  // fundera på vad ++$index gör?

  //++$index goes to the next item in the array.
  foreach ($arr as $index => $row) {
     echo "<p>".++$index.". $row</p>";
  }
```

### Try it ###

<script src="//repl.it/embed/KyLi/5.js"></script>
