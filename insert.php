<?php
include("connection.php");


$sql = "insert into student values(4,\'Mahi\',\'MCA\')";


if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
	echo "nya wala";
    echo "ERROR: Could not able to execute".$sql. " " . mysqli_error($conn);
}


$conn->close();
?>