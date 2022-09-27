<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Variables"?></title>
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
                    <a class="nav-link active" aria-current="page" href="#">04- Variables</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <?php 
                    echo "<h1 class='mt-5'>Variables</h1><hr>";
                ?>
                <?php 
					$alert1   = 'alert alert-success alert-dismissible fade show text-start';
					$alert2   = 'alert alert-warning alert-dismissible fade show text-start';
					$alert3   = 'alert alert-danger alert-dismissible fade show text-start';
					$user1    = 1;
					$user2    = 2;
					$user3    = 3;
				?>
				<div class="<?php echo $alert1; ?>"> 
					<strong>User <?php echo $user1; ?>: the information is correct</strong>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				<div class="<?php echo $alert2; ?>"> 
					<strong>User <?php echo $user2; ?>: the information is incorrect</strong>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
				<div class="<?php echo $alert3; ?>"> 
					<strong>User <?php echo $user3; ?>: the information is not registered</strong>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
            </div>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>