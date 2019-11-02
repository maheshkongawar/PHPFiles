
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
</head>
<body>
<!-- for GET method or Variable
    <h1>Contact</h1>
    <form  method="GET" action="save.php">
        <label>Name:</label>
        <input type="text" name="name">
        <br><br>
        <label>Email:</label>
        <input type="text" name="email">
        <br><br>
        <label>mobile:</label>
        <input type="text" name="tel">
        <br><br>
        <label>Mesage:</label>
        <textarea name="msg"></textarea>
        <br><br>
        <input type="submit" value="send">
    </form>
    --->
    <h1>Contact</h1>
    <form  method="POST" action="save.php">
        <label>Name:</label>
        <input type="text" name="name">
        <br><br>
        <label>Email:</label>
        <input type="text" name="email">
        <br><br>
        <label>mobile:</label>
        <input type="text" name="tel">
        <br><br>
        <label>Mesage:</label>
        <textarea name="msg"></textarea>
        <br><br>
        <input type="submit" value="send">
    </form>
</body>
</html>