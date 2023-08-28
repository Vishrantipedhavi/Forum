<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
     include 'C:\xampp\htdocs\New folder\partial\_dbconnect.php';
    $login_name = $_POST['login_name'];
    $login_pass = $_POST['login_Pass'];

    $sql = "Select * from admin where login_name='$login_name'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['login_pass'])){
            
        header("Location: /New folder/admin/index.php");
             
    }
    header("Location: /New folder/admin/index.php");  
}
}
?>