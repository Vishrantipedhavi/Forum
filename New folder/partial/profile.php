<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #ques{
            min-height: 433px;
        }
    </style>
    <title>Welcome to iDiscuss - Coding Forums</title>
</head>

<body>
    <?php include '_dbconnect.php';?>
    <?php include '_header.php';?>
    <?php
    $id = $_GET['catid'];
    $sql = "SELECT * FROM `threads` where  sno=sn "; 
    $result = mysqli_query($conn, $sql);
    $noResult = true;
    while($row = mysqli_fetch_assoc($result)){

        $id = $row['thread_id'];
        $title = $row['thread_title'];
        $desc = $row['thread_desc']; 
        $thread_time = $row['timestamp']; 
        $sno = $row['sno']; 
    }
        ?>
    <?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){ 
    
    echo'    <div class="container mb-5" id="ques">
        <h1 class="py-2">Welcome '. $_SESSION["useremail"]. '</h1>
        <p><h2>Question Asked By You</h2></p>';
        $sno= $_SESSION["sno"];
        $sql = "SELECT * FROM `threads` where sno= $sno"; 
        $result = mysqli_query($conn, $sql);
        $noResult = true;
        while($row = mysqli_fetch_assoc($result)){
    
            $id = $row['thread_id'];
            $title = $row['thread_title'];
            $desc = $row['thread_desc']; 
            $thread_time = $row['timestamp']; 
            $sno = $row['sno']; 
        }
        echo '<div class="media my-3">
            <img src="img/img.png" width="54px" class="mr-3" alt="...">
            <div class="media-body">'.
             '<h5 class="mt-0"> <a class="text-dark" href="thread.php?threadid=' . $id. '">'. $title . ' </a></h5>
                '. $desc . ' </div>'.'<div class="font-weight-bold my-0"> </div>'.
        '</div>';

            
        
    }
        ?>
       

        
        
   
    

   
       

    <?php include '_footer.php';?>
    <!-- Optional JavaScript -->
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