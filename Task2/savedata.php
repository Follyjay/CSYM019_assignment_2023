<?php

require 'conn.php';

// checks if all fields are field and non is empty
if(!empty($_POST['ttl']) && !empty($_POST['ovv']) && !empty($_POST['hlt']) && 
!empty($_POST['dtl']) && !empty($_POST['fee']) && !empty($_POST['faq']) && 
!empty($_POST['er1']) && !empty($_POST['er2'])){

    if(!empty($_POST['mt1']) && !empty($_POST['mt2']) && !empty($_POST['mt3']) && 
    !empty($_POST['mt4']) && !empty($_POST['mt5']) && !empty($_POST['mc1']) &&
    !empty($_POST['mc2']) && !empty($_POST['mc3']) && !empty($_POST['mc4']) && 
    !empty($_POST['mc5']) && !empty($_POST['mu1']) && !empty($_POST['mu2']) &&
    !empty($_POST['mu3']) && !empty($_POST['mu4']) && !empty($_POST['mu5'])){

        // assigns the information in each field to a variable name
        $ttl = $_POST['ttl'];
        $ovv = $_POST['ovv'];
        $hlt = $_POST['hlt'];
        $dtl = $_POST['dtl'];
        $fee = $_POST['fee'];
        $er1 = $_POST['er1'];
        $er2 = $_POST['er2'];
        $faq = $_POST['faq'];

        //query to save the information in each variable into the database
        $sql_1 = "insert into courses values('', '$ttl', '$ovv', '$hlt', '$dtl', '$fee', '$faq', '$er1', '$er2')";
        $action_1 = $conn->query($sql_1);//query execution

        if($action_1){// checks if the above query is successful

            //assigns the information of each module registered with each registered course to a vaariable by looping through each item
            for ($i = 1; $i <= 5; $i++) {
                $mt = $_POST["mt$i"];
                $mc = $_POST["mc$i"];
                $mu = $_POST["mu$i"];
    
                $sql_2 = "insert into modules values('$ttl', '$mt', '$mc', '$mu')";// saving the information into the database
                $action_2 = $conn->query($sql_2);// query execution
            }
        }

        echo 'success';
        header('location:home.php');
    }

}

$conn->close();

?>