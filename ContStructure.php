 
<?php
/*

=> Else_if Statment:-
    $m=30;
    if($m>=80)
    {
        echo "Grade A";
    }
    else if($m>=60)
    {
        echo "Grade B";
    }
    else if($m>=40)
    {
        echo "Grade C";
    }
    else if($m>=35)
    {
        echo "Grade D";
    }
    else{
        echo "fail";
    }
    

    //printing Values 1 to 10 by using For loop:-
echo "<center>";
for($i=0;$i<=10;$i++)
{
    echo $i."<br>";
}
echo "<center>";

// printing Even Or Odd NUmbers:-
for($i=0;$i<=20;$i++)
{
    if($i%2==0)
    {
        echo $i."<br>";
    }

}
//conditionm cheaking:
$n=6;
if(13<=10){
    echo $n;
}

// printing 15 table
$table=15;
for($i=1;$i<=10;$i++)
{
echo $table."+".$i."=".$Table*$i."<br>";
}

for($j=1;$j<=10;$j++)
{
    $table=$j;
    for($i=1;$i<=10;$i++)
{
    echo $table."*".$i."=".$table*$i."<br>";
}
echo "<br>--------------------<br>";
}


// printing proime numbers in between 1 to 100;
for($i=0;$i<=100;$i++)
{
   
    for($j=2;$j<=$i;$j++)
    { 
        if($i%$j==0)
        {
            break;
        } 
    
    }
    if($j==$i)
    {
        echo $i."<br>";
    }

}


// Break Nd Continue
for($i=1;$i<=10;$i++)
{
    if($i==0)
    {
    continue;  //Break;
    }
    echo $i."<br>";
}

// While loop 1 to 10;
$i=1;
while($i<=10)
{
    echo $i."<br>";
    $i++;
    
}

$x=1;
$y=2;
$i=0;   
echo $x."-----------".$y."------------";
while($i<=10)
{
    $z=$x+$y;
    $x=$y;     /// errror:- Maximum execution time of 30 seconds exceeded in C:\xampp\htdocs\ClassEX\ContStructure.php on line 114
    $y=$z;
  
}


// Do--while loop 1 to 10;
$i=0;
do{
    echo $i."<br>";
    $i++; 
}
while($i<=10);
*/

?>






