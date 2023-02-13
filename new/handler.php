<?php 
$URL = "oneindexfile.cloud";

// require_once 'config.php';

if(isset($_POST['directory']) && $_POST['directory'] != '') {
// 	$name = $_POST['name'];
// 	$email = $_POST['email'];
	$directory = htmlspecialchars($_POST['directory']);
// 	$password = $_POST['password'];
// 	$passwordHash = hash('sha256', $password . $SALT);

// 	$DB->exec("INSERT INTO users (name, email, directory, passwordHash) VALUES ('$name', '$email', '$directory', '$passwordHash')");
// 	createDirectory($directory, $passwordHash);




// Create a directory for the user
$command = "mkdir /var/www/$URL" . "/" . $directory;
echo $command;

exec($command);
} else {
	echo "Directory not set";
}