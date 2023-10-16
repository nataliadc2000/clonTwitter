<html lang="en"><head>

    <meta charset="UTF-8">
    <meta name="description" content="Main page">
    <meta name="keywords" content="html, css, sass, bootstrap, js, php">
    <meta name="language" content="EN">
    <meta name="author" content="tumail@vedruna.es">
    <meta name="robots" content="index,follow">
    <meta name="revised" content="Tuesday, February 28th, 2023, 23:00pm">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome1">

    <!-- Añado la fuente Roboto -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" defer="" crossorigin="anonymous" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"></script>

    <!-- My css -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- My scripts -->
    <script src="js/app.js" defer="" type="text/javascript"></script>

    <!-- Titulo -->
    <title>Main page</title>

</head>

<body>
  <nav class="navbar navbar navbar-dark bg-info" style="height: 7vh;">
    <a class="navbar-brand mx-2">Vedruitter</a>
    <a class="nav-link text-white" href="?q=a">All</a>
    <a class="nav-link text-white" href="./mainPage.php">Follow</a>
    <form class="form-inline" action="../login/logout.php">
    <input class="btn btn-primary btn-lg" type="submit" value="LOGOUT">
                    
    </form>
  </nav>
  <div class="container-fluid d-flex justify-content-center pt-5" id="subBody" style="min-height: 93vh;">
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex gap-2">
                    <h5 class="card-title"><?= $row["username"] ?></h5>
                    <a href="./follow.php?id=16">Follow</a>
                    <a href="./unfollow.php?id=16">Unfollow</a>
                </div>
              <p class="card-text">prueba</p>
              <p class="card-text"><small class="text-muted">Created 2023-10-11</small></p>
            </div>
        </div> 
    </div>
    <div class="container">
              <div class="card mb-3">
            <div class="card-body">
              <p class="card-text">ejemplo de mi primer tweet</p>
              <p class="card-text"><small class="text-muted">Created 2023-10-16</small></p>
            </div>
        </div> 
          </div>
  
  </div>


</body></html>