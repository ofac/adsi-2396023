<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Exceptions"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">&larr; Main Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">32- Exceptions</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <?php 
                    echo "<h1 class='mt-5'>Exceptions</h1><hr>";
                ?>
                <form action="" method="POST">
					<div class="mb-3">
						<input type="number" class="form-control" name="age" placeholder="Enter your age">
					</div>
					<div class="mb-3">
						<input type="submit" value="Validate" class="btn btn-success">
					</div>
				</form>
				<?php 
					if ($_POST) {
						function validate_age($age) {
							if ($age < 18) {
								throw new Exception("You can't vote!");
							}
							return true;
						}
						try {
							validate_age($_POST['age']);
							echo '<div class="alert alert-success">
									You can vote!
								  </div>';
						} catch (Exception $e) {
							echo '<div class="alert alert-danger">
									Error: '.$e->getMessage().'
								  </div>';
						}
					}
				?>
            </div>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>