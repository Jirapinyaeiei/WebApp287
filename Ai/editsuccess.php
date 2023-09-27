<?php
require 'conn.php';
$sql_update="UPDATE user SET username='$_POST[username]',lastname='$_POST[lastname]' ,address='$_POST[address]' ,phone='$_POST[phone]' WHERE userid='$_POST[userid]' ";
$result= $conn->query($sql_update);
if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {
echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/Ai/mainmenu.php");
}
?>