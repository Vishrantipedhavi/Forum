<?php
include 'C:\xampp\htdocs\New folder\partial\_dbconnect.php';

if(isset($_POST['post_add']))
{
    $tile = $_POST['Title'];
    $Description = $_POST['Description'];
    $status = $_['status'] == true ? '1':'0';

    $query = "INSERT INTO categories (thread_title,thread_desc,status) VALUES('$name','$Desc','$status')";

    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        $_SESSION['message'] = "Category Added Succesfully.";
        header('Locaton: CreateCat.php');
        exit(0);
    }
    else{
        $_SESSION['message'] = "Someting went wrong :(";
        header('Location: CreateCat.php');
        exit(0);
    }
    
}
?>