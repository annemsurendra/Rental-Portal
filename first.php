<!DOCTYPE html>
<html>
<head>
	<title>Rental Portal</title>
</head>
<body>
	<form action="Rental_database.php" method="post">
	<label for="area">Choose Area: </label>
	<select id="area" name="area">
		<option value="Banglore">Banglore</option>
		<option value="Pune">Pune</option>
		<option value="Chennai">Chennai</option>
	</select>
<br>
<br>
		<label for="flat">Choose Flat: </label>
		<select id="flat" name="flat">
		<option value="1BHK">1BHK</option>
		<option value="2BHK">2BHK</option>
		<option value="3BHK">3BHK</option>
	</select>
<br>
<br>
		<input type="Submit">
	</form>
</body>
</html>