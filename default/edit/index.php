<?php

// If we are receiving a POST request, then we need to save the file
if(isset($_POST['content'])) {
	$content = $_POST['content'];
	file_put_contents('../index.html', $content);
	header('Location: ../');
}


$currentIndexFile = file_get_contents('../index.html');


?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit | <?php echo $username; ?></title>
</head>

<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<textarea name="content" id="content" cols="30" rows="10"><?php echo $currentIndexFile; ?></textarea>
		<input type="submit" value="Save">
	</form>

	<script src="/builder/ckeditor.js"></script>
	<script>
	ClassicEditor
		.create(document.querySelector('.editor'), {
			licenseKey: '',
		})
		.then(editor => {
			window.editor = editor;
		})
		.catch(error => {
			console.error('Oops, something went wrong!');
			console.error(
				'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
			);
			console.warn('Build id: ixjz5b8ci6lw-q1tmpm13890e');
			console.error(error);
		});
	</script>
</body>

</html>