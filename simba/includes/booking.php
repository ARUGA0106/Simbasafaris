<?php
// Include the database connection code
include ('includes/connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pickup = mysqli_real_escape_string($conn, $_POST['pickup']);
    $payment_method = mysqli_real_escape_string($conn, $_POST['payment_method']);
    $seat_class = mysqli_real_escape_string($conn, $_POST['seat_class']);
    $parcel_registry = mysqli_real_escape_string($conn, $_POST['parcel_registry']);
    $preferred_time = mysqli_real_escape_string($conn, $_POST['preferred_time']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // Insert data into the database
    $sql = "INSERT INTO ticket (fullname, email, pickup, payment_method, seat_class, parcel_registry, preferred_time, phone, address) 
            VALUES ('$fullname', '$email', '$pickup', '$payment_method', '$seat_class', '$parcel_registry', '$preferred_time', '$phone', '$address')";
    if (mysqli_query($conn, $sql)) {
        // Redirect user to the confirmation page
        header("Location: confirmation.php");
        exit; // Terminate script execution
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
