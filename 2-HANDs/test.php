<?php
    
    session_start();
    require_once 'config/db.php';
        // if (!isset($_SESSION['user_login'])) {
    //     $_SESSION['error'] = 'pls login';
    //     header('location: login.php');
    // }
        $prd_id = $_GET['id'];
        
        $check_prd = $conn->prepare("SELECT * FROM products WHERE prd_id = :prd_id AND amount = :amount");
        $check_prd->bindParam(":prd_id", $prd_id);
        $check_prd->bindParam(":amount", $amount);
        $check_prd->execute();
        
		$row = $check_stmt->fetch(PDO::FETCH_ASSOC);

        if ($row['amount']->rowCount() <= 0) {
             $_SESSION['error'] = "$prd_id Invalid quantity";
            header('location: produst_details.php');
        } else {
            header('location: produst_details.php');
        }

    if	(isset($_POST['quantity'])) {
        $productid = $_POST['product_id'];
		$amount = $_POST['amount'];

		$check_stmt = $conn->prepare("SELECT * FROM products WHERE amount = :amount");          
		$check_stmt->bindParam(":amount", $amount);
		$check_stmt->execute();
		$row = $check_stmt->fetch(PDO::FETCH_ASSOC);

		if (empty($row['amount'] < $amount)) {
				$_SESSION['error'] = 'no product';
				header("location: produst_details.php");
		}else {
			$_SESSION['success'] = "added the product";
			header("location: register.php");
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>

    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

<body class="bg-teal-100">
    <?php 
         require_once 'nav.php'
       ?>
       

   <script src="js/bootstrap.min.js"></script>
</div>
</html>