<?php
$connect = mysqli_connect("localhost", "root", "", "mothers_dish") or die(mysqli_error($connect));

if($connect)
{
    //echo "Database connected successfuly...!";
}

else
{
    echo "Error while connecting...!";
}
?>