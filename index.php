<?php
include 'db_connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>PHP Crud</title>
</head>
<body>
  <nav class="text-center fs-3 mb-5" style="background-color: #00ff5573;">PHP CRUD OPERATION</nav>

    <div class="container">
       <?php if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              ' .
                $msg .
                '
            
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-lable="close"></button>
     </div>';
        } ?>
        <a href="add_new.php" class="btn btn-dark">Add New</a>
          <table class="table table-hover text-center ">
           <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
           </thead>  
           <tbody>
            <?php
            $sql = "SELECT * FROM `crud`";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_assoc($result)) { ?>
             <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="link-dark"> <i class="fa fa-edit"> </i></a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="link-dark"> <i class="fa fa-trash"></i></a>
                </td>
             </tr>

             <?php }
            ?>
           </tbody>              
          </table>


    </div>

     </div>
  </div>


<!--bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>