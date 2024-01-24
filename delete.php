<?php
include 'db_connection.php';
$id = $_GET['id'];
$sql = "DELETE FROM `crud` WHERE  id =$id ";
$result = mysqli_query($connection, $sql);

if ($result) {
    header('location: index.php?msg=data deleted successfully');
} else {
    echo 'failed:' . mysqli_error($connection);
}

?>
