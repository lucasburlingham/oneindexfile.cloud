<?php

if(isset($_POST['site'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];

	$db = new SQLite3('db\users.db');


	$db->exec("INSERT INTO users (name, email) VALUES ('$name', '$email')");
	
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=One">
	<title>Document</title>
</head>

<body>

</body>

</html>