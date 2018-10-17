<?php 
require 'db.php';

if(isset($_GET['delete'])){
    $id=$_GET['id'];
    $sql="DELETE FROM users WHERE id='$id'";
    $res=mysqli_query($conn,$sql)or die("Failed".mysqli_error());
   echo '<meta http-equiv="refresh" content="0;url=index.php">';
}
?>