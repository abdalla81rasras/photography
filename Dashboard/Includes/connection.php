<?php
$conn=mysqli_connect("localhost","root","","Photographey");
if(!$conn){
    die("Coonection Error !!" . mysqli_connect_error($conn));
}
?>