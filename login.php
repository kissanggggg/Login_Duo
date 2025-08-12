<?php
$conn = mysqli_connect ("localhost", "root", "psits");
if(!$conn){
    die("");
}

$email = $_POST('');
$password $_POST('');

$sql = "Select * from Students Where email = '$email'
and password = '$password'";

$result=mysqli_query($conn, $sql);

if(mysqli-num-rows($result) >0){
    echo"";
    exit();
}
else {
    echo("");
}

mysqli_close($conn);

?>