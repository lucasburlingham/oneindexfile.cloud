<?php

// If we are receiving a POST request, then we need to save the file
if(isset($_POST['content'])) {
	$content = $_POST['content'];
	try {
		// Try to save the file
		file_put_contents('../index.html', $content) or die('Could not write to file' .  " <br>Content: " . $content);
		sleep(2);
		header('Location: ../');
	} catch (Exception $e) {
		// If we can't save the file, then we need to show the form
		echo "Error: " . $e->getMessage();
	}
} else {
	// If we are not receiving a POST request, then we need to show the form

	$currentIndexFile = file_get_contents('../index.html');
	if(file_exists('../index.html') == false) {
		
		// Don't use die, we want to show the form to generate the missing file
		echo('Could not read index.html, creating file when form is submitted');
		$currentIndexFile = "Start typing and use the toolbar to format your text. Save your changes by clicking the 'Submit' button below.";
	}
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Edit </title>
	<script src="../../builder/build/ckeditor.js"></script>
	<!-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script> -->
</head>

<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<textarea name="content" id="editor">
			<?php echo $currentIndexFile; ?>
        </textarea>
		<p>
			<input type="submit" value="Submit">
		</p>
	</form>
	<script>
	ClassicEditor
		.create(document.querySelector('#editor'))
		.catch(error => {
			console.error(error);
		});
	</script>


</body>

</html>