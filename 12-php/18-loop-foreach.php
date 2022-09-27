<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Loop Foreach"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
    <style>
		button.btn-custom { 
			background-color: #721c8a; 
			color: #fff;
		}
		button.btn-custom:hover {
			color: #fff;
			background-color: #5a1771; 
		}
	</style>
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
                    <a class="nav-link active" aria-current="page" href="#">18- Loop Foreach</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <?php 
                    echo "<h1 class='mt-5'>Loop Foreach</h1><hr>";
                ?>
                <?php 
					$buttons = array('btn-danger', 'btn-warning', 'btn-success', 'btn-primary', 'btn-info', 'btn-secondary', 'btn-dark', 'btn-light', 'btn-link', 'btn-custom');
				?>
				<?php foreach ($buttons as $button): ?>
                    <div class="mb-2">
                        <button class="btn btn-lg btn-block <?php echo $button; ?>">
                            <?php echo $button; ?>
                        </button>
                    </div>
				<?php endforeach ?>
            </div>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>