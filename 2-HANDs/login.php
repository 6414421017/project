
<?php 
    session_start();
    require_once 'config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/sign-in..css" rel="stylesheet">
   
    <link rel="stylesheet" href="css/register.css">
</head>
<body class="text-center">

    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li><a href="bar.php" class="nav-link fs-1 fw-bold px-2 link-dark">2 HANDS</a></li>
        </ul>
    </header>
            
   <main class="form-signin w-100 m-auto" >
        <!-- Registration form -->
        <form action="login_db.php" method="post">

            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
            <?php } ?>

            <!-- Username input -->
            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" aria-describedby="username" placeholder="Username">
                <label for="username">Username</label>
            </div>

            <!-- Password input -->
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" aria-describedby="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            
            <button type="submit" name="login" class="w-100 btn btn-lg btn-primary">Sign in</button>

            <p>Not yet a member?<a href="register.php" class="ms-2 text-decoration-none">Sign up</a></p>

        </form>
        </main>
            
        <footer class="py-5">
            <p class="text-center text-muted">© 2023 Witchaphon 6414421017</p>
        </footer>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>