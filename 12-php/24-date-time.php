<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Date & Time"?></title>
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
                    <a class="nav-link active" aria-current="page" href="#">24- Date & Time</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <?php 
                    echo "<h1 class='mt-5'>Date & Time</h1><hr>";
                ?>
                <div class="mt-4 p-5 bg-dark text-white rounded">
					<p class="lead text-center">
						<strong>hour-minutes-seconds: </strong>
						<?php echo date('h:i:s') ?>
					</p>
					<p class="lead text-center">
						<strong>day-month-year: </strong>
						<?php echo date('d-m-Y') ?>
					</p>
					<p class="lead text-center">
						<strong>Name of Day: </strong>
						<?php echo date('l') ?>
					</p>
					<p class="lead text-center">
						<strong>Full Year: </strong>
						<?php echo date('Y') ?>
					</p>
					<p class="lead text-center">
						<strong>Time Zone: </strong>
						<?php echo date('e') ?>
					</p>
					<p class="lead text-center">
						<strong>Time UNIX: </strong>
						<?php echo time() ?>
					</p>
				</div>
            </div>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>