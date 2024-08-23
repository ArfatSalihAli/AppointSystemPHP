<?php
$servername = "localhost";
$username = "root"; 
$password = "ArfatSalih09@";
$dbname = "appointments";

// إنشاء اتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// فحص الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// استلام البيانات من النموذج
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];

// إدخال البيانات في قاعدة البيانات
$sql = "INSERT INTO appoint (name, email, apoint_data, apoint_time) VALUES ('$name', '$email', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
    header ("location:success.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>