<?php

require 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

    if (!isset($_GET['ttl'])){
        header("location:home.php");
        exit;
    }

    $ttl = $_GET['ttl'];

    $sql = "delete from courses where title = '$ttl'";
    $result = $conn->query($sql);

    if($result){

        $sql2 = "delete from modules where course_title = '$ttl'";
        $result2 = $conn->query($sql2);
        if($result2){

            header('location:home.php');
            exit;
        }
    }

} 

$conn->close();

?>