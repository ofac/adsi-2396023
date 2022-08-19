<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Hello World!"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
          <div class="container">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Main Menu (PHP) </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">Hello World! </a>
                    </li>
                </ul>
            </div>
      </div>
    </nav>
    
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php echo "<h1 class='text-center my-5'>Hello World!</h1>"; ?>
                <hr>
                <?php 
                    print('<p class="text-start text-muted lh-lg">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime vero numquam earum rem nihil dolorum aperiam doloremque quaerat repellat qui esse totam ratione velit cum ad, dolor sunt autem nobis excepturi laborum voluptate aspernatur saepe necessitatibus unde. Minima doloribus deserunt dicta. Obcaecati, hic. Aspernatur ut officia repellat deserunt amet doloremque, recusandae delectus rerum excepturi tempora quasi beatae, voluptatem esse magnam dolores explicabo. Atque esse vel, earum libero, placeat voluptatum ad ipsum nobis aliquid nostrum exercitationem quidem eaque necessitatibus excepturi numquam dicta eum minima totam voluptatem sapiente porro velit neque. Explicabo, praesentium nesciunt aliquid in modi perspiciatis exercitationem sint. Quidem, voluptate.
                    </p>')
                ?>
            </div>
        </div>
    </main>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>