<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Send Mail"?></title>
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
                    <a class="nav-link active" aria-current="page" href="#">31- Send Mail</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <?php 
                    echo "<h1 class='mt-5'>Send Mail</h1><hr>";
                ?>
                <form action="" method="POST">
					<div class="mb-3">
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="mb-3">
						<input type="text" class="form-control" name="subject" placeholder="Subject">
					</div>
					<div class="mb-3">
						<textarea name="message" rows="4" class="form-control" placeholder="Message"></textarea>
					</div>
					<div class="mb-3">
						<input type="submit" value="Send" class="btn btn-outline-success">
						<input type="reset" value="Clear Form" class="btn btn-outline-secondary">
					</div>
				</form>
				<?php 
					if ($_POST) {
						$email   = $_POST['email'];
						$subject = $_POST['subject'];
						$message = $_POST['message'];
				?>
				<?php if (mail('ofac@misena.edu.co', "Subject: $subject", "Message: $message", "From: $email")): ?>
					<div class="alert alert-success">
						The email has been sent successfully!
					</div>
				<?php else: ?>
					<div class="alert alert-danger">
						The email could not be sent!
					</div>
				<?php endif ?>
				<?php } ?>
            </div>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>