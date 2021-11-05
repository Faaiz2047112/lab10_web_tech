<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

$sql="update `crud` set id=$id , name='$name' , email='$email' , mobile='$mobile' , password='$password'
where id=$id";
$result=mysqli_query($con,$sql);
if($result){
  echo "Updated  succefully";
  //header('location:display.php');
}else{
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>Crud Operation</title>
  </head>
  <body>
  <div class = "container">
  <form method="post">
  <div class="form-group">
    <label>Enter Name of the book </label>
    <input type="text" class="form-control"  placeholder="Enter your name of the book " name="name"
    name="name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Enter Email </label>
    <input type="email" class="form-control"  placeholder="Enter your email " name="email"
    name="email" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Enter the price of the book </label>
    <input type="text" class="form-control"  placeholder="Enter your price " name="mobile"
    name="mobile" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Enter Password </label>
    <input type="text" class="form-control"  placeholder="Enter your password " name="password"
    name="password" autocomplete="off">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

   
  </body>
</html>