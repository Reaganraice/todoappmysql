<?php
require 'db.php';

if(isset($_POST['submit'])){
    $task=$_POST['task'];
    $duedate=$_POST['duedate'];
    $sql="INSERT INTO users(task,duedate)VALUE('$task','$duedate')";
    $res=mysqli_query($conn,$sql);
    // echo "Insert sussessfull";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>To Do</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="todoform">
            <form action="" method="POST" id="form">
                <div class="inp">
                    <h1>TO DO</h1>
                    <?php 

                        // if(isset($_POST['submit'])){
                        $sql="SELECT * FROM users";
                        $res=mysqli_query($conn,$sql);

                        if($res->num_rows > 0) {
                            while($row = $res->fetch_assoc()) {

                                $task=$row['task'];
                                $duedate=$row['duedate'];
                                $id=$row['id'];
                                
                                echo $id." " .$task." " .$duedate."   " ."<a href='delete.php?delete=1&id=$id'>Delete</a><a href='edit.php?edit=1&id=$id'>Edit</a>"."<br>";

                                
                            }
                        }
                        
                    
                    ?>
                    <div>
                    <label for="">Add Task</label><input type="text" name="task" id="" >
                    </div>
                    <div>
                    <label for="">Due Date</label><input type="date" name="duedate" id=""required>
                    </div>
                    <div>
                    <input type="submit" name="submit" value="Submit" id="submit">
                    </div>
                </div>
            </form>
        </div>
        
    </body>
</html>