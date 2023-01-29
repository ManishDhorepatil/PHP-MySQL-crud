<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  ///insert query 
  $sql="INSERT INTO seriescrud(fname,lname,email,phone) VALUES('$fname','$lname','$email','$phone')";
  $result=mysqli_query($con,$sql);
  if($result){
    echo "data inserted sucessfully";
  }else
  {
    die(mysqli_error($con));
  }
  }

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Php crud operations!</title>
  </head>
  <body>
    <form method="post">
 
    <div class="container my-5">
        <div class=" mb-3">
      
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter your first name" name="fname">
    
  </div>
     <div class=" mb-3">
      
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter your Last name" name="lname">
    
  </div>
     <div class=" mb-3">
      
    <label for="exampleInputEmail1">email</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter your email" name="email">
    
  </div>
    <div class=" mb-3">
      
    <label for="exampleInputEmail1">phone</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter your phone no" name  ="phone">
    
  </div>
  <button class="btn btn-dark btn-lg my-3   " name="submit">Submit</button>
</form>
  
    </div>

   
  </body>
</html>