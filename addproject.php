<html>
<body>
<html>
<body>
                   <form action="upload-manager.php" method="post" enctype="multipart/form-data">
       
        <label for="fileSelect">Filename:</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" name="submit" value="Upload">
        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form>

<form action="" method="post">
                                        <input type="text"  name="name" placeholder="Name">
                                        <input type="text" name="dept" placeholder="Dept">
                                        <textarea   name="det" cols="30" rows="10" placeholder="Details"></textarea>
                                        <input type="text" name="img" placeholder="Dept">
                     

                                        <input  type="submit">
                                    </form>



</body>
</html>



<?php
include("connection.php");


if(isset($_POST['name']))
{
        $name=$_POST['name'];
        $dept=$_POST['dept'];
        $det=$_POST['det'];
        $img_nm=$_POST['img'];
        $sql = "INSERT INTO `project`(`name`, `department`, `details`, `img_name`) VALUES ('".$name."','".$dept."','".$det."','".$img_nm."')";
        echo "query=".$sql." ";
        if(mysqli_query($conn, $sql))
        {
            echo "Records inserted successfully.";
        } 
        else{
	
             echo "ERROR: Could not able to execute".$sql. " " . mysqli_error($conn);
            }
}
else
{
  
}

$conn->close();
?>