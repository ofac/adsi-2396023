<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Forms (POST)"?></title>
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
                    <a class="nav-link active" aria-current="page" href="#">23- Forms (POST)</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php 
                    echo "<h1 class='mt-5 text-center'>Forms (POST)</h1><hr>";
                ?>
                <form action="" method="POST">
					<div class="mb-3">
						<label for="name" class="form-label">Full Name:</label>
						<input type="text" class="form-control <?php if($_POST && empty($_POST['name'])): ?>is-invalid<?php endif ?>" name="name" id="name">
                        <div class="invalid-feedback">
                            Please enter a Full Name.
                        </div>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email:</label>
						<input type="email" class="form-control <?php if($_POST && empty($_POST['email'])): ?>is-invalid<?php endif ?>" name="email" id="email">
                        <div class="invalid-feedback">
                            Please enter a Email.
                        </div>
					</div>
					<div class="mb-3">
						<input type="submit" class="btn btn-success" value="Send Form">
						<input type="reset" class="btn btn-light" value="Clear Form">
					</div>
				</form>
				<?php if ($_POST): ?>
                    <?php if (!empty($_POST['name']) && !empty($_POST['email'])): ?>
					<div class="alert alert-success">
						<strong>Full Name:</strong> <?php echo $_POST['name']; ?>
						<br>
						<strong>Email:</strong> <?php echo $_POST['email']; ?>
					</div>
                    <?php endif ?>
				<?php endif ?>
            </div>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>