<?php

require 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

    // check if any course is selected to be deleted and returns back to homepage if no course is selected
    if (!isset($_GET['ttl'])){
        header("location:home.php");
        exit;
    }

    $ttl = $_GET['ttl'];// gets the selected course to be deleted and saves it in variable name "ttl"

    $sql = "delete from courses where title = '$ttl'";// query to delete all information from table where the course_title is equal to the l,course selected
    $result = $conn->query($sql);// executing the query

    // checks if the query above as been executed and then executes the query below
    if($result){

        $sql2 = "delete from modules where course_title = '$ttl'";// query to delete all registered module that is associated to the course selected for deletion
        $result2 = $conn->query($sql2);// executes query
        if($result2){
            header('location:home.php');// redirects back to homepage upon successful execution
            exit;
        }
    }

} 

$conn->close();

?>