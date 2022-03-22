<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebStack - SouFuture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Includes/Resources/Style.css">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/b8b3f6fe70.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <!--<img class= "ryu" src="https://media.giphy.com/media/l2QE6znHVshMqR5ba/giphy.gif"> -->
        <br>
        <img class="img_soufuture"  src="Includes/img/wallpaper.png">

        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
              <h5 class="text-white h4">Collapsed content</h5>
              <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
          </div>

        <br> <br>


        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a id="btn-home" class="btn btn-outline-success " href="index.php">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                    <a id="btn_login" class="btn btn-outline-success" aria-current="page" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a id="btn_sobre" class="btn btn-outline-success mr-3" href="sobre.html">Sobre nós</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
              </div>
            </div>
          </nav>

    </header>
