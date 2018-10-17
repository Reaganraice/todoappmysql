<?php 
require 'db.php';

if(isset($_GET['edit'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM users  WHERE id='$id'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
  
}
if(isset($_POST['newtask'])){
    $newtask=$_POST['newtask'];
    $id=$_POST['id'];
    $newduedate=$_POST['newduedate'];
    $sql="UPDATE users SET task='$newtask', duedate='$newduedate' WHERE id='$id'";
    $res=mysqli_query($conn,$sql) or die("could not update".mysqli_error());
    echo '<meta http-equiv="refresh" content="0;url=index.php">';

}
?>
<head>
     <title>Edit</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="todoform">
        <form action="edit.php" method="POST" id="form">
            <div class="inp">
                <h1>EDIT</h1>
                <div>
                <input type="text" name="newtask"  id="" value=<?php echo $row['newtak'] ; ?>>
                </div>
                <div>
                <input type="date" name="newduedate"  id="" value=<?php echo $row['newduedate'] ; ?>>
                </div>
                <div>
                <input type="hidden" name="id"  id="" value=<?php echo $row['id'] ; ?>>
                </div>
                <div>
                <input type="submit" name="submit" value="Update" id="submit">
                </div>
            </div>
        </form>
    </div>
</body>