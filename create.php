<?php
include "db.php";


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    /* echo"<pre>";
    var_dump($_POST);
    die; */
    $title = $_POST['title'];
    $des= $_POST['description'];

    $sql= "insert into posts (title, description) values('$title','$des')";

    $statement= $pdo->prepare($sql);
    $statement->execute();

header('location:index.php');
//     session_start();
// $_SESSION['Message']='successfully inserted';
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
    <?php 
    
    if(isset($_SESSION['Message'])){
        $msg=$_SESSION['Message'];
       echo "<p class='alert alert-success'>$msg</p>";

         
    }
    
    ?>

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card mt-5 p3">
                        <div class="card-header">
                            <!-- <button class="btn btn-primary" >Create post</button> -->
                           <p>Post create form</p>
                            <div class="card-body">
                               <form action="" method="post">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control">
                                    <label for="">Descrition</label>
                                    <input type="text" name="description" class="form-control">

                                    <button class="btn btn-success" type="submit">Post</button>

                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>