<?php 
// $URL = "oneindexfile.cloud";

require_once 'config.php';

if(isset($_POST['directory']) && $_POST['directory'] != '') {
//  $name = $_POST['name'];
// 	$email = $_POST['email'];
	$directory = $_POST['directory'];
	$password = $_POST['password'];

// 	$DB->exec("INSERT INTO users (name, email, directory, passwordHash) VALUES ('$name', '$email', '$directory', '$passwordHash')");
// 	createDirectory($directory, $passwordHash);


// Create a directory for the user
$command = "mkdir -p /var/www/URL/" . $directory . "/edit";
echo $command;
shell_exec($command);

$createHtpasswd = "htpasswd -cb .htpasswd " . $email . " " . $password;
shell_exec($createHtpasswd);

$htaccessFile = <<<EOT
AuthType Basic
AuthName "Editors Restricted to Authorized Individuals Only"   
AuthUserFile /var/www/$URL/$directory/edit/.htpasswd
Require valid-user
EOT;

shell_exec("echo " . $htaccessFile . " > /var/www/" . $URL . "/" . $directory . "/edit/.htaccess");


} else {
	echo "Directory not set";
}