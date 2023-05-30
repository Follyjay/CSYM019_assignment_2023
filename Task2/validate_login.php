<?php

require 'conn.php';

if(isset($_POST['uname']) && isset($_POST['psw'])){// condition that checks the type of method been performed on the form
    $uname = $_POST['uname'];// sets the username to variable name "uname"
    $psw = $_POST['psw'];// sets password to variable name "psw"

    if(!empty($uname) && !empty($psw)){// checks if user entered username and password

        $sql = "select * from users where username = '$uname' and password = '$psw'";// query to check if a user with the username and password exist
        $result = $conn->query($sql);// query execution

        if($result->num_rows > 0){//checking if it returns any row that matches the username and password of the user
            header('location:home.php');// if it matches any row then   access will be granted to the user
            exit;
        }
        else{
            echo 'Error';
        }
    }
}

$conn->close();

?>