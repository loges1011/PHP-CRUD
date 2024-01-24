<?php
include 'db_connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
   
    $sql = "INSERT INTO `crud`(`id`, `name`, `address`, `email`)
     VALUES  ('','$name','$address','$email')";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        header('location: index.php?msg=new record created successfull');
    } else {
        echo 'failed:' . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>PHP Crud</title>
</head>
<body>
  <nav class="text-center fs-3 mb-5" style="background-color: #00ff5573;">PHP CRUD OPERATION</nav>

  <div class="container">
    <div class="text-center mb-4">
         <h3>Add New User</h3>
         <p class= "text-muted">complete the form</p>
    </div>

     <div class="container dflex justify-content-center">
        <form action="" method="post" style="width:50vw min-width:300px";>

    <div class="row">
        <div class="col-4">
           <label class="form-lable">Name :</label>
           <input type="text" class="form-control" name="name" placeholder="enter your name">
        </div>
    </div>
        <div class="col-4">
           <label class="form-lable">Address :</label>
           <input type="text" class="form-control" name="address" placeholder="enter your Address">
        </div>

         <div class="col-4">
           <label class="form-lable">Email:</label>
           <input type="email" class="form-control" name="email" placeholder="enter your email">
        </div>

        <div>
            <button type="submit" class="btn btn-success"name= "submit">Save</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
</form>

     </div>
  </div>


<!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>