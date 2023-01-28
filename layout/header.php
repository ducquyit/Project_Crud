<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quản lý sinh viên</title>
    <link rel="stylesheet" href="../public/vendor/bootstrap-4.5.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/vendor/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>
    <div class="container" style="margin-top:20px;">
        <?php
        //trim là hàm xóa ký tự chỉ định trước và sau chuỗi
        $requestURL = trim($_SERVER['REQUEST_URI'], '/');
        $tmp = explode('/', $requestURL); //trả về array phần tử được cắt
        $module = $tmp[0];

        ?>
        <a href="../student" class="<?= $module == 'student' ? 'active' : '' ?> btn btn-info">Students</a>
        <a href="../subject" class="<?= $module == 'subject' ? 'active' : '' ?> btn btn-info">Subject</a>
        <a href="../register" class="<?= $module == 'register' ? 'active' : '' ?> btn btn-info">Register</a>
        <?php
        session_start();
        $message = '';
        $class = '';
        if (!empty($_SESSION['success'])) {
            $message = $_SESSION['success'];
            //xóa phần tử có key là success khỏi array kết hợp
            unset($_SESSION['success']);
            $class = 'success';
        } else if (!empty($_SESSION['error'])) {
            $message = $_SESSION['error'];
            //xóa phần tử có key là error khỏi array kết hợp
            unset($_SESSION['error']);
            $class = 'danger';
        }

        ?>
        <?php if ($message) : ?>
        <div class="alert alert-<?= $class ?> mt-3">
            <?= $message ?>
        </div>
        <?php endif ?>