<?php 

    session_start();
    require_once 'config/db.php';
    
    if (isset($_POST['register'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $urole = 'user';
        
        if (empty($firstname)) {
            $_SESSION['error'] = 'pls enter first name';
            header("location: register.php");
        } else if (empty($lastname)) {
            $_SESSION['error'] = 'pls enter last name';
            header("location: register.php");
        } else if (empty($username)) {
            $_SESSION['error'] = 'pls enter username';
            header("location: register.php");
        } else if (empty($email)) {
            $_SESSION['error'] = 'pls enter email';
            header("location: register.php");
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = 'invalid email address';
            header("location: register.php");
        } else if (empty($phone)) {
            $_SESSION['error'] = 'pls enter phone';
            header("location: register.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'pls enter password';
            header("location: register.php");
        } else if (strlen($_POST['password']) < 6)  {
            $_SESSION['error'] = 'password must be atleast 6 characters ';
            header("location: register.php");
        } else if (empty($c_password)) {
            $_SESSION['error'] = 'pls enter confrim password';
            header("location: register.php");
        } else if ($password != $c_password) {
            $_SESSION['error'] = 'Passwords do not match';
            header("location: register.php");
        } else {
            try {
                $check_stmt = $conn->prepare("SELECT email FROM user WHERE email = :email");          
                $check_stmt->bindParam(":email", $email);
                $check_stmt->execute();
                $row = $check_stmt->fetch(PDO::FETCH_ASSOC);

                if ($row['email'] == $email) {
                    $_SESSION['warning'] = "email already exists<a href='login.php'>click</a> for login";
                    header("location: register.php");
                } else  if (!isset($_SESSION['error'])) {
                    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $conn->prepare("INSERT INTO user (firstname, lastname, username, email, phone, password, urole)
                                            VALUE (:firstname, :lastname, :username, :email, :phone, :password, :urole)");
                    $stmt->bindParam(":firstname", $firstname);
                    $stmt->bindParam(":lastname", $lastname);
                    $stmt->bindParam(":username", $username);
                    $stmt->bindParam(":email", $email);
                    $stmt->bindParam(":phone", $phone);
                    $stmt->bindParam(":password", $passwordHash);
                    $stmt->bindParam(":urole", $urole);
                    $stmt->execute();

                    $_SESSION['success'] = "Successful registration Please login <a href='login.php'>click</a> for login";
                    header("location: register.php");
                } else {
                    $_SESSION['error'] = "error Please register again.";
                    header("location: register.php");
                }
            }catch(PDOException $e) {
                echo $e->getMessage();
            }
            
            

        }
    }
    
?>