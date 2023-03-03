<?php 
    session_start();
    require_once 'config/db.php';
    $prd_id = $_GET['id'];

    // if (!isset($_SESSION['user_login'])) {
    // $_SESSION['error'] = 'pls login';
    // header('location: login.php');
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
    <!-- header -->
    <?php 
      require_once 'nav.php'
    ?>
    </style>
    <?php
    
    $check_prd = $conn->prepare("SELECT * FROM products WHERE prd_id = :prd_id");
    $check_prd->bindParam(":prd_id", $prd_id);
    $check_prd->execute();

    if ($check_prd->rowCount() == 0) {
        echo "Product not found";
    } else {
        $product = $check_prd->fetch(PDO::FETCH_ASSOC);
        $price = $product['price'];
?>
     
<div class="container mt-4">
    <div class="row" >
        <div class="col-md-6">

            <img src="img/<?=$product['image']?>" width="300" class="img-fluid mb-3" alt="Product Image">
        </div>
        <div class="col-md-6">

            <h2><?=$product['prd_name']?></h2>
            <p><?=$product['description']?></p>
            <p><?=$product['price']?></p>

            <form method="post" action="order.php">
                <input type="hidden" name="product_id" value="<?=$product['prd_id']?>">

                <form  class="input-group">

                    <button class="btn btn-outline-secondary" type="button" id="button-minus">-</button>
                    <input type="number" class="form-control" name="quantity" placeholder="Amount" aria-label="Amount" aria-describedby="button-minus button-plus">
                    <button class="btn btn-outline-secondary" type="button" id="button-plus">+</button>

                    <a href="order.php?id=<?php echo $product['prd_id']; ?>" name="buy" class="btn btn-lg btn-primary w-100">buy</a>
                </form>

                <input type="number" name="quantity" value="1" min="1" max="<?=$product['amount']?>">

                <?php if(isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php 
                            echo $_SESSION['error'] = 'No quantity Product';
                            unset($_SESSION['error']);
                        ?>
                    </div>
                <?php } ?>

                <a href="order.php?id=<?php echo $product['prd_id']; ?>"  name="buy" class="btn btn-lg btn-primary w-100">buy</a>
            </form>
        </div>
    </div>
</div>
<?php
    }
?>

    <!-- footer -->
    <footer class="py-5 sticky-bottom">
    <p class="text-center text-muted">© 2023 Witchaphon 6414421017</p>
    </footer>

  <script src="js/bootstrap.min.js"></script>
</body>
</html>


