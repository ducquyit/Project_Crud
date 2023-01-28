<?php
require '../config.php';
require '../connectDb.php';

$name = $_POST['name'];
$number_of_credit = $_POST['number_of_credit'];

$sql = "INSERT INTO subject (name, number_of_credit) VALUES('$name', $number_of_credit)";
session_start();
if ($conn->query($sql)) {
    $_SESSION['success'] = 'Đã tạo môn học thành công';
    header('location:index.php');
    exit; //kết thúc xử lý, không chạy code bên dưới exit
}
$_SESSION['error'] = $sql . '<br>' . $conn->error;
header('location:index.php');