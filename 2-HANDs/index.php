<?php
    session_start();
    require_once 'config/db.php';
        // if (!isset($_SESSION['user_login'])) {
    //     $_SESSION['error'] = 'pls login';
    //     header('location: login.php');
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 HANDs</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/sign-in..css" rel="stylesheet">
   
</head>
<body >
    <?php 
      require_once 'nav.php'
    ?>


    <div class=" p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Prd_gens(new): 01XI</h1>
        <img src="img/Prd_013.jpg" alt="THINK and GROW RICH">
        <p class="lead fw-normal pt-5">Think and Grow Rich is a book written by Napoleon Hill and Rosa Lee Beeland released in 1937 and promoted as a personal development 
          and self-improvement book. He claimed to be inspired by a suggestion from business magnate 
          and later-philanthropist Andrew Carnegie. However there is no evidence that the two ever met.</p>
        <a class="btn btn-outline-secondary" href="prd_cms.php">Coming soon</a>
      </div>
    </div>

    <!-- product -->
    <div class="album py-5 bg-light">
      <div class="container">
      <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
      <div class="col-md-6 px-0">
        <h1 class="display-4 fst-italic">Witchaphon</h1>
        <p class="lead my-3">make this web</p>
        <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
      </div>
    </div>

    <footer class="py-5">
            <p class="text-center text-muted">© 2023 Witchaphon 6414421017</p>
        </footer>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>