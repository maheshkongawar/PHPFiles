<pre>
<?php
/*
///for GET method we use this
echo $name=$_GET['name']."<br>";

echo $name=$_GET['email']."<br>";

echo $name=$_GET['tel']."<br>";

print_r($_GET);

///for POST method we use this
echo $name=$_POST['name']."<br>";

echo $name=$_POST['email']."<br>";

echo $name=$_POST['tel']."<br>";

print_r($_POST);
*/
///for REQUEST method, request is comination GET & POST method 

echo $_name=$_REQUEST['name']."<br>";
echo $_email=$_REQUEST['email']."<br>";
print_r($_REQUEST);
?>