<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace these variables with your MySQL database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "my_database";


    // Create a connection to the MySQL database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $from = $_POST['from'];
    $to = $_POST['to'];
    $airline = $_POST['airline'];
    $seating = $_POST['seating'];
    $departure_date = $_POST['departure_date'];
    $departure_time = $_POST['departure_time'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $infants = $_POST['infants'];
    $fare = $_POST['fare'];
    $return_date = $_POST['return_date'];
    $return_time = $_POST['return_time'];
    $message = $_POST['message'];
    $full_name = $_POST['Name'];
    $phone_number = $_POST['Phone_no'];
    $email = $_POST['Email'];

    // SQL query to insert form data into the database
    $sql = "INSERT INTO your_table_name (from_location, to_location, airline, seating, departure_date, departure_time, adults, children, infants, fare, return_date, return_time, message, full_name, phone_number, email)
            VALUES ('$from', '$to', '$airline', '$seating', '$departure_date', '$departure_time', '$adults', '$children', '$infants', '$fare', '$return_date', '$return_time', '$message', '$full_name', '$phone_number', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Form data has been successfully submitted!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the MySQL connection
    $conn->close();
}
?>