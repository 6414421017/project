<?php 
    require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/sign-in..css" rel="stylesheet">


</head>
<body>
    <?php
        require_once 'nav.php'
    ?>
        <div class="container">
        
            <h3>Products</h3>

            <div class="row">
                <?php 
                    $check_stmt = $conn->prepare("SELECT * FROM products");          
                    $check_stmt->execute();
                    if ($check_stmt->rowCount() > 0) {
                        while ($row = $check_stmt->fetch(PDO::FETCH_ASSOC)) {
                            
                ?>
                <form class="col-md-4">

                    <div class="card mb-4">

                        <img src="img/<?php echo $row['image']; ?>" class="card-img-top img-fluid" alt="<?php echo $row['prd_name']; ?>" >
                    
                    <div class="card-body">
                        
                    <h5 class="card-title"><?php echo $row['prd_name']; ?></h5>
                            <p class="card-text">$<?php echo $row['price']; ?></p>
                            <a href="product_details.php?id=<?php echo $row['prd_id']; ?>" class="btn btn-lg btn-primary w-100">View</a>
                    </div>
                    </div>
                </form>
                <?php 

                
                    }
                } else {
                    echo "No products found.";
                }

                ?>
            </div>
        </div>

        <footer class="py-5">
            <p class="text-center text-muted">© 2023 Witchaphon 6414421017</p>
        </footer>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

