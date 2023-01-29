<?php
include 'connect.php';
$id = 7;
$sql="select * from seriescrud where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
// echo $row['fname'];



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>update data!</title>
  </head>
  <body>
    <div class="container my-5">
        <form action=""><form>
  <!-- <div class="form-group">
    <label for="exampleInputEmail1">Update</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div> -->
  <div class=" mb-3">
      
      <label for="exampleInputEmail1">First Name</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter your Last name" name="fname" value="<?= $row['fname'] ?>">
      
    </div>
  <div class=" mb-3">
      
      <label for="exampleInputEmail1">Last Name</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter your Last name" name="lname" value="<?= $row['lname'] ?>">
      
    </div>
       <div class=" mb-3">
        
      <label for="exampleInputEmail1">email</label>
      <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter your email" name="email"value="<?= $row['email'] ?>">
      
    </div>
      <div class=" mb-3">
        
      <label for="exampleInputEmail1">phone</label>
      <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter your phone no" name  ="phone" value="<?= $row['phone'] ?>">
      
    </div>

  <button type="submit" class="btn btn-dark btn-lg" name="updateid" >Update</button>
</form></form>

    
  </body>
</html>