<?php
    session_start();
    include 'config/db.php';

	if (!isset($_SESSION['user_login'])) {
		$_SESSION['error'] = 'pls login first';
		header('location: login.php');
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoping Cart</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/sign-in..css" rel="stylesheet">

</head>
<body>
    <?php
        include 'nav.php';
    ?>


	<!-- show Product -->
    <div class="container">
		<h1 class="text-center">Product List</h1>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Product Name</th>
					<th>Description</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
			</thead>
			<?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>
			<tbody>
				<tr>
					<td>Product 1</td>
					<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
					<td>$10.00</td>
					<td><a href="#" class="btn btn-primary">Buy</a></td>
				</tr>
				<tr>
					<td>Product 2</td>
					<td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
					<td>$20.00</td>
					<td><a href="#" class="btn btn-primary">Buy</a></td>
				</tr>
				<tr>
					<td>Product 3</td>
					<td>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</td>
					<td>$30.00</td>
					<td><a href="#" class="btn btn-primary">Buy</a></td>
				</tr>
				<tr>
					<td>Product 4</td>
					<td>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
					<td>$40.00</td>
					<td><a href="#" class="btn btn-primary">Buy</a></td>
				</tr>
			</tbody>
		</table>
	</div>


	<div class="d-flex justify-content-between align-items-center bg-light ">
		<div class="container">

			<div class="text-start">
				<a class="btn btn-primary" href="product.php" role="button">previous</a>
			</div>
			<div class="text-end">
				<a class="btn btn-primary" href="product.php" role="button">previous</a>
			</div>
	</div>
	</div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>