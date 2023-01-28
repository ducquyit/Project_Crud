<?php
require '../config.php';
require '../connectDb.php';
session_start();
$id = $_GET['id'];
//Kiểm tra môn học đã được đăng ký chưa?
$sql = "SELECT * FROM register WHERE subject_id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //Môn học đã được đăng ký môn học, không thể xóa
    $_SESSION['error'] = 'Lỗi: Môn học đã được đăng ký môn học, không thể xóa';
    header('location:index.php');
    exit; //kết thúc xử lý, không chạy code bên dưới exit
}

$sql = "DELETE FROM subject WHERE id=$id";

if ($conn->query($sql)) {
    $_SESSION['success'] = 'Đã xóa môn học thành công';
    header('location:index.php');
    exit; //kết thúc xử lý, không chạy code bên dưới exit
}
$_SESSION['error'] = $sql . '<br>' . $conn->error;
header('location:index.php');