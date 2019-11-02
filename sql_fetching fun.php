<?php
$con=mysqli_connect("localhost","root","","login page");
$data=mysqli_query($con,"select * from users");
$result=mysqli_num_rows($data);
print_r($result);
$db=mysqli_fetch_row($data);
echo "<pre>";
print_r($db);
/*
$db=mysqli_fetch_row($data);
op:
Array
(
    [0] => mahesh
    [1] => 101010
    [2] => mahesh@gmail.com
    [3] => 899917702
    [4] => male
)
$db=mysqli_fetch_assoc($data);
op:
Array
(
    [username] => mahesh
    [password] => 101010
    [email] => mahesh@gmail.com
    [mobile] => 899917702
    [gender] => male
)
$db=mysqli_fetch_array($data);
op:
Array
(
    [0] => mahesh
    [username] => mahesh
    [1] => 101010
    [password] => 101010
    [2] => mahesh@gmail.com
    [email] => mahesh@gmail.com
    [3] => 899917702
    [mobile] => 899917702
    [4] => male
    [gender] => male
)
$db=mysqli_fetch_object($data);
op:
stdClass Object
(
    [username] => mahesh
    [password] => 101010
    [email] => mahesh@gmail.com
    [mobile] => 899917702
    [gender] => male
)
*/
?>