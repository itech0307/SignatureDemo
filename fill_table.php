<?php
// Include the database connection file
include 'Connect.php';

// Query to retrieve data from the database
$sql = "SELECT ID, Fullname, Department, Signature FROM staff_infor_tbl";
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row and display data in table rows
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Fullname'] . "</td>";
        echo "<td>" . $row['Department'] . "</td>";
        // If the signature is stored as a file path in the database
        // echo "<td><img src='" . $row['Signature'] . "' alt='Signature' width='100'></td>";
        // If the signature is stored as a data URL in the database
        echo "<td><img src='" . $row['Signature'] . "' alt='Signature' width='100'></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No data available</td></tr>";
}

// Close the database connection
mysqli_close($conn);
?>
