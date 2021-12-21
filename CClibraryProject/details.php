<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- css link -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&family=Gwendolyn:wght@400;700&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
        <!-- google font -->
    </head>
     <?php
           include("header.php");
        ?>
        <div>
            <br>
            <button class="d-flex" action="list.php" method="POST" enctype="multipart/form-data">
            <a href="list.php" class="btn text-capitalize btn-success btn-lg">Back</a>
            </button> 
        </div>
    <?php
        $con=mysqli_connect('localhost', 'root','','db_connect');
        
                if (isset($_GET['details'])) {
                  $id=$_GET['details'];
                 $displayq="SELECT * from tbl_contact where Book_id=$id";
                 $var=mysqli_query($con,$displayq);
                 $result=mysqli_fetch_array($var);
                   ?>
    <form action="details.php" method="POST">
        <div class="col-lg-12 col-md-12 col-12">
        <div class="card olla" >
            <div class="card-body">
                <center>
                    <img src="<?php echo $result['image'];?>" class="detail-img" alt="Card image cap">
                    <h2 class="card-text">Book Name : <?php echo $result['Book Name']?></h2>
                    <h2 class="card-text">Author : <?php echo $result['Author']?></h2>
                    <h2 class="card-text">Book_id : <?php echo $result['Book_id']?></h2>
                    <h2 class="card-text">Description : <?php echo $result['Description']?></h2>
                    <h2 class="card-text">image :<?php echo $result['image']?></h2>
                </center>
            </div>
        </div>
    </form>
    <?php
        }
        
        
        
        ?>