<?php
$conn = mysqli_connect ("localhost", "root", "", "psits");
if (!$conn){
    die("Wala ka connect");
}
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "Select * from Students where email = '$email'
and password = '$password'";

$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result) >0){
    echo"SUCCESS";
    exit();
}
else{
    echo("Wala na gid")
}
mysqli_close($conn);

?>




