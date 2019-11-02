<?php
//cookie is the small amount of the data that can be stored inside the browser.
//setcookie(); is the function.
//setcookie("name","value",time()+$int); syntax of the cookie.

//echo setcookie("city","hyderbad");//creating cookie, in memory cookies.

//echo $_COOKIE("city");for getting the cookie

//echo unset($_COOKIE["city"]); unsetting the cookie: Parse error: syntax error, unexpected 'unset' (T_UNSET) in C:\xampp\htdocs\ClassEX\cookie.php on line 10

//cookie contain 8 parameters:- Name,value,Expiration of the cookie,Domaim,httponly,options.

//cookies are two types:- 
//1)In memory cookies:- The cookies which are created without expiration time they are called inmemory cookies.
//2)persistent cookies:- the cookies which are created with expiration time they are called persistent cookies.

//echo setcookie("login","true",time()-60); the time is given in seconds.:- persisent cookies
?>

