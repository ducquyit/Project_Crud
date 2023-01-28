<?php
require '../config.php';
require '../connectDb.php';
session_start();
$id = $_GET['id'];
//Kiểm tra sinh viên đã đăng ký môn học hay chưa?
$sql = "SELECT * FROM register WHERE student_id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //sinh viên này đã đăng ký môn học rồi, không thể xóa
    $_SESSION['error'] = 'Lỗi: Sinh viên đã đăng ký môn học, không thể xóa';
    header('location:index.php');
    exit; //kết thúc xử lý, không chạy code bên dưới exit
}

$sql = "DELETE FROM student WHERE id=$id";

if ($conn->query($sql)) {
    $_SESSION['success'] = 'Đã xóa sinh viên thành công';
    header('location:index.php');
    exit; //kết thúc xử lý, không chạy code bên dưới exit
}
$_SESSION['error'] = $sql . '<br>' . $conn->error;
header('location:index.php');