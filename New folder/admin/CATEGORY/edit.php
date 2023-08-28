<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>Hello, world!</title>
  </head>
  <body>
  <?php include 'C:\xampp\htdocs\New folder\partial\_dbconnect.php';?>
  <?php include 'C:\xampp\htdocs\New folder\admin\nav.php';?>
  <?php include ('message.php'); ?>
    <h4>Edit Category</h4>
    
    <?php
    if(isset($_GET['category_id']))
    {
    $category_id = $_GET['category_id'];
    $category_edit = "SELECT * FROM categories WHERE category_id='$category_id' LIMIT 1";
    $category_run = mysqli_query($conn,$category_edit);

    if(mysqli_num_rows($category_run) > 0)
    {
        $row = mysqli_fetch_array($category_run);
        ?>
    <form action="handlecat.php" method="POST">
        <input type="hidden" name="category_id" value="<?= $row['category_id'] ?>">
  <div class="form-group">
    <label for="Name">Category Name</label>
    <input type="text" name="Name" class="form-control" id="Name" value="<?= $row['category_name']?>" >
  </div>
  <div class="form-group">
    <label for="Dsecription">Category Description</label>
    <textarea class="form-control" id="Desc" name="Desc"><?= $row['category_discription']?></textarea>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input"  nmae="status" id="status" <?= $row['status'] == '1' ? 'checked':'' ?>>
    <label class="form-check-label" for="exampleCheck1">Status</label>
  </div>
  <button type="submit" name="category_Update" class="btn btn-success">Update</button>
</form>
        <?php
    }
    else{
        ?>
        <h4>No Record Found</h4>
        <?php
    }
    }
    ?>
   
   


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>