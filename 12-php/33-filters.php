<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Filters"?></title>
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
                    <a class="nav-link active" aria-current="page" href="#">33- Filters</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <?php 
                    echo "<h1 class='mt-5'>Filters</h1><hr>";
                ?>
                <form action="" method="POST">
					<div class="mb-3">
						<input type="number" class="form-control" name="age" placeholder="Enter you Age">
					</div>
					<div class="mb-3">
						<input type="email" class="form-control" name="email" placeholder="Enter your Email">
					</div>
					<div class="mb-3">
						<input type="url" class="form-control" name="url" placeholder="Enter your URL">
					</div>
					<div class="mb-3">
						<input type="submit" value="Apply Filters" class="btn btn-success">
					</div>
				</form>
				<?php 
					if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						// AGE - - - - - - - - - - - - - - - - -
						$age = $_REQUEST['age'];
						$ops = array('options' => 
							   array('min_range' => 18, 
							   	     'max_range' => 23
							   	)
							);
						if (!filter_var($age, FILTER_VALIDATE_INT, $ops)) {
							echo '<div class="alert alert-danger">
									You Cannot Participate in WSI!
								  </div>';
						} else {
							echo '<div class="alert alert-success">
									You Can Participate in WSI!
								  </div>';
						}
						// EMAIL - - - - - - - - - - - - - - - - -
						if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
							echo '<div class="alert alert-danger">
									The Email is not valid!
								  </div>';
						} else {
							echo '<div class="alert alert-success">
									The Email is valid!
								  </div>';
						}
						// URL - - - - - - - - - - - - - - - - -
						$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
						echo '<div class="alert alert-success">
							The URL disinfected is: '.$url.'
							  </div>';
					}
				?>
            </div>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>