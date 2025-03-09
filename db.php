<?php 
    $db = mysqli_connect('localhost','root','','gsc');

    if($db){
        echo "Database Connect Successfully";
    }else{
        echo "Database Connect Failed";
    }


?>