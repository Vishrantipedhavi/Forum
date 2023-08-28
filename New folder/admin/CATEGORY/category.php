<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>Welcome to iDiscuss - Coding Forums</title>
</head>

<body>
    <?php include 'C:\xampp\htdocs\New folder\partial\_dbconnect.php';
    $query = "SELECT category_id, category_name, category_discription, status, created FROM categories";
    $result = mysqli_query($conn, $query);?>
    

    <div class="card card-outline rounded-0 card-navy">
        <div class="card-header">
            <h3 class="card-title">List of Categories</h3>
            <div class="card-tools">
                <a href="CreateCat.php" id="create_new" class="btn btn-flat btn-primary"><span
                        class="fas fa-plus"></span> Create New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="container-fluid">

                <table class="table table-hover table-striped table-bordered" id="list">
                    <colgroup>
                        <col width="5%">
                        <col width="15%">
                        <col width="25%">
                        <col width="25%">
                        <col width="15%">
                        <col width="15%">
                        <col width="15%">
                    </colgroup>
                    <thead>

                        <tr>
                            <th>id</th>
                            <th>Date Created</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {   
 ?>
                    <tbody>
                        <tr>
                            <td><?php echo $data['category_id']; ?></td>
                            <td><?php echo $data['created']; ?></td>
                            <td><?php echo $data['category_name']; ?></td>
                            <td><?php echo $data['category_discription']; ?></td>
                            <td><?php echo $data['status'] == '1' ? 'hidden':'visible' ?></td>
                            <td>
                                <form action="handlecat.php" method="POST">
                                    <button type="submit" class="btn btn-outline-success" name="category_delete"
                                        value="<?php echo $data['category_id'];?>">delete</button>
                                </form>
                            </td>
                            <td>

                                <a class = "btn btn-info"
                                    href="edit.php?category_id=<?= $data['category_id'] ?>">
                                    <span class="fa fa-edit text-primary"></span>
                                    Edit</a>
           


            </td>
            </tr>
            <?php
  $sn++;}} else { ?>
            <tr>
                <td colspan="8">No data found</td>
            </tr>
            <?php } ?>

            </tbody>
            </table>
        </div>
    </div>
    </div>
    </form>






    <!-- Optional JavaScript -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function() {
        el.classList.toggle("toggled");
    };
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>