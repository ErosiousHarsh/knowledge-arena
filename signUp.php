<?php
    require('connect.php');
    $sql = "INSERT INTO Student (`id`, `firstName`, `lastName`, `Username`, `Email`, `Password`) VALUES ('{$_POST['firstName']}', '{$_POST['lastName']}', '{$_POST['Username']}', '{$_POST['Email']}', '{$_POST['Password']})'";
    $result = $conn->query($sql);
    if($result){
        echo "you are registered successfully";
    }else{
        echo "some error occourred ";
    }
?>