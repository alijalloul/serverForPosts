<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword =  "";
    $dbName = "test";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if (mysqli_connect_errno()){
        printf("Connect failed: %s\n", mysqli_connect_error());
        
        exit();
    }else{
        printf("ksdfknkjkjnsdf");
    }