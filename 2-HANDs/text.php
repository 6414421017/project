<?php
    if (isset($_SESSION['user_login'])) {
        $id = $_SESSION['user_login'];
        
        $stmt = $conn->prepare("SELECT * FROM user WHERE id = :uid");
        $stmt->bindParam('uid',$id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="col-md-3 text-end">
            <span class="bg-outline-primary me-2" ><?php echo $row['username']; ?></span>
            <a class="btn btn-primary" href="bar.php" role="button">logout</a>
        </div>
    <?php
    } else { ?>
        <div class="col-md-3 text-end">
            <a class="btn btn-outline-primary me-2" href="login.php" role="button">Login</a>
            <a class="btn btn-primary" href="register.php" role="button">Sign-up</a>
        </div>
<?php } ?>












                      
    <div class="container w-2/6 my-5">

<div class="row justify-center font-semibold">
    <div class="header text-2xl  text-white bg-teal-600">
        <h2>login</h2>
    </div>

    <!-- Registration form -->
    <form action="login_db.php" method="post">
        
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
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" aria-describedby="username" placeholder="Username...">
        </div>

        <!-- Password input -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="******">
        </div>

        <div class="mb-3">
            <button type="submit" name="login" class="btn text-white bg-teal-600 hover:bg-teal-700">Submit</button>
        </div>

        <p class="text-center">Not yet a member?<a class="ml-2 text-teal-600 hover:text-teal-700" href="register.php">Sign up</a></p>

    </form>
</div>
</div>
