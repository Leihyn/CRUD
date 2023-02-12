<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3>LAST SEEN MEDICAL RECORD</h3>
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">ADD user</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">SI No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">bloodPressure</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   
                   $sql = "Select * from `crud`";
                   $result = mysqli_query($conn, $sql);
                   if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $Pressure = $row['Pressure'];
                        $Weight = $row['Weight'];
                        echo ' <tr>
                        <th scope="row"> '.$id.' </th>
                        <td> '.$name.' </td>
                        <td> '.$email.' </td>
                        <td> '.$mobile.' </td>
                        <td> '.$Pressure.' </td>
                        <td> '.$Weight.' </td>
                        <td>
                        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
                        <button class="btn btn-danger"><a href="delete.php? deleteid= '.$id.'" class="text-light">Delete</a></button>
                        </td>
                        </tr>';
                    }
                   }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>