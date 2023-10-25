
<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id_penjual = $_POST['id_penjual'];   
    $nama=$_POST['nama'];
    $Alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE penjual SET id_penjual='$id_penjual' nama='$nama',alamat='$alamat',no_hp='$no_hp' WHERE id_penjual=$id_penjual");
    
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_penjual = $_GET['id_penjual'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM penjual WHERE id_penjual=$id_penjual");
 
while($user_data = mysqli_fetch_array($result))
{   
    $id_penjual = $user_data['id_penjual'];
    $nama = $user_data['nama'];
    $Alamat = $user_data['alamat'];
    $no_hp = $user_data['no_hp'];
}
?>
<html>
<head>	
    <title>Edit Data Penjual</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Id_penjual</td>
                <td><input type="text" name="id_penjual" value=<?php echo $id_penjual;?>></td>
            </tr>
            <tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $Alamat;?>></td>
            </tr>
            <tr> 
                <td>No_hp</td>
                <td><input type="text" name="no_hp" value=<?php echo $no_hp;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_penjual" value=<?php echo $_GET['id_penjual'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>    
            </tr>
        </table>
    </form>
</body>
</html>