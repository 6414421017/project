<?php 
    session_start();
    require_once 'config/db.php';
    include 'product_db.php';

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
<body class="text-bg-dark">
    <!-- header -->
    <?php 
      require_once 'nav.php'
    ?>
    
    <div class=" p-3 p-md-5 m-md-3 text-center">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Prd_gens(new): 01XI</h1>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlZga_4QkMihSZs46UnJ47J1-wZOGqgvhdhg&usqp=CAU" alt="THINK and GROW RICH">
        <p class="lead fw-normal pt-5">Think and Grow Rich is a book written by Napoleon Hill and Rosa Lee Beeland released in 1937 and promoted as a personal development 
          and self-improvement book. He claimed to be inspired by a suggestion from business magnate 
          and later-philanthropist Andrew Carnegie. However there is no evidence that the two ever met.</p>
        <p class="lead fw-normal">Countdown 1:30:24</p>
        <a class="btn btn-secondary" href="login.php">Follow</a>
      </div>
    </div>

    <div class=" p-3 p-md-5 m-md-3 text-bg-light text-center">
        <img src="https://themotivationmentalist.files.wordpress.com/2014/04/e2809ccreate-a-definite-plan-for-carrying-out-your-desire-and-begin-at-once-whether-you-ready-or-not-to-put-this-plan-into-action-e2809d-e28093-napoleon-hill.jpg?w=584" alt="Napoleon Hill" class="bd-placeholder-img" width="550" height="376" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></img>
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <div>
            <strong class="d-inline-block mb-2 text-primary">Author</strong>
           <p class=" fst-italic">1943–1970</p>
           <h1 class="display-4 fst-italic">Napoleon Hill</h1>
            <p class="lead my-3">Oliver Napoleon Hill was an American self-help author. He is best known for his book Think and Grow Rich, which is among the best-selling self-help books of all time. Hill's works insisted that fervid expectations are essential to improving one's life.</p>
          </div>
      </div>
    </div>

    <!-- footer -->
    <footer class="py-5">
        <p class="text-center">© 2023 Witchaphon 6414421017</p>
    </footer>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>
