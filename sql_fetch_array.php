<?php
/*
///php mysql libraries are as follws
1.mysqli_Connect();
2.mysqli_query();
3.mysqli_num_rows();

///By using below four ways we can fetch the da from the database
1.mysqli_fetch_row();
2.mysqli_fetch_assoc();
3.mysql_fetch_array();
4.mysqli_fetch_object();
*/
$con=mysqli_Connect("localhost","root","","login page");
$db=mysqli_query($con,"select * from users");
//echo "<pre>";
//print_r($db);
if(mysqli_num_rows($db)>0)
    {
        ?>
        <table>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Gender</th>
        </tr>
        <?php
        for(;$row=mysqli_fetch_array($db);)
        {
            ?>
            <tr>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['password'];?></td>            
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['gender'];?></td>
                
            </tr>
            <?php
        }
        ?>
    </table>
        <?php
    }
else
    {
        echo "sorry no records found";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fetching data</title>
    <style>
    table,th,td
    {
        padding:20px;
        border:3px solid black; 
        border-collapse: collapse;
       
    }
    
    </style>
</head>
<body>
  
</body>
</html>
