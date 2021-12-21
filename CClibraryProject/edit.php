<!DOCTYPE html>
<html lang="en">
    <head>
        <title>edit</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- css link -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
     <?php
           include("header.php");
        ?>
    <body>
        <?php
            $con=mysqli_connect('localhost','root','','db_connect');
            if (isset($_GET['edit'])) {
            
              $id=$_GET['edit'];
              $query="SELECT * FROM tbl_contact WHERE Book_id=$id";
              $result=mysqli_query($con,$query);
              $showdata=mysqli_fetch_array($result);
            }
            
            if (isset($_POST['submit'])) {
                $bookname=$_POST['bookname'];
                $bookid=$_POST['bookid'];
                $author=$_POST['author'];
                $description=$_POST['description'];
               $update="UPDATE `tbl_contact` SET `Book Name`='$bookname',`Author`='$author',`Book_id`='$bookid',`Description`='$description' WHERE Book_id=$bookid";
               $pros=mysqli_query($con,$update);
               header("location:list.php");
            }
            ?>
        <section class="main-heading my-5 ">
            <form action="edit.php" method="POST" enctype="multipart/form-data">
                <div class="text-center">
                    <h1 class="display-4">Edit Details</h1>
                    <hr class="w-25 mx-auto" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Book Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="bookname" value="<?php echo $showdata ['Book Name']?>" placeholder="Enter book name" autocomplete ="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Book_Id</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="bookid" value="<?php echo $showdata ['Book_id']?>" placeholder="Enter book id" autocomplete ="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Author</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="author" value="<?php echo $showdata ['Author']?>" placeholder="Enter author name" autocomplete ="off" required>
                            </div>
                            <div class="form-floating">
                                <div><label for="floatingTextarea" class="form-label">Description</label></div>
                                <div><textarea class="form-control" name= "description" placeholder="Description" value="<?php echo $showdata ['Description']?>"  autocomplete ="off" id="floatingTextarea"></textarea></div>
                            </div>
                            <!-- end of add book section -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 col-xxl-6" >
                            <div class="mb-1">
                                <div class="my-5"><img src="<?php echo $showdata ['image']?>"   class="img-fluid img-thumbnail set" id="output"/></div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-4"><button type="submit" name="submit" class="btn btn-outline-info">Save Changes</button></div>
                </div>
            </form>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>