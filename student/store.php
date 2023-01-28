<?php
require '../config.php';
require '../connectDb.php';
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];

$sql = "INSERT INTO student (name, birthday, gender) VALUES('$name', '$birthday', '$gender')";
session_start();
if ($conn->query($sql)) {
    $_SESSION['success'] = 'Đã tạo sinh viên thành công';
    header('location:index.php');
    exit; //kết thúc xử lý, không chạy code bên dưới exit
}
$_SESSION['error'] = $sql . '<br>' . $conn->error;
header('location:index.php');