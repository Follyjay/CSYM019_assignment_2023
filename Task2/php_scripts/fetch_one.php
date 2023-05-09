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
        echo '<table>';
        echo '<tr><th>TITLE</th><th>OVERVIEW</th><th>DETAILS</th><th>FEES</th><th>ACTION</th></tr>';

        // Loop through the rows and populate the table
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td style="width: 15%;">' . $row['title'] . '</td>';
            echo '<td style="width: 33%;">' . $row['overview'] . '</td>';
            echo '<td style="width: 33%;">' . $row['details'] . '</td>';
            echo '<td>' . $row['fees'] . '</td>';
            echo '<td style="align-content: center;">' . '<button id="btnEdit">Edit</button><button id="btnDelete">Delete</button>' . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No rows found.';
    }

}

// Close the database connection
mysqli_close($conn);
?>
