<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Challenge Dates"?></title>
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
                    <a class="nav-link active" aria-current="page" href="#">25- Challenge Dates</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php 
                    echo "<h1 class='mt-5 text-center'>Challenge Dates</h1><hr>";
                ?>
                <form action="" method="POST">
					<div class="mb-3">
						<label for="birthdate"> Birth Date: </label>
						<input type="date" id="birthdate" name="birthdate" class="form-control" placeholder="mm/dd/yyyy">
					</div>
					<div class="mb-3">
						<button type="submit" class="btn btn-outline-success"> Calculate Age </button>
					</div>
				</form>
				<?php 
					if($_POST) {
						$day   = date('d', strtotime($_POST['birthdate']));
						$month = date('m', strtotime($_POST['birthdate']));
						$year  = date('Y', strtotime($_POST['birthdate']));

						$born  = mktime(0, 0, 0, $month, $day, $year);
						$today = mktime(0, 0, 0, date('m'), date('d'), date('Y'));

						$years  = $today - $born;
						$years  = ( ( ( ( $years / 60 ) / 60 ) / 24 ) / 365 );

						echo '<div class="alert alert-success">
								<div class="lead">
									'.floor($years).' Years old
								</div>
							  </dia>';
					}
				?>
            </div>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>