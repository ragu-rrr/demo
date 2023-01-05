<?php
$conn=new mysqli('localhost','root','','students');
if(!$conn)
{
    die(mysqli_error($conn));
}
?>