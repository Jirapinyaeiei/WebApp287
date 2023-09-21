<?php
require 'conn.php';
$sql_update="UPDATE user SET firstname='$_POST[firstname]',lastname='$_POST[lastname]' ,address='$_POST[address]' ,phone='$_POST[phone]' WHERE sid='$_POST[id]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/user/mainmenu.php");
}

?>