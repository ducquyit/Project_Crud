<?php require '../layout/header.php' ?>
<h1>Cập nhật điểm</h1>
<?php
$id = $_GET['id'];
require '../config.php';
require '../connectDb.php';
$sql = "SELECT register.*, student.name AS student_name, subject.name AS subject_name FROM register
        JOIN student ON register.student_id=student.id
        JOIN subject ON register.subject_id=subject.id WHERE register.id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<form action="update.php" method="POST" class="form-register-edit">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label>Tên sinh viên</label>
                    <span><?= $row['student_name'] ?></span>
                </div>
                <div class="form-group">
                    <label>Tên môn học</label>
                    <span><?= $row['subject_name'] ?></span>
                </div>
                <div class="form-group">
                    <label for="score">Điểm</label>
                    <input class="form-control" type="text" name="score" id="score" value="<?= $row['score'] ?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Lưu</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php require '../layout/footer.php' ?>