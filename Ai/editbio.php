<?php
if(!isset($_GET['userid'])){
    header("refresh: 0; url=http://localhost/Ai/mainmenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM user WHERE userid='$_GET[userid]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editsuccess.php">
    <p>

    <label for="userid">ID</label>
    <input type="number" name="userid" id="userid" value="<?=$row['userid'];?>"/>

</p>
        <p>
            <label for="username">ชื่อ</label>
            <input type="text" name="username" id="username" value="<?=$row['username'];?>"/>
        </p>
        <p>
            <label for="lastname">นามสกุล</label>
            <input type="text" name="lastname" id="lastname" value="<?=$row['lastname'];?>" />
        </p>
        <p>
            <label for="address">ที่อยู่</label>
            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />
        </p>
        <p>
            <label for="phone">เบอร์โทร</label>
            <input type="text" name="phone" id="phone" value="<?=$row['phone'];?>" />
        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>