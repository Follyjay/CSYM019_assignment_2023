<?php

session_start();
require 'conn.php';

if(isset($_POST['getselected'])){
    $allTitle = $_POST['selected']; //save all the selected rows into "$allTtitle"

    $titleLength = count($allTitle); // get the lenght i.e the number of rows

    // a conditional statement to choose the type of chart to be rendered depending on the number of courses selected
    if ($titleLength <= 1){
        $type = 'pie';// reders a pie chart if not more than one
    } else if ($titleLength > 1){
        $type = 'bar';// reders a bar chart if course is more than one
    }

    // Initialize arrays to store data
    $datasets = [];
    $labels = [];
    $outcome = []; 
    $label = [];

    for ($i = 0; $i < $titleLength; $i++){ // loop through each rows using the course title of each row

        $value = "$allTitle[$i]";// assigning the value of the current loop into variable name "value"
        $sql = "SELECT title, overview, details, fees FROM courses WHERE title='$value'"; // getting the row from msql table where the course title = "value" 
        $result = $conn->query($sql); // executing the query
        $row = $result->fetch_assoc();

        if ($row) { // echoing out the result if execution of the query is successfull
            echo '<tr>';
            echo '<td>' . $row['title'] . '</td>';
            echo '<td>' . $row['overview'] . '</td>';
            echo '<td>' . $row['details'] . '</td>';
            echo '<td>' . $row['fees'] . '</td>';
            echo '</tr>';
        }

        $sql2 = "SELECT * FROM modules WHERE course_title='$value'"; // getting the module for each of the courses lfrom table "modules"
        $result2 = $conn->query($sql2);// executing the query

        if ($result2->num_rows > 0) {// checks if the number of rows returned is greater than zero
            while ($row2 = $result2->fetch_assoc()) {// fetches all the data of each rows returned
                $outcome[] = $row2['units'];// saving the data from column "unit" into an array name "outcome"
                $label[] = $row2['module_code'];// saving the data from column "module_code" into an array name "label"
            }
        }

        // Add dataset for each row
        $datasets[] = [
            'label' => $value,
            'data' => $outcome,
            //'backgroundColor' => 'rgba(54, 162, 235, 0.5)' // Set a common color for all bars
        ];

        // Use the first row's labels as the chart's labels
        if (empty($labels)) {
            $labels = ['module-1','module-2','module-3','module-4','module-5'];
        }
    }

    // Encode the datasets and labels arrays as JSON
    $datasets = json_encode($datasets);
    $labels = json_encode($labels);

$conn->close();   
}

?>