<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>iDiscuss Admin Dashboard</title>
</head>

<body>
<?php include 'C:\xampp\htdocs\New folder\partial\_dbconnect.php';?>
<?php include 'nav.php';?>
  

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                
                                  <?php
                                  $sql = "SELECT * FROM `categories` ORDER BY category_id"; 
                                  $result = mysqli_query($conn, $sql);
                                  $row = mysqli_num_rows($result);
                                  echo "<h3>$row</h3>";

                                  ?>
                          
                                <p class="fs-5">Categories</p>
                            </div>
                            <i class="fas fa-bars fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                            <?php
                                  $sql = "SELECT * FROM `threads` ORDER BY thread_id"; 
                                  $result = mysqli_query($conn, $sql);
                                  $row = mysqli_num_rows($result);
                                  echo "<h3>$row</h3>";

                                  ?>
                                <p class="fs-5">Post</p>
                            </div>
                            <i
                                class="fas fa-blog fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                            <?php
                                  $sql = "SELECT * FROM `users` ORDER BY sno"; 
                                  $result = mysqli_query($conn, $sql);
                                  $row = mysqli_num_rows($result);
                                  echo "<h3>$row</h3>";

                                  ?>
                                <p class="fs-5">Users</p>
                            </div>
                            <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    
                </div>

                
                   

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>