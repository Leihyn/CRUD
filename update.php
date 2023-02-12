<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `crud` where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$Pressure = $row['Pressure'];
$Weight = $row['Weight'];


if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $Pressure = $_POST['Pressure'];
  $Weight = $_POST['Weight'];

  $sql = "update `crud` set id=$id, name='$name', email='$email', mobile='$mobile', Pressure='$Pressure', Weight='$Weight' where id=$id";
  $result = mysqli_query($conn, $sql);
  if($result) {
    //echo "UPDATED successfully";
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
           <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name?>>
         </div>
         <div class="form-group">
           <label>EMAIL</label>
           <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email?>>
         </div>
         <div class="form-group">

           <label>MOBILE</label>
           <input type="number" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off" value=<?php echo $mobile?>>
         </div>
         <div class="form-group">
           <label>BLOOD PRESSURE</label>
           <input type="text" class="form-control" placeholder="Enter your Pressure" name="Pressure" value=<?php echo $Pressure?> >
         </div>
         <div class="form-group">
           <label>Weight</label>
           <input type="text" class="form-control" placeholder="Enter your Weight" name="Weight" value=<?php echo $Weight?> >
         </div>



         <button type="submit" class="btn btn-primary" name="submit">Update</button>
     </form>
    </div>
  </body>
</html>