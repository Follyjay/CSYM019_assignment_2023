<?php

require 'conn.php';

// Check if the connection was successful
if ($conn) {
    // Fetch data from the table
    $sql = 'SELECT title, overview, details, fees FROM courses';
    $result = mysqli_query($conn, $sql);

    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        // Create an HTML table

        // Loop through the rows and populate the table
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td id="check">'.'<input type="checkbox" id="box" name="selected[]" value="' . $row['title'] . '">'.'</td>';
            echo '<td style="width: 15%;">' . $row['title'] . '</td>';
            echo '<td style="width: 33%;">' . $row['overview'] . '</td>';
            echo '<td style="width: 33%;">' . $row['details'] . '</td>';
            echo '<td>' . $row['fees'] . '</td>';
            echo '</tr>';
        }

    } else {
        echo 'No rows found.';
    }

}

// Close the database connection
mysqli_close($conn);
?>
