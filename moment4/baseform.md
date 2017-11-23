#  Benjamin Nordin's programing 1 Repo #

***
([NEXT\> Forms and functions](./formmethods.md))

##  Moment 3 - Base Form ##


### MOMENT4-FORMS.PHP ###

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <title>Document</title>

</head>
<body>
	<div class="basic-form">	
		<img src="Img/BlastLogo.png">	
	 	<form method="post" action="output.php" id="InfoForm">
	 		<fieldset>
		 		<p>First Name: <input type="text" name="firstName" required="" placeholder="Bob"></p>
		 		<p>Last Name: <input type="text" name="lastName" required="" placeholder="Ross"></p>
		 		<p>Birthdate: <input type="date" name="birth"></p>
		 		<p>Password: <input type="password" name="password"></p>
		 		<p><input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female"> Female</p>
	 		</fieldset>
			<p><input type="checkbox" name="agree" required=""> I agree to the Terms and Conditions</p>
	 		<p><input type="submit" name="submit"> <input type="reset" name="reset"></p>
	 	</form> 
	</div>
 </body>
</html>?>
```


### OUTPUT.PHP ###

```php
<?php
 	echo "<h2> Hello, " . ucfirst($_POST['firstName']) . " " . ucfirst($_POST['lastName']) . "</h2>";
 	echo "<h3> Here's what we got from your form:</h3>";
 	echo "<h3>First Name: ". ucfirst($_POST['firstName']) ."</h3>";
 	echo "<h3>Last Name: ". ucfirst($_POST['lastName']) ."</h3>";
 	if($_POST['birth'] != null){
 		echo "<h3>Birthdate: ". $_POST['birth'] ."</h3>";
 	} 
 	if (isset($_POST['password'])) {
 	echo "<h3>Password: ". $_POST['password'] ."</h3>";
 	}
 	if (isset($_POST['gender'])) {
 	echo "<h3>Gender: ". $_POST['gender'] ."</h3>";
 	}
	if(isset($_POST['agree'])){
	echo "<h3>Agree: ". $_POST['agree'] ."</h3>";
	}
 	?>

```

### Try it If you like ###

<a href="http://php.benjaminnordin.se/external/moment4-forms.php">CLICK HERE</a>