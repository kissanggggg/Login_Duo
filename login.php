<?php
$conn = mysqli_connect ("localhost", "root"< "", "psits");
if(!$conn){
    die("Hindi Naka Connect Dae");
}

$email = $_POST('email');
$password $_POST('password');

$sql = "Select * from Students Where email = '$email'
and password = '$password'";

$result=mysqli_query($conn, $sql);

if(mysqli-num-rows($result) >0){
    echo"SUCCESS";
    exit();
}
else {
    echo("Wala Talaga");
}

mysqli_close($conn);

?>
