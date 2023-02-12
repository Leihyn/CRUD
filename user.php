<?php
include 'connect.php';
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $pressure = $_POST['pressure'];
  $Weight = $_POST['Weight'];

  $sql = "insert into `crud` (name,email,mobile,pressure,Weight) values('$name', '$email', '$mobile', '$pressure', '$Weight')";
  $result = mysqli_query($conn, $sql);
  if($result) {
    //echo "Data inserted successfully";
    header('location:display.php');
  } else {
    die(mysqli_error($conn));
  }
}
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
      <form method="post">
         <div class="form-group">
           <label>NAME</label>
           <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
         </div>
         <div class="form-group">
           <label>EMAIL</label>
           <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
         </div>
         <div class="form-group">

           <label>MOBILE</label>
           <input type="number" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off">
         </div>
         <div class="form-group">
           <label>pressure</label>
           <input type="text" class="form-control" placeholder="Enter your pressure" name="pressure" >
         </div>
         <div class="form-group">
           <label>Weight</label>
           <input type="text" class="form-control" placeholder="Enter your Weight" name="Weight" >
         </div>



         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
     </form>
    </div>
  </body>
</html>