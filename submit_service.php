<?php
// بيانات الاتصال بقاعدة البيانات
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "alfarid.db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استلام البيانات
$full_name            = $conn->real_escape_string($_POST['full_name']);
$email                = $conn->real_escape_string($_POST['email']);
$phone                = $conn->real_escape_string($_POST['phone']);
$passport_number      = $conn->real_escape_string($_POST['passport_number']);
$passport_issue_date  = $conn->real_escape_string($_POST['passport_issue_date']);
$passport_expiry_date = $conn->real_escape_string($_POST['passport_expiry_date']);
$nationality          = $conn->real_escape_string($_POST['nationality']);
$passport_issue_place = $conn->real_escape_string($_POST['passport_issue_place']);
$service_type         = $conn->real_escape_string($_POST['service_type']);
$message              = $conn->real_escape_string($_POST['message']);

// إدخال البيانات
$sql = "INSERT INTO service_applications 
(full_name, email, phone, passport_number, passport_issue_date, passport_expiry_date, nationality, passport_issue_place, service_type, message)
VALUES 
('$full_name', '$email', '$phone', '$passport_number', '$passport_issue_date', '$passport_expiry_date', '$nationality', '$passport_issue_place', '$service_type', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<h3 style='text-align:center; margin-top:50px;'>✅ تم إرسال طلبك بنجاح</h3>";
} else {
    echo "خطأ: " . $conn->error;
}

$conn->close();
?>
