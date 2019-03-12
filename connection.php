<?php
$servername = "sql105.epizy.com";
$username = "epiz_23253623";
$password = "7RCyXXbcpmfM";
$dbname = "epiz_23253623_stic";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
	echo "Established";
   
} 
else
{
	 die("Connection failed: " . mysqli_connect_error());
}
?>  