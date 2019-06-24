<?php 
 $conn =mysqli_connect('localhost','root','','ajax');

$query ="SELECT * FROM users";
// Get result
$result=mysqli_query($conn,$query);
// Fetch Data
$users=mysqli_fetch_all($result,MYSQL_ASSOC);
echo json_encode($users);
?>