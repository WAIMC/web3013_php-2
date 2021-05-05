<h2 class="text-center font-weight-bold text-primary">QUẢN LÝ LOẠI HÀNG</h2>

<?php
    if(isset($_GET['update']) || isset($_POST['btn_update'])){
        $update_id = isset($_GET['id_category']) ? $category->select_category_id($_GET['id_category']) : $category->select_category_id($_POST['id_category']) ;
?>

<?php $mess_update = isset($mess_update) ? $mess_update : '';
    echo "<h5 class='alert alert-warning'>$mess_update</h5>";
?>
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <form action="?act=category" method="post" class="user">
            <div class="form-group">
                <input type="text" name="id_category" value="<?=$update_id['id']?>" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
                <input type="text" name="name_category" value="<?php if (empty($update_id['name_category'])) {
                                                                $update_id['name_category'] = "";
                                                            } else {
                                                                echo $update_id['name_category'];
                                                            } ?>" class="form-control form-control-user" id="exampleInputPassword" placeholder="Tên loại hàng">
                <label for="" style="color: red;">
                    <?= $name_category_error_up = isset($name_category_error_up) ? $name_category_error_up : '' ?></label>
            </div>
            <div class="form-group">
                <button name="btn_update" onclick="return confirm('Are you sure you want to update this item ?');" class="btn btn-success">Cập Nhập</button>
                <button type="reset" class="btn btn-success">Nhập lại</button>
            </div>
        </form>
    </div>
</div>
<?php
    }else{
?>

<?php $mess_add = isset($mess_add) ? $mess_add : '';
    echo "<h5 class='alert alert-warning'>$mess_add</h5>";
?>
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <form action="?act=category" method="post" class="user">
            <div class="form-group">
                <input value="auto number" name="id" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
                <input type="text" name="name_category" value="<?php if (empty($name_category)) {
                                                                $name_category = "";
                                                            } else {
                                                                echo $name_category;
                                                            } ?>" class="form-control form-control-user" id="exampleInputPassword" placeholder="Tên loại hàng">
                <label for="" style="color: red;">
                    <?= $name_category_error = isset($name_category_error) ? $name_category_error : '' ?></label>
            </div>
            <div class="form-group">
                <button name="btn_insert" onclick="return confirm('Are you sure you want to insert this item?');" class="btn btn-success">Thêm mới</button>
                <button type="reset" class="btn btn-success">Nhập lại</button>
            </div>
        </form>
    </div>
</div>        
<?php
    }
?>


<?php $mess_delete = isset($mess_delete) ? $mess_delete : '';
    echo "<h5 class='alert alert-warning'>$mess_delete</h5>";
?>
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <form action="?act=category" method="post">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="bg-gradient-info text-gray-100">
                                    <th></th>
                                    <th>Mã Loại Hàng</th>
                                    <th>Tên Loại Hàng</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($items as $item) {
                                ?>
                                    <tr>
                                        <td>
                                            <!-- <input type="checkbox" name="ma_loai[]" value="<//?= $item['ma_loai'] ?>" id=""> -->
                                        </td>
                                        <td><?= $item['id'] ?></td>
                                        <td><?= $item['name_category'] ?></td>
                                        <td>
                                            <a href="?act=category&update&id_category=<?= $item['id'] ?>" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                <span class="text">SỬA</span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?act=category&btn_delete&id_category=<?= $item['id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                <span class="text">XÓA</span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <a href="?act=category" class="btn btn-success">Nhập Thêm</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>