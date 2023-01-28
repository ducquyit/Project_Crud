<?php
require '../config.php';
require '../connectDb.php';
$score = $_POST['score'];
$id = $_POST['id'];
$sql = "UPDATE register SET score=$score WHERE id=$id";
session_start();
if ($conn->query($sql)) {
    $_SESSION['success'] = 'Đã cập nhật điểm thành công';
    header('location:index.php');
    exit; //kết thúc xử lý, không chạy code bên dưới exit
}
$_SESSION['error'] = $sql . '<br>' . $conn->error;
header('location:index.php');