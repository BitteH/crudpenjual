<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM penjual ORDER BY id_p DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="add.php">Tambahkan Penjual</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Id_penjual</th> <th>Nama</th> <th>Alamat</th> <th>No_Handphone</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_p']."</td>";
        echo "<td>".$user_data['nama_p']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['no_hp']."</td>";       
        echo "<td><a href='edit.php?id_p=$user_data[id_p]'>Edit</a> | <a href='delete.php?id_p=$user_data[id_p]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>