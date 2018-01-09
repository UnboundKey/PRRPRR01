#  Benjamin Nordin's programing 1 Repo #

***
(Basic Form)

##  Moment 5 - File Writing and Reading ##


### OUTPUT.PHP ###

```PHP
 	<?php
    			$_numofanswers = rand(5, 20);
    			$filename = "awnsers.txt";

    			$file = fopen($filename, "w+");	

    			for($i = 0; $i < $_numofanswers; $i++) {
    				fwrite($file, rand(0,25) . "\n");
    			}
    			fclose($file);

    		?>
            
            <?php 
            $file = fopen($filename, "r");
            $awnserList = array();
            // Splitting Textfile in to strings
            while(!feof($file)){
              // Läser nästa rad till $row
              $row = fgets($file);
              // Om $row har innehåll
              if(strlen($row)>0){
                // Använd explode för att dela upp innehåll i olika arrayer
                list($awnserList[]) = explode("\n", $row);
                  }
                }
                //writing the results in a list
                echo "<h2> Resultat</h2>";
                echo "<ul>";
                for($i = 0; $i < count($awnserList); $i++) {
                    echo "<li>" . $awnserList[$i] . "</li></br>";
                }
                echo "</ul>";
                //Writing Amount of answer
                echo "<h2> # Antal Resultat # </h2>";
                echo "<h3>". count($awnserList) ."</h3>";

                //Calculating average of results
                $sumofresult = 0;
                for($i = 0; $i < count($awnserList); $i++) {
                    $sumofresult = $sumofresult + $awnserList[$i];
                }
                echo "<h2>Average of results</>";
                echo "<h3>" . $sumofresult / count($awnserList) . "</h3>";

                echo "<h3> Best Score: " . max($awnserList);
                
```



### Try it If you like ###

<a href="http://php.benjaminnordin.se/external/WritingFile.php">CLICK HERE</a>