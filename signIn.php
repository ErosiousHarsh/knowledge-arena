<?
    require('connect.php');
    if(isset($_POST['Email'])){
        $sql = "SELECT * FROM Student WHERE (Email='{$_POST['Email']}' AND Password='{$_POST['Password']}')";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            echo "<script>
                location.href='index.php';
                alert('login successfull');
            </script>";
        }else{
            echo "Check your credentials";
        }
    }
?>