<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Conditional Switch"?></title>
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
                    <a class="nav-link active" aria-current="page" href="#">11- Conditional Switch</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <?php 
                    echo "<h1 class='mt-5'>Conditional Switch</h1><hr>";
                ?>
                <?php 
					$day = date('n');
					switch ($day) {
						case 1:
							echo '<ul class="list-group">
									  <li class="list-group-item list-group-item-secondary">First Trimester</li>
									  <li class="list-group-item active">January</li>
									  <li class="list-group-item">February</li>
									  <li class="list-group-item">March</li>
									</ul>';
							break;
						case 2:
							echo '<ul class="list-group">
									  <li class="list-group-item list-group-item-secondary">First Trimester</li>
									  <li class="list-group-item">January</li>
									  <li class="list-group-item active">February</li>
									  <li class="list-group-item">March</li>
									</ul>';
							break;
						case 3:
							echo '<ul class="list-group">
									  <li class="list-group-item list-group-item-secondary">First Trimester</li>
									  <li class="list-group-item">January</li>
									  <li class="list-group-item">February</li>
									  <li class="list-group-item active">March</li>
									</ul>';
							break;
						case 4:
							echo '<ul class="list-group">
										  <li class="list-group-item list-group-item-secondary">Second Trimester</li>
										  <li class="list-group-item active">April</li>
										  <li class="list-group-item">May</li>
										  <li class="list-group-item">June</li>
										</ul>';
							break;
						case 5:
							echo '<ul class="list-group">
											  <li class="list-group-item list-group-item-secondary">Second Trimester</li>
											  <li class="list-group-item">April</li>
											  <li class="list-group-item active">May</li>
											  <li class="list-group-item">June</li>
											</ul>';
							break;				
						case 6:
							echo '<ul class="list-group">
											  <li class="list-group-item list-group-item-secondary">Second Trimester</li>
											  <li class="list-group-item">April</li>
											  <li class="list-group-item">May</li>
											  <li class="list-group-item active">June</li>
											</ul>';
							break;
						case 7:
							echo '<ul class="list-group">
									  <li class="list-group-item list-group-item-secondary">Third Trimester</li>
									  <li class="list-group-item active">July</li>
									  <li class="list-group-item">August</li>
									  <li class="list-group-item">September</li>
									</ul>';
							break;	
						case 8:
							echo '<ul class="list-group">
									  <li class="list-group-item list-group-item-secondary">Third Trimester</li>
									  <li class="list-group-item">July</li>
									  <li class="list-group-item active">August</li>
									  <li class="list-group-item">September</li>
									</ul>';
							break;
						case 9:
							echo '<ul class="list-group">
								  <li class="list-group-item list-group-item-secondary">Third Trimester</li>
								  <li class="list-group-item">July</li>
								  <li class="list-group-item">August</li>
								  <li class="list-group-item active">September</li>
								</ul>';
							break;
						default:
							echo '<ul class="list-group">
								  <li class="list-group-item list-group-item-secondary">Fourth Trimester</li>
								  <li class="list-group-item active">Final Year</li>
								</ul>';
							break;
					}
				?>
            </div>
        </div>
    </main>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>