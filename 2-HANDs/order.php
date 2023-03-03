<?php
	session_start();
	include 'config/db.php';

    $prd_id = $_GET['id'];
    if (isset($_POST['buy'])) 
	// $prd_id = $conn->prepare("SELECT * FROM products WHERE prd_id")->execute();
	// $prd_name  = $conn->prepare("SELECT * FROM products WHERE prd_name")->execute();
	// $amount  = $conn->prepare("SELECT * FROM products WHERE amount")->execute();
	
	// if (empty($firstname))
	$check_prd_id = $conn->prepare("SELECT * FROM products WHERE prd_id = $prd_id, prd_name $prd_name, amoumt =$amoumt ");
	$check_prd_id->execute();


	
	if ($check_prd_idt->rowCount() > 0) {
		if ($row = $check_stmt->fetch(PDO::FETCH_ASSOC)) {
			$stmt = $conn->prepare("INSERT INTO product (prd_id, prd_name, amoumt )
									VALUE (:prd_id, :prd_name, :amoumt)");
			
            $stmt->bindParam(":prd_id", $prd_id);
            $stmt->bindParam(":prd_name", $prd_name);
            $stmt->bindParam(":amount", $amount);
			$stmt->execute();
			$_SESSION['success'] = "added you cart.";
			header("location: cart.php");
		}
	}else {
		$_SESSION['error'] = "'prd_name' Invalid quantity";
		header('location: produst_details.php');
	}

	if (isset($_POST['buy'])) {
		$amount = $_POST['quantity'];
		try {
				$check_prd = $conn->prepare("SELECT * FROM products WHERE prd_name = :prd_name");
				$check_prd->bindParam(":prd_name", $prd_name);
				$check_prd->execute();

				$row = $check_stmt->fetch(PDO::FETCH_ASSOC);

				if ($row['prd_name']->rowCount() == $prd_name ) {
					if ($row['amount']->rowCount()  < 0) {
						$_SESSION['error'] = "'prd_name' Invalid quantity";
						header('location: produst_details.php');
					} else {
						$_SESSION['success'] = "added you cart.";
						header("location: cart.php");
					}
				}
				}
		catch(PDOException $e) {
			echo $e->getMessage();
		}
	}
?>






