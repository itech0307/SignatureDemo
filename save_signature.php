<?php
// Connect to your MySQL database
include 'Connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
	$id         = mysqli_real_escape_string($conn, $_POST['id']);
    $fullname   = mysqli_real_escape_string($conn, $_POST['fullname']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $signature  = mysqli_real_escape_string($conn, $_POST['output']); // Assuming you're using a hidden input for the signature data
    
    // Insert data into MySQL database
    $sql = "INSERT INTO staff_infor_tbl (ID, Fullname, Department, Signature) VALUES ('$id', '$fullname', '$department', '$signature')";

    if (mysqli_query($conn, $sql)) {
        echo "Saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Decode signature data if needed
    $signatureData = base64_decode(str_replace('data:image/png;base64,', '', $signature));
}
// Close database connection
$conn->close();
?>
