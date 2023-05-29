<?php

session_start();
require 'conn.php';

if(isset($_POST['getselected'])){
    $allTitle = $_POST['selected']; //save all the selected rows into "$allTtitle"

    $titleLength = count($allTitle); // get the lenght i.e the number of rows

    for ($i = 0; $i < $titleLength; $i++){ // loop through each rows using the course title of each row

        $value = "$allTitle[$i]";// assigning the value of the current loop into variable name "value"

        $sql2 = "select * from modules where course_title='$value'"; // getting the row from msql table where the course title = "value" 
        $result2 = $conn->query($sql2); // executing the query
                
        if ($result2->num_rows > 0){

            $outcome = array();
            $label = array();

            while ($row2 = $result2->fetch_assoc()) {
                $outcome[] = $row2['units'];
                $label[] = $row2['module_code'];
            }

            $units = json_encode($outcome);
            $codes = json_encode($label);
        }else {
            echo "Error !!!";
        }
    
    }

$conn->close();   
}

?>