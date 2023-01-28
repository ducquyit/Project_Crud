<?php require '../layout/header.php' ?>
<h1>Thêm đăng ký môn học</h1>
<form action="store.php" method="POST" class="form-register-create">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label for="student_id">Tên sinh viên</label>
                    <select class="form-control" name="student_id" id="student_id" required>
                        <option value="">Vui lòng chọn sinh viên</option>
                        <?php
                        require '../config.php';
                        require '../connectDb.php';
                        $sql = "SELECT * FROM student";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) :
                            while ($row = $result->fetch_assoc()) :
                        ?>
                        <option value="<?= $row['id'] ?>"><?= $row['id'] ?> - <?= $row['name'] ?></option>
                        <?php endwhile ?>
                        <?php endif ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="subject_id">Tên môn học</label>
                    <span id="load" class="text-primary"></span>
                    <select class="form-control" name="subject_id" id="subject_id" required>
                        <option value="">Vui lòng chọn môn học</option>
                        <?php
                        $sql = "SELECT * FROM subject";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) :
                            while ($row = $result->fetch_assoc()) :
                        ?>
                        <option value="<?= $row['id'] ?>"><?= $row['id'] ?> - <?= $row['name'] ?></option>
                        <?php endwhile ?>
                        <?php endif ?>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Lưu</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php require '../layout/footer.php' ?>