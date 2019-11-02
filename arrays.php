<pre>
<?php 
/*
for Counting any Arrray
$arr=array(10,30,40,50,60,30);
$c = count($arr);
echo $c;
print $c;
print_r($c);
----------------------------------------
$user =array(
    "age" =>"24",
    "city" =>"Gadchirolli",
    "state" =>"Maharashatra",
    "pincode" =>"442703"
); 
print_r($user); // array() is a predefined function for creating any array;
-----------------------------------------------------
$user = array(
    "name"=>"mahesh",
    "age"=> "24" ,
    "city" => "Gadchirolli",
    "state" => "MH"
);
print_r($user);
--------------------------------------
$user = array(
    "name"=>"mahesh",
    "age"=> "24" ,
    "city" => "Gadchirolli",
    "state" => "MH"
);
print_r($user['state']);
// for printing single value;

----------------------------------------
// array with for loop;
$user = array(10,20,30,40,50);
$c=count($user);
for($i=0;$i<$c;$i++)
{
    echo $user[$i]."<br>";
}
------------------------------------
$arr = array(
    "name"=>"mahesh",
    "age"=> "24" ,
    "city" => "Gadchirolli",
    "state" => "MH"
);
print ('name'."<br>");
print ('name'."<br>");
print_r('city'."<br>");
echo ('state'."<br>");
echo('name'.'age'.'city');
-----------------------------------------

$user= array("ram","sham","raj","tom");
$n="ram";
if($n=='ram'){
    echo $n.'user';
}
else{
    echo "user not mentioned";
}
---------------------------------------
// we can print associated array or mixed array by using print_r();
$user=array(10,"ram",'sham',true,10.5);
$fa=array($user);
print_r($fa);
-----------------------------------------
/types of Arrays;

$arr=array(105,"mahesh",true,456);
print_r($arr);

$arr=array(10,20,30,40,50);
echo $arr[0];

$arr=array(10,20,30,40,50);
print_r($arr);

$arr=array(1=>100,2=>200,3=>300);
print_r($arr);
 
 $arr=array(5=>10,20,30,40);
 print_r($arr);
 
$arr=array(5=>10,20,30,7=>40,80,90);
 print_r($arr);

$arr=array(10,20,1=>30,7=>40,80,90);
 print_r($arr);

$arr=array(10,20,30,40,80,1=>90);
 print_r($arr);

  $user=array(
      "'name'"=>"'mahesh'",
      "'age'"=>"'24'",
      "'city'"=>"'Hyderbad'",
      "'state'"=>"'Telangana'"
  );
  foreach($user as $x=>$y)
  {
      echo $x."=".$y."<br>";
  }
 
  $user=array(
    "'name'"=>"'mahesh'",
    "'age'"=>"'24'",
    "'city'"=>"'Hyderbad'",
    "'state'"=>"'Telangana'"
);
foreach($user as $x=>$y)
{
    if($x==="'state'")     
    {
        print $x."<br>";
    }
}
 
$user=array(
    "'name'"=>"'mahesh'",
    "'age'"=>"'24'",
    "'city'"=>"'Hyderbad'",     ///name=>mahesh(initializtion)
    "'state'"=>"'Telangana'"
);
foreach($user as $y=>$x)
{
    echo $y."<br>";
}


$user=array(
    "'name'"=>"'mahesh'",
    "'age'"=>"'24'",
    "'city'"=>"'Hyderbad'",
    "'state'"=>"'Telangana'"
);
foreach($user as $x=>$y)
{
    echo $x."=".$y."<br>";
}
*/


?>
