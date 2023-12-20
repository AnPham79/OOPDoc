<?php

require 'db.php';

$colname = "sinhvien.id, sinhvien.name, sinhvien.age, noitru.name_noitru";
$join = "noitru ON sinhvien.residence = noitru.id_noitru";
$limit = 3;

$obj = new database();

$obj->select('sinhvien', $colname, $join, null, null, $limit);

print_r($obj->getResult());

echo "</br>";

print_r($obj->pagination('sinhvien', null, null, $limit));




// ---------------------------------- // --------------------------------

// $obj->insert('sinhvien', ['name' => 'Nguyễn Đỗ Thắng', 'age' => '19', 'residence' => 'Hòa Do 7']);

// echo "tên học sinh bạn vừa mới thêm là: ";

// print_r($obj->getResult());

// ---------------------------------- // --------------------------------

// $obj->update('sinhvien', ['name' => 'Phạm Ngọc Bảo An', 'age' => '30', 'residence' => 'Cam Thành Nam'], 'id = 7');

// echo "tên học sinh bạn vừa mới sửa là: ";

// print_r($obj->getResult());

// ---------------------------------// ------------------------------------

// $obj->delete('sinhvien', 'id = 1');

// echo "xóa học sinh là: ";

// print_r($obj->getResult());

// ---------------------------------// ------------------------------------

// echo $obj->pagination('sinhvien',null, null, 2);
// $sql = "SELECT * FROM sinhvien";
// $obj->sql($sql);
// print_r($obj->getResult());

// $students = $obj->getResult();

// foreach ($students as $student) {
//     foreach ($student as $key => $value) {
//         echo ucfirst($key) . ': ' . $value . ' ';
//     }
//     echo "<br>";
// }



