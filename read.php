<?php
include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DISPALY DATA!</title>
  </head>
  <body>
    <div class="container my-5"><table class="table">
  <thead>
    <tr>
      <th scope="col">Serial no</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Operation</th>

    </tr>
  </thead>
  <tbody>

  <?php 
  ////SELECT QUERY
  $sql = "select * from seriescrud";
  $result = mysqli_query($con, $sql);
  ////to print entire data use while loop
  while( $row = mysqli_fetch_assoc($result)){
    ///for to check database row ka fetech karega and then echo
    $id = $row['id'];
    $fname= $row['fname'];
    $lname= $row['lname'];
    $email= $row['email'];
    $phone= $row['phone'];
      echo '  <tr>
      <th scope="row">'.$row['id'].'</th>
      <td>'.$fname.'</td>
      <td>'.$lname.'</td>
      <td>'.$email.'</td>
      <td>'.$phone.'</td>
    
    <td>
    <a href="update.php?updateid='.$id.'" class="btn btn-dark">Update</a>
    <a href="#" class="btn btn-danger">Delete</a>
</td>
</tr>';

  }


  
  
  ?>
 
  
    
  </tbody>
</table></div>

  </body>
</html>