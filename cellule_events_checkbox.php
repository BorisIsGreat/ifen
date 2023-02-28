<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - A Pen by Boris</title>
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Interactive Checkbox Example</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<label for="checkbox">Cellule Events:</label>
		<input type="checkbox" id="checkbox" name="checkbox" value="1">
		<input type="submit" value="Submit">
	</form>
	<?php
		if(isset($_POST['checkbox'])) {
			$checked = true;
			echo "The checkbox is checked.";
		} else {
			$checked = false;
			echo "The checkbox is not checked.";
		}
	?>
</body>
</html>
<!-- partial -->
  
</body>
</html>
