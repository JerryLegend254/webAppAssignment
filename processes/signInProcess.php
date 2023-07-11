<?php
    require_once "../config/dbConn.php";

if(isset($_POST["signin"])){
    $email = $_POST["email"];
    $entered_password = $_POST["pass"];

    $spot_email = "SELECT * FROM author_tbl WHERE email = '$email' LIMIT 1";
    $res_spot_email = $conn->query($spot_email);
    if($res_spot_email->num_rows > 0){
        $row_user = $res_spot_email->fetch_assoc();
        $stored_password = $row_user["password"];
        $username = $row_user["username"];
        if(password_verify($entered_password, $stored_password)){
            header("Location: ../viewBlog.php?status=loggedIn&author=$username");
            exit();
        }else{
            header("Location: ../signIn.php?status=incorrectCredentials");
            exit();
        }
    }else{
        header("Location: ../signIn.php?status=incorrectCredentials");
        exit();
    }
    }
?>