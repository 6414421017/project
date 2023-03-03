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
    <title>Sign up</title>

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
        <form action="register_db.php" method="post">

            <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

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
            <?php if(isset($_SESSION['warning'])) { ?>
                    <div class="alert alert-warning" role="alert">
                        <?php 
                            echo $_SESSION['warning'];
                            unset($_SESSION['warning']);
                        ?>
                    </div>
            <?php } ?>

            <!-- First Name input -->
            <div class="form-floating">
                <input type="text"  name="firtname" class="form-control" id="floatingInput" placeholder="First Name">
                <label for="firstname">first Name</label>
            </div>

            <!-- Last Name input -->
            <div class="form-floating">
                <input type="text"  name="lastname" class="form-control" id="floatingInput" placeholder="Last Name">
                <label for="username">Last Name</label>
            </div>

            <!-- Username input -->
            <div class="form-floating">
                <input type="text"  name="username" class="form-control" id="floatingInput" placeholder="Username">
                <label for="username">Username</label>
            </div>

            <!-- Email input -->
            <div class="form-floating">
                <input type="email"  name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="email">Email address</label>
            </div>

            <!-- Phone Number input -->
            <div class="form-floating">
                <input type="tel"  name="phone" class="form-control" id="floatingInput" placeholder="Phone Number">
                <label for="phone">Phone Number</label>
            </div>

            <!-- Password input -->
            <div class="form-floating">
                <input type="password"  name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="password">Password</label>
            </div>

            <!--Confirm Password input -->
            <div class="form-floating">
                <input type="password"  name="c_password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
                <label for="c_password">Confirm Password</label>
            </div>

            <button type="submit" name="register" class="w-100 btn btn-lg btn-primary">Sign up</button>

            <p>Already a member?<a href="login.php" class="ms-2 text-decoration-none">Sign in</a></p>

        </form>
        </main>
            
        <footer class="py-5">
            <p class="text-center text-muted">© 2023 Witchaphon 6414421017</p>
        </footer>
<script src="js/bootstrap.min.js"></script>
</body>
</html>