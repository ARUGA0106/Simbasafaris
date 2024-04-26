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
        // Display a thank you message and payment details
       
echo "<div style='text-align: center; margin-top: 100px; font-style: italic; color: blue;'>
        <p>Thank you for choosing Simba Safaris Transport! Your booking has been successfully processed.</p>";
echo "<p>An email with further details on how to make payment and receive ticket has been sent to you. If you haven't received the email, you can make your payment using the following details to secure your spot:</p>";
echo "<p>Payment Method: M-pesa: 1276546 (Simba Safaris), Simbanking: 015754754756 (CRDB Simba Safaris).</p>";
echo "<p>Contact our agents at +255 765 000 000 / +255 665 000 000 for further inquiries.</p>";
echo "<p>Yours GODWIN ARUGA, Online customer support;</p>";
echo "<p>Simba Safari's.</p>";
echo "<p>Wishing you happy travels.</p>
     </div>";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
