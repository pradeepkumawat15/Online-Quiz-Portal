

<?php
$servername = "localhost";
$username = "pradeep";
$password = "pradeep";
$dbname = "user";
$first=$_POST['username'];
$pass=$_POST['email'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO Ca2 (user,email) VALUES ('$first','$pass')";

if (mysqli_query($conn, $sql)) 
{
    echo "New record created successfully";
}
else
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("refresh:2;url=q1.php");
?> 














