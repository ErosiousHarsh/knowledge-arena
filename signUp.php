<?php
    require('connect.php');
    if(strcmp($_POST['Email'], $_POST['confirmEmail']) === 0 && strcmp($_POST['Password'], $_POST['confirmPassword']) === 0){
        $sql = "INSERT INTO Student (firstName, lastName, Username, Email, Password) VALUES ('{$_POST['firstName']}', '{$_POST['lastName']}', '{$_POST['Username']}', '{$_POST['Email']}', '{$_POST['Password']}')";
        if($conn->query($sql)){
            echo "<script>alert('Registered Successfully');</script>";
            echo "<script>location.href='index.php'</script>";
        }else{
            echo "Error: ".$sql."<br>".$conn->error;
        }
    }else{
        echo "<script>alert('Please enter Email and Password fields correctly');</script>";
        echo "<script>location.href='index.php'</script>";
    }
?>