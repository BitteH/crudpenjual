<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id_p = $_GET['id_p'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM penjual WHERE id_p=$id_p");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>