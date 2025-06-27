<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    echo "Reached app/login.php<br>";
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["user_name"]) && isset($_POST["password"])){
            echo "Username and password received<br>";
            include "../DB_connection.php";
            session_start();

            // Validate input
            function validate_input($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $user_name = validate_input($_POST['user_name']);
            $password = validate_input($_POST['password']);

            echo "Validated username: $user_name<br>";
            echo "Validated password: $password<br>";

            if(empty($user_name)){
                $em = "User name is required";
                header("Location: ../login.php?error=$em");
                exit();
            }else if(empty($password)){
                $em = "Password is required";
                header("Location: ../login.php?error=$em");
                exit();
            }else{
                $sql = "SELECT * FROM users WHERE username = ?";
                $stmt = $conn->prepare($sql);
                $stmt->execute(array($user_name));

                echo "SQL executed<br>";
                echo $stmt->rowCount();
                if($stmt->rowCount() == 1){
                    $user = $stmt->fetch();
                    $usernameDb = $user['username'];
                    $passwordDb = $user['password'];
                    $role = $user['role'];
                    $id = $user['id'];
                    echo "User found: $usernameDb, Role: $role<br>";

                    if($user_name === $usernameDb){
                        echo "Username matched<br>";
                        if(password_verify($password, $passwordDb)){
                            echo "Password matched<br>";
                            if($role == "admin"){
                                $_SESSION['role'] = $role;
                                $_SESSION['id'] = $id;
                                $_SESSION['username'] = $usernameDb;
                                echo "Session set, redirecting...<br>";
                                header("Location: ../index.php");
                                echo "Redirecting...";
                                exit();

                            }else if($role == "employee"){
                                $_SESSION['role'] = $role;
                                $_SESSION['id'] = $id;
                                $_SESSION['username'] = $usernameDb;
                                echo "Session set, redirecting...<br>";
                                header("Location: ../index.php");
                                echo "Redirecting...";
                                exit();
                            }else {
                                $em = "unknown error occured";
                                header("Location: ../login.php?error=" . urlencode($em));
                                exit();
                            }

                        }else{
                            $em = "Incorrect password!";
                            echo "❌ Password did not match<br>";
                            header("Location: ../login.php?error=$em");
                            echo "Redirecting...";
                            exit();
                        }
                    }else{
                        $em = "Incorrect username or Password";
                        header("Location: ../login.php?error=$em");
                        echo "Redirecting...";
                        exit();
                    }
                    
                }
            }


        }else{
            $em = "unknown error occured";
            header("Location: ../login.php?error=" . urlencode($em));
            exit();
        }
    }
?>