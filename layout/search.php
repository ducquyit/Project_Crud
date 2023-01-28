<?php
$search = !empty($_GET['search']) ? $_GET['search'] : '';
?>
<form action="index.php" method="GET">
    <label class="form-inline justify-content-end">Tìm kiếm: <input type="search" name="search" class="form-control"
            value="<?= $search ?>">
        <button class="btn btn-danger">Tìm</button>
    </label>
</form>