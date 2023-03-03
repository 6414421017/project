<?php
    if (isset($_SESSION['user_login'])) {
        $id = $_SESSION['user_login'];
        
        $stmt = $conn->prepare("SELECT * FROM user WHERE id = :uid");
        $stmt->bindParam('uid',$id);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        ?>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <span><?php echo $row['username']; ?></span>
                <a class="btn btn-outline-primary mx-2" href="shoppingcart.php" role="button">Cart</a>
                <a class="btn btn-primary" href="logout.php" role="button">Logout</a>
            </ul>
        </div>
    <?php
    } else { ?>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <a class="btn btn-outline-primary me-2" href="login.php" role="button">Login</a>
                <a class="btn btn-primary" href="register.php" role="button">Sign-up</a>
            </ul>
        </div>
    <?php } ?>