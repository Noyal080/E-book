<?php
if(isset($_POST['register']))
{
    include_once('./include/connect.php');
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (empty($uname) || empty($email) || empty($pass)) {
        header("Location: ../register.php?error=fields_are_empty");
        exit();

    }
    elseif ((!filter_var($email, FILTER_VALIDATE_EMAIL)) && (preg_match("/^[a-zA-Z0-9]*$/", $uname))) {
        header("Location: ../register.php?error=email_and_username_is not valid");
        exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../register.php?error=email is not valid");
        exit();
    }
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $uname)) {
        header("Location: ../register.php?error=username is not valid");
        exit();
    }
   
    else {
        $query = "SELECT username FROM users WHERE username =?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $query)) {
            header("Location: ../register.php?error=prepared statement error");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $uname);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt); // if you need to access the information of data from data base
            $checkresult = mysqli_stmt_num_rows($stmt);

            if ($checkresult > 0) {
                header("Location: ../register.php?error=user already registered");
                exit();
            }
            else{

                $query = "INSERT INTO users (username, password,email) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $query)) {
                    header("Location: ../register.php?errror=prepared statement error 2");
                    exit();
                }
                else{
                    $encpassword = password_hash($pass, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $uname, $encpassword,$email);
                    mysqli_stmt_execute($stmt);
                    header("Location: home.php?action=registration completed successfully");
                    exit();
                }
            }
        }
    }

mysqli_stmt_close($stmt);
mysqli_close($conn);

}


?>