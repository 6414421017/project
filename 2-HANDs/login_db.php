<?php 

    session_start();
    require_once 'config/db.php';

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username)) {
            $_SESSION['error'] = 'username wrong';
            header("location: login.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'password wrong';
            header("location: login.php");
        } else if (strlen($_POST['password']) < 5)  {
            $_SESSION['error'] = 'password must be more 5 ';
            header("location: login.php"); 
        } else {
            try {                
                $check_data = $conn->prepare("SELECT * FROM user WHERE username =:username");          
                $check_data->bindParam(":username",$username);
                $check_data->execute();
                $row = $check_data->fetch(PDO::FETCH_ASSOC);

                if ($check_data -> rowCount() > 0) {

                    if ($username == $row['username']){

                        if (password_verify($password, $row['password'])) {
                            if ($row['urole'] == 'admin') {
                                $_SESSION['admin_login'] = $row['id'];
                                header("location: admin.php");
                            } else {
                                $_SESSION['user_login'] = $row['id'];
                                header("location: index.php");
                            }
                        } else {
                            $_SESSION['error'] ='password wrong';
                            header("location: login.php");
                        }
                    } else {
                        $_SESSION['error'] ='username wrong';
                        header("location: login.php");
                    }
                    
                } else {
                    $_SESSION['error'] = "not found information. pls sign up";
                    header("location: login.php");
                }
            } catch(PDOException $e) {
                echo $e->getMessage();
            }

        }
    }
?>