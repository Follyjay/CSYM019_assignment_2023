<?php

// declaration of empty variable names
$ttl = '';
$ovv = '';
$hlt = '';
$dtl = '';
$fee = '';
$er1 = '';
$er2 = '';
$faq = '';

$mt1 = ''; $mc1 = ''; $mu1 = '';
$mt2 = ''; $mc2 = ''; $mu2 = '';
$mt3 = ''; $mc3 = ''; $mu3 = '';
$mt4 = ''; $mc4 = ''; $mu4 = '';
$mt5 = ''; $mc5 = ''; $mu5 = '';

require 'conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET'){

    // checks if a course is selected and redirects to homepage if its not
    if (!isset($_GET['ttl'])){
        header("location:home.php");
        exit;
    }

    $ttl = $_GET['ttl'];// assigns the selected course to a variable name

    $sql = "select * from courses where title='$ttl'";// selects all information from the table where the course matches the one selected

    $result = $conn->query($sql);// query execution
    $row = $result->fetch_assoc();

    // a conditional statement to check if the query above is executed successfuly
    if (!$row){
        header("location:home.php");
        exit;
    }

    //assigns all the information from the table to each of the variable names
    $ttl = $row['title'];
    $ovv = $row['overview'];
    $hlt = $row['highlights'];
    $dtl = $row['details'];
    $fee = $row['fees'];
    $er1 = $row['faq'];
    $er2 = $row['requirement1'];
    $faq = $row['requirement2'];

    $sql = "select * from modules where course_title='$ttl'";// selects all the information from table module where the course title matches the course selected
    $result = $conn->query($sql);// query execution

    if ($result->num_rows > 0) {
        $rowCount = $result->num_rows;
        
        for ($i = 1; $i <= $rowCount; $i++) {
            $moduleTitle = 'mt' . $i;
            $moduleCode = 'mc' . $i;
            $units = 'mu' . $i;
            
            $row = $result->fetch_assoc();
            
            ${$moduleTitle} = $row['module_title'];
            ${$moduleCode} = $row['module_code'];
            ${$units} = $row['units'];
        }
    }
    
} else{
    $ttl = $_POST['ttl'];
    $ovv = $_POST['ovv'];
    $hlt = $_POST['hlt'];
    $dtl = $_POST['dtl'];
    $fee = $_POST['fee'];
    $er1 = $_POST['er1'];
    $er2 = $_POST['er2'];
    $faq = $_POST['faq'];

    $sql = "update courses set overview = '$ovv',highlights = '$hlt',
        details = '$dtl', fees = '$fee', faq = '$er1', requirement1 = '$er2',
        requirement2 = '$faq' where title = '$title'";

    $action = $conn->query($sql);

    if($action_1){

        for ($i = 1; $i <= 5; $i++) {
            $mt = $_POST["mt$i"];
            $mc = $_POST["mc$i"];
            $mu = $_POST["mu$i"];
    
            $sql_2 = "update modules set module_title = '$mt',
                module_code = '$mc', units = '$mu' where course_title = $title ";
                
            $action_2 = $conn->query($sql_2);
        }
    }

    echo 'success';
    header('location:home.php');
}

$conn->close();

?>