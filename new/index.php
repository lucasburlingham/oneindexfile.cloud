<?php

require_once '../config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>New | One Index File [in the] Cloud</title>

	<link rel="stylesheet" href="assets/style.css">
	<script type="text/javascript" src="assets/script.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
	</script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
	<div class="container pt-6">
		<div class="row align-items-center my-auto mx-auto ">
			<div class="col-10">
				<form action="../handler.php" method="post">

					<!-- Name -->
					<div class="form-group row">
						<div class="col-sm-10">
							<label for="name" class="col-sm-2 col-form-label !" required>Name</label>
							<input type="text" class="form-control form-control-sm" id="name" name="name" required>
						</div>
					</div>

					<!-- Email -->
					<div class="form-group row">
						<div class="col-sm-10">
							<label for="email" class="col-sm-2 col-form-label !" required>Email</label>
							<input type="text" class="form-control form-control-sm" id="email" name="email" required>
						</div>
					</div>

					<!-- Directory -->
					<label for="directory" class="form-label">Your Index File </label>
					<div class="input-group">
						<span class="input-group-text" id="host">https://<?php echo $URL; ?>/
						</span>
						<input type="text" class="form-control" id="directory" name="directory" aria-describedby="host">
						<button type="button" class="btn btn-secondary" onclick="copyLink()"
							id="copyButton">Copy</button>
					</div>

					<!-- Password -->
					<div class="form-group row">
						<div class="col-sm-10">
							<label for="password" class="col-sm-2 col-form-label !" required>Password</label>
							<input type="password" class="form-control form-control-sm" id="password">

							<!-- Show password button -->
							<div class="form-check form-switch">
								<input class="form-check-input" type="checkbox" id="showPassword"
									onclick="toggleShowPassword()">
								<label class="form-check-label" for="showPassword">Show Password
								</label>
							</div>
						</div>
					</div>

					<!-- Submit -->
					<input class="form-control btn btn-primary" type="submit" value="Submit">

				</form>


			</div>
		</div>
	</div>

</body>

</html>