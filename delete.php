<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that user
$id_penjual = $_GET['id_penjual'];
 
// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM penjual WHERE id_penjual=$id_penjual");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>