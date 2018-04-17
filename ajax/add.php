
<?php
include("connection.php");
mysqli_select_db($con,"samples");

$name=$_POST['name'];
$addr=$_POST['addr'];
$str=$_POST['str'];

// $name='jdfdl';
// $addr='paka';
// $stream='lol';

$add=mysqli_query($con,"INSERT INTO student(  Name, Address, Stream) VALUES ('$name','$addr','$str')");
// $add=mysqli_query($con,"INSERT INTO student (RollNo, Name, Address, Stream) VALUES ('','ljondd','dllldd','dcpmdd')");
if($add)
    echo "added";
else {
    echo "error";
}

if(mysqli_error($con))
{
    echo "Error description: " . mysqli_error($con);
}
mysqli_close($con);
?>