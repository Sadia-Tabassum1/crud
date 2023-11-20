<?php
include "db.php";


//read form database

$data="select * from posts";
$statement= $pdo->query($data);
$posts= $statement->fetchAll(PDO::FETCH_ASSOC);

/* echo"<pre>";
var_dump($posts);
die; */

//read by id
/* $id= $_GET['post_id'];
$sql= "select * from posts where id= $id";
$st=$pdo->query($sql);
$post=$st->fetch(PDO::FETCH_ASSOC);
 */
// delete
/* if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $sql= " delete posts  where id= $id";
    $statement= $pdo->prepare($sql);
    $statement->execute();

    header('location:index.php');
} */



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">

            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card mt-5 p3">
                        <div class="card-header">
                            <a class="btn btn-primary" href="create.php">Create post</a>
                            
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Serial No</th>
                                        <th scope="col">title</th>
                                        <th scope="col">Decription</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php 
                                         $i=1;
                                        foreach($posts as $post) :
                                        
                                        ?>

                                        <tr>
                                        <th scope="row"><?= $i++ ?></th>
                                        <td><?php echo $post['title'] ?></td>
                                        <td><?php echo $post['description'] ?></td>
                                        <td>
                                            <a href="edit.php?post_id=<?=$post['id']?>" class="btn btn-warning">Edit</a>
                                            <a href="<?=$post['id']?>" class="btn btn-danger">Delete</a>
                                        </td>

                                        <?php 
                                        endforeach; 
                                        ?>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>