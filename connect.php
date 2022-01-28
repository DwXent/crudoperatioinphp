<?php

$con=new mysqli('localhost', 'root' , '', 'ramancrud');

if(!$con){
 
    die(mysqli_error($con));
}


?>