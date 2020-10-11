<?php

    $server="localhost";
    $username="root";
    $password="";
    $dbname="new";
    $con = mysqli_connect($server,$username,$password,$dbname);

    mysqli_select_db($con,'new');

    /*if($con)
    {
        echo "Connected";
    }
    else
    {
        echo "Not connected";
    }*/
    
    
?>