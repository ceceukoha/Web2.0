<?php
    session_start();
    echo $_SESSION['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="day4.php" method="POST">
        <label>Name</label>
        <input type="text" name="fullName"> <br><br>

        <label>Email</label>
        <input type="email" name="email"> <br><br>

        <label>Password</label>
        <input type="password" name="pass"> <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>