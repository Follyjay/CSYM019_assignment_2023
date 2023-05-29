<?php

require 'conn.php';

if(isset($_POST['uname']) && isset($_POST['psw'])){
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];

    if(!empty($uname) && !empty($psw)){

        $sql = "select * from users where username = '$uname' and password = '$psw'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            header('location:home.php');
            exit;
        }
        else{
            echo 'Error';
        }
    }
}

$conn->close();

?>