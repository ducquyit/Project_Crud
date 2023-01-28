<?php require '../layout/header.php' ?>
<h1>Danh sách Môn Học</h1>
<a href="create.php" class="btn btn-info">Add</a>
<?php require '../layout/search.php' ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Mã MH</th>
            <th>Tên</th>
            <th>Số tín chỉ</th>
            <th colspan="2">Tùy Chọn</th>
        </tr>
    </thead>
    <tbody>
        <?php require '../config.php' ?>
        <?php require '../connectDb.php' ?>
        <?php
        $sql = "SELECT * FROM subject";
        if ($search) {
            $sql .= " WHERE name LIKE '%$search%'";
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
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['number_of_credit'] ?></td>
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
    <span>Số lượng: 3</span>
</div>
<?php require '../layout/footer.php' ?>