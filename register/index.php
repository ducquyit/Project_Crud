<?php require '../layout/header.php' ?>
<h1>Danh sách sinh viên đăng ký môn học</h1>
<a href="create.php" class="btn btn-info">Add</a>
<?php require '../layout/search.php' ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Mã SV</th>
            <th>Tên SV</th>
            <th>Mã MH</th>
            <th>Tên MH</th>
            <th>Điểm</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php require '../config.php' ?>
        <?php require '../connectDb.php' ?>
        <?php
        $sql = "SELECT register.*, student.name AS student_name, subject.name AS subject_name FROM register
        JOIN student ON register.student_id=student.id
        JOIN subject ON register.subject_id=subject.id";
        if ($search) {
            $sql .= " WHERE student.name LIKE '%$search%' OR subject.name LIKE '%$search%'";
            //SELECT * FROM student WHERE name LIKE '%teo%'
        }
        $result = $conn->query($sql);
        $order = 0;
        if ($result->num_rows > 0) :
            while ($row = $result->fetch_assoc()) :
                $order++;
        ?>
        <tr>
            <td><?= $order ?></td>
            <td><?= $row['student_id'] ?></td>
            <td><?= $row['student_name'] ?></td>
            <td><?= $row['subject_id'] ?></td>
            <td><?= $row['subject_name'] ?></td>
            <td><?= $row['score'] ?></td>
            <td><a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Sửa</a></td>
            <td>

                <button data-href="destroy.php?id=<?= $row['id'] ?>" type="button" class="delete btn btn-danger btn-sm"
                    data-toggle="modal" data-target="#exampleModal">
                    Xóa
                </button>
            </td>
        </tr>
        <?php
            endwhile;
        endif;
        ?>
    </tbody>
</table>
<div>
    <span>Số lượng: <?= $order ?></span>
</div>
<?php require '../layout/footer.php' ?>