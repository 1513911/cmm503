
<?php 

include("connection.php");
include("check.php");
$sql1 = "SELECT userID FROM users WHERE username = '$user_check'";
$result = mysqli_query($db,$sql1);
$row = $result->fetch_array();
$user = $row['userID'];


$title = $_POST['title'];
$description = $_POST['description'];
$postDate = $_POST['dateposted'];
$fixedDate = $_POST['datefixed'];

$sql = "INSERT INTO bugs(title, desc, postDate, fixDate, userID) VALUES('$title','$description', '$postDate', '$fixedDate', '$user')";
mysqli_query($db,$sql);
 
header("location:bugpostresponse.html");

