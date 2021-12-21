<!DOCTYPE html>
<html lang="en">
    <head>
        <title>main</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- css link -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/main.js">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
      <?php
           include("header.php");
        ?>
    <body>
        <div>
            <br>
            <button class="d-flex" action="list.php" method="POST" enctype="multipart/form-data">
            <a href="list.php" class="btn text-capitalize btn-success btn-lg">Books</a>
            </button> 
        </div>
        <div class="container mt-3">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/image1.jpg" class="d-block w-100" alt="image/image1.jpg">
                        <div class="carousel-caption d-md-block">
                            <h1>
                            Welcome to coloredcow library
                            <h1>
                            <figure class="text-end">
                                <blockquote class="blockquote">
                                    <p>“Today a reader, tomorrow a leader.” - Margaret Fuller</p>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/image2.jpg" class="d-block w-100" alt="image/image2.jpg">
                        <div class="carousel-caption d-md-block">
                            <h1>
                            Welcome to coloredcow library
                            <h1>
                            <figure class="text-end">
                                <blockquote class="blockquote">
                                    <p>“Today a reader, tomorrow a leader.” - Margaret Fuller</p>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/image3.jpg" class="d-block w-100" alt="image/image3.jpg">
                        <div class="carousel-caption d-md-block">
                            <h1 style="color:  #106E35 ">
                            Welcome to coloredcow library
                            <h1>
                            <figure class="text-end">
                                <blockquote class="blockquote">
                                    <p style="color: #106E35 ">“Today a reader, tomorrow a leader.” - Margaret Fuller</p>
                                </blockquote>
                            </figure>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- add book section -->
        <section class="main-heading my-5 ">
            <form action="cards.php" method="POST" enctype="multipart/form-data">
                <div class="text-center">
                    <h1 class="display-4">Add Book Details</h1>
                    <hr class="w-25 mx-auto" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 col-xxl-6">
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Book Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="bookname" placeholder="Enter book name" autocomplete ="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Book_Id</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="bookid" placeholder="Enter book id" autocomplete ="off" required>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Author</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="author" placeholder="Enter author name" autocomplete ="off" required>
                            </div>
                            <div class="form-floating">
                                <div><label for="floatingTextarea" class="form-label">Description</label></div>
                                <div><textarea class="form-control" name= "description" placeholder="Description" autocomplete ="off" id="floatingTextarea"></textarea></div>
                            </div>
                            <!-- end of add book section -->
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 col-xxl-6" >
                            <div class="mb-1">
                                <div class="my-5"><img src="image/image4.jpg"  class="img-fluid img-thumbnail set" id="output"/></div>
                                <input type="file"  name="image" accept="image/*" onchange="loadFile(event)" required>
                                <img id="output"/>
                                <!-- render image -->
                                <script>
                                    var loadFile = function(event) {
                                      var output = document.getElementById('output');
                                      output.src = URL.createObjectURL(event.target.files[0]);
                                      output.onload = function() {
                                        URL.revokeObjectURL(output.src) // free memory
                                      }
                                    };
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-4"><button type="submit" name="submit" class="btn btn-outline-info" onclick="Cold();" >Save Details</button></div>
                </div>
            </form>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>