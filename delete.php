<?php

include 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM names WHERE id =$id";
$result = mysqli_query($conn, $sql);

if($result)
{
    header("Location:index.php");
}

?>
