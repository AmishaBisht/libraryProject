 <?php
          $con=mysqli_connect('localhost', 'root','','db_connect');
              $id=$_GET['delete'];
              $quwey="DELETE FROM tbl_contact where Book_id=$id";
              $result=mysqli_query($con,$quwey);
              header("location:list.php");
                
?>         