<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'huongdoituong';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại" . $conn->connect_error);
}

$sql = "SELECT * FROM sinhvien";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Mã: {$row['id']} - Tên: {$row['name']} - Tuổi: {$row['age']} - Nơi trú: {$row['residence']}" . "</br>";
    }
} else {
    echo "không có sinh viên nào";
}