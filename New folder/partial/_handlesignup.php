<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $user_name = $_POST['signupname'];
    $user_email = $_POST['signupemail'];
    $user_mobile = $_POST['signupMobile'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['confirmPassword'];
    //check wheteher this email exist
    $existsql = "SELECT * FROM `users` WHERE user_email = '$user_email'";
    $result = mysqli_query($conn,$existsql);
    $numrows = mysqli_num_rows($result);
    if($numrows>0){
        $showError = "Email is already exist";
    }
    else{
        if($pass == $cpass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_mobile`,`user_pass`, `timestamp`) VALUES ('$user_name','$user_email','$user_mobile','$hash', current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if($result){
                $showAlert = true;
                header("Location: /New folder/index.php?signupsuccess=true");
                exit();
            }
        }
        else{
            $showError = "Password doesn't match";
            
        }
    }
    header("Location: /New folder/index.php?signupsuccess=false&error=$showError");

}
?>