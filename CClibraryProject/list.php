<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/javascript" href="css/main.js">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>list</title>
  </head>
  <?php
          include("header.php");
       ?>
  <body>
       <br>
        <div>
         <form class="d-flex" action="index.php" method="POST" enctype="multipart/form-data">
                <a href="index.php" class="btn text-capitalize btn-success btn-lg">Add Book</a>
              </form>
       </div>
    <form action="" method="POST" enctype="multipart/form-data">
     <!--  <a href="index.html" class="btn text-capitalize btn-success btn-lg">Add Book</a> -->
    <div class="row my-5 px-5">
     
      
        <?php

          $con=mysqli_connect('localhost', 'root','','db_connect');
               $sql="select * from tbl_contact";
                $res =mysqli_query($con, $sql);
               
                  $displayq="SELECT * from tbl_contact";
                  $var=mysqli_query($con,$displayq);
                  while ($result=mysqli_fetch_array($var)) {
                    ?>
                  <div class="col-lg-3 col-md-3 col-6">
                    <div class="card card mx-5 my-5 px-5 py-5" >
                     <img src="<?php echo $result['image'];?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h6 class="card-text">Book Name :<?php echo $result['Book Name']?></h6>
                        <h6 class="card-text">Author :<?php echo $result['Author']?></h6>
                        <a href="details.php?details=<?php echo $result ['Book_id']?>" name="details" class="btn btn-success btn-lg">more info</a>
                        <a href="edit.php?id=<?php echo $result ['Book_id']?>" name="edit" type="submit" class="btn btn-secondary btn-lg">Edit</a>
                        <a href="delete.php?delete=<?php echo $result ['Book_id']?>" class="btn btn-danger btn-lg" name="delete" onclick="Cold();">
                          <span class="glyphicon glyphicon-trash"></span>
                       </a> 
                      </div>
                    </div>
                  </div>
                      <?php

                  }
                
            ?>
      
    </div>
</form>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>