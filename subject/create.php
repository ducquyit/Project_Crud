<?php require '../layout/header.php' ?>
<h1>Thêm Môn Học</h1>
<form action="store.php" method="POST" accept-charset="utf-8" class="form-subject">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="form-group">
                    <label>Tên</label>
                    <input type="text" class="form-control" placeholder="Tên Môn Học Mới" required name="name">
                </div>
                <div class="form-group">
                    <label>Số tín chỉ</label>
                    <input type="text" class="form-control" placeholder="Chỉ số tín chỉ" required
                        name="number_of_credit">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Lưu</button>
                </div>
            </div>
        </div>
    </div>
</form>
<?php require '../layout/footer.php' ?>