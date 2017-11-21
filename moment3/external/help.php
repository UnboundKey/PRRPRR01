<!---
Created by Benjamin Nordin
--->
<!DOCTYPE html>
<!--Sätter språket på svenska -->
<html lang="en">
    <head>
        <!--Making the website compatable with swedish letter-->
        <meta charset="utf-8">
        <title>Webcode - StartCode</title>
        <!--importing the stylesheet -->
        <link href="css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    	<table>
    		<?php
for($i = 0; $i <= 1000; $i++) {

  echo "<tr>";

  for($star = 0; $star <= $i; $star++){
  echo "<td> $star </td>";	
  }
   echo "</tr>";
}
?>
</table>
    </body>
</html>