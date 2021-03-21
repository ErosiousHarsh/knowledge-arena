<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'KnowledgeArena';

    $conn = mysqli_connect($server, $user, $password, $db);

    if($conn->connect_error){
        echo "Failed to connect ".$conn->connect_error;
    }
    // else{
    //     echo "Database connected successfully";
    // }
?>