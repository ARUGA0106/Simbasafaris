<?php
// Include the database connection code
include ('includes/connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $driving_license = mysqli_real_escape_string($conn, $_POST['driving_license']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $car_type = mysqli_real_escape_string($conn, $_POST['car_type']);
    $payment_method = mysqli_real_escape_string($conn, $_POST['payment_method']);
    $model = mysqli_real_escape_string($conn, $_POST['model']);
    $id_type = mysqli_real_escape_string($conn, $_POST['id_type']);
    $id_details = mysqli_real_escape_string($conn, $_POST['id_details']);
    $date_request = mysqli_real_escape_string($conn, $_POST['date_request']);
    $date_return = mysqli_real_escape_string($conn, $_POST['date_return']);
    $request_return_time = mysqli_real_escape_string($conn, $_POST['request_return_time']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    // Insert data into the database
    $sql = "INSERT INTO ticket_hire (fullname, driving_license_number, phone, email, type_of_car, payment_method, choose_model, personal_details_id_type, id_details, date_of_request, date_of_return, request_return_time, residential_address) 
            VALUES ('$fullname', '$driving_license', '$phone', '$email', '$car_type', '$payment_method', '$model', '$id_type', '$id_details', '$date_request', '$date_return', '$request_return_time', '$address')";
    if (mysqli_query($conn, $sql)) {
        // Display a confirmation message
        echo "<div style='text-align: center; Margin-top: 100 px'><p>Thank you for choosing Simba Safaris Transport! Your booking has been successfully processed.</p>";
        echo "<p>Please make your payment using the following details to secure your spot:</p>";
        echo "<p>Payment Method: mpesa: 1276546 Simba safaris, simbanking: 015754754756 CRDB simba safaris.</p>";
		echo "<p> Futher email with full details Including our terms of aggrement and ticket will be sent to your email.</p>
        echo "<p>Contact our agents at +255 765 000 000/+255 665 000 000 regard to  further inquiries, wish you happy travel.</p></div>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
