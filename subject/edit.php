<?php require '../layout/header.php' ?>
<h1>Chỉnh Sửa Môn Học</h1>
<?php
require '../config.php';
require '../connectDb.php';
$id = $_GET['id'];
$sql = "SELECT * FROM subject WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); //lấy 1 dòng dữ liệu trong biến $result
?>
<form action="update.php" method="POST" accept-charset="utf-8" class="form-subject">
    <div class="container">
        <div class="row">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="col-md-5">
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" class="form-control" placeholder="Tên của bạn" required name="name"
                        value="<?= $row['name'] ?>">
                </div>
                <div class="form-group">
                    <label>Số tín chỉ</label>
                    <input type="text" class="form-control" placeholder="Số tín chỉ" required name="number_of_credit"
                        value="<?= $row['number_of_credit'] ?>">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Lưu</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php require '../layout/footer.php' ?>