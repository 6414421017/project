<!-- navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 sticky-top">
    <div class="container">

        <a href="index.php" class="d-flex justify-content-start col-md-3 navbar-brand">
            2 HANDs
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a href="index.php" class="nav-link px-2 link-dark">Home</a></li>
                <li class="nav-item">
                    <a href="product.php" class="nav-link px-2 link-dark">Product</a></li>
                <li class="nav-item">
                    <a href="blog.php" class="nav-link px-2 link-dark">blog</a></li>
            </ul>
        </div>
        <?php
            include 'join.php';
        ?>
    </div>
</nav>