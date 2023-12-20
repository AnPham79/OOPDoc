<?php

// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'stmt');
mysqli_set_charset($conn, 'utf8');

// Chuẩn bị câu truy vấn SQL với placeholders (?) cho giá trị cần chèn
$sql = "INSERT INTO sinhvien(ma, ten, lop) VALUES (?, ?, ?)";

// Sử dụng Prepared Statement
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    // Gắn giá trị vào các placeholders và kiểu dữ liệu của chúng
    $ma = null; // Giá trị này có thể được sinh tự động nếu cột "ma" có thuộc tính tự tăng
    $ten = $_POST['ten'];
    $lop = $_POST['lop'];

    // gồm đối tượng chuẩn bị trước stmt, kiểu dữ liệu cho cột trong bảng, từng cột trong bảng
    mysqli_stmt_bind_param($stmt, 'iss', $ma, $ten, $lop);

    // Thực thi câu truy vấn
    if (mysqli_stmt_execute($stmt)) {
        echo "Dữ liệu đã được chèn thành công.";
    } else {
        echo "Lỗi khi chèn dữ liệu: " . mysqli_error($conn);
    }

    // Đóng statement
    mysqli_stmt_close($stmt);
} else {
    echo "Lỗi trong quá trình chuẩn bị câu truy vấn: " . mysqli_error($conn);
}

// Đóng kết nối
mysqli_close($conn);
?>

