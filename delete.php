<?php
include_once "connection.php";
$id = $_GET['id'];
$query ="DELETE FROM tbl_user WHERE user_id = '$id'";
$data = mysqli_query($conn,$query);
if($data)
{
    header ("location:index.php");
}else{
    echo "Cannot Delete";
}