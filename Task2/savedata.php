<?php

require 'conn.php';

if(!empty($_POST['ttl']) && !empty($_POST['ovv']) && !empty($_POST['hlt']) && 
!empty($_POST['dtl']) && !empty($_POST['fee']) && !empty($_POST['faq']) && 
!empty($_POST['er1']) && !empty($_POST['er2'])){

    if(!empty($_POST['mt1']) && !empty($_POST['mt2']) && !empty($_POST['mt3']) && 
    !empty($_POST['mt4']) && !empty($_POST['mt5']) && !empty($_POST['mc1']) &&
    !empty($_POST['mc2']) && !empty($_POST['mc3']) && !empty($_POST['mc4']) && 
    !empty($_POST['mc5']) && !empty($_POST['mu1']) && !empty($_POST['mu2']) &&
    !empty($_POST['mu3']) && !empty($_POST['mu4']) && !empty($_POST['mu5'])){

        $ttl = $_POST['ttl'];
        $ovv = $_POST['ovv'];
        $hlt = $_POST['hlt'];
        $dtl = $_POST['dtl'];
        $fee = $_POST['fee'];
        $er1 = $_POST['er1'];
        $er2 = $_POST['er2'];
        $faq = $_POST['faq'];

        $sql_1 = "insert into courses values('', '$ttl', '$ovv', '$hlt', '$dtl', '$fee', '$er1', '$er2', '$faq')";
        $action_1 = $conn->query($sql_1);

        if($action_1){

            for ($i = 1; $i <= 5; $i++) {
                $mt = $_POST["mt$i"];
                $mc = $_POST["mc$i"];
                $mu = $_POST["mu$i"];
    
                $sql_2 = "insert into modules values('$ttl', '$mt', '$mc', '$mu')";
                $action_2 = $conn->query($sql_2);
            }
        }

        echo 'success';
        header('location:home.php');
    }

}

$conn->close();

?>