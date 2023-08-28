<?php
include 'C:\xampp\htdocs\New folder\partial\_dbconnect.php';

if(isset($_POST['category_add']))
{
    $name = $_POST['Name'];
    $Desc = $_POST['Desc'];
    $status = $_['status'] == true ? '1':'0';

    $query = "INSERT INTO categories (category_name,category_discription,status) VALUES('$name','$Desc','$status')";

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

if(isset($_POST['category_Update']))
{
    $_category_id = $_POST['category_id'];
    $name = $_POST['Name'];
    $Desc = $_POST['Desc'];
    $status = $_['status'] == true ? '1':'0';
     $query = "UPDATE categories SET category_name='$name', category_discription='$Desc', status='$status' WHERE category_id='$_category_id' ";
     $query_run = mysqli_query($conn, $query);
     if($query_run)
     {
         $_SESSION['message'] = "Category Updatae Succesfully.";
         header('Locaton: edit.php?category_id='.$_category_id);
         exit(0);
     }
     else{
         $_SESSION['message'] = "Someting went wrong :(";
         header('Location: edit.php?cateory_id='.$_category_id);
         exit(0);
     }
 
}
if(isset($_POST['category_delete']))
{
    $category_id=$_POST['category_id'];

    //2=delete
    $query = "DELETE FROM categories WHERE category_id='$_category_id'";
    $query_run = mysqli_query($conn,$query);
    if($query_run)
     {
         $_SESSION['message'] = "Category deleted Succesfully.";
         header('Locaton: category.php');
         exit(0);
     }
     else{
         $_SESSION['message'] = "Someting went wrong :(";
         header('Location: category.php');
         exit(0);
     }
}
?>