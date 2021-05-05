<h2 class="text-center font-weight-bold text-primary">QUẢN LÝ KHÁCH KHÁCH HÀNG</h2>
<?php
    if(isset($_GET['update']) || isset($_POST['btn_update'])){
        $update_id = isset($_GET['user_name']) ? $customer->select_user_by_id($_GET['user_name']) : $customer->select_user_by_id($_POST['user_name']) ;
?>
<?php $mess_update = isset($mess_update) ? $mess_update : '';
    echo "<h5 class='alert alert-warning'>$mess_update</h5>";
?>
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <form class="user" action="?act=customer" method="post" enctype="multipart/form-data">
            <!-- content one -->
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="user_name" value="<?php if(empty($update_id['user_name'])){$update_id['user_name']="";}else{echo $update_id['user_name'];}?>" class="form-control form-control-user" id="exampleFirstName" readonly placeholder="Mã Khách Hàng">
                    <label for="" style="color: red;"> <?=$user_name_error = isset($user_name_error) ? $user_name_error : '' ?></label>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="full_name" value="<?php if(empty($update_id['full_name'])){$update_id['full_name']="";}else{echo $update_id['full_name'];}?>" class="form-control form-control-user" id="exampleLastName" placeholder="Họ Và Tên">
                    <label for="" style="color: red;"> <?=$full_name_error = isset($full_name_error) ? $full_name_error : '' ?></label>
                </div>
            </div>
            <!-- content two -->
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" value="<?php if(empty($update_id['password'])){$update_id['password']="";}else{echo $update_id['password'];}?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Mật Khẩu" readonly>
                    <label for="" style="color: red;"> <?=$password_error = isset($password_error) ? $password_error : '' ?></label>
                </div>
                <div class="col-sm-6">
                    <input type="password" name="password2" value="<?php if(empty($update_id['password2'])){$update_id['password2']="";}else{echo $update_id['password2'];}?>" class="form-control form-control-user" id="exampleLastName" placeholder="Xác Nhận Mật khẩu">
                    <label for="" style="color: red;"> <?=$password2_error = isset($password2_error) ? $password2_error : '' ?></label>
                </div>
            </div>
            <!-- content three -->
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="email" name="email" value="<?php if(empty($update_id['email'])){$update_id['email']="";}else{echo $update_id['email'];}?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Địa Chỉ Email">
                    <label for="" style="color: red;"> <?=$email_error = isset($email_error) ? $email_error : '' ?></label>
                </div>
                <div class="col-sm-6">
                    <input type="file" name="image" class="form-control form-control-user" id="exampleLastName"><?=$update_id['image']?>
                    <input type="hidden" name="image2" value="<?=$update_id['image']?>">
                </div>
            </div>
            <!-- content four -->
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="address" value="<?php if(empty($update_id['address'])){$update_id['address']="";}else{echo $update_id['address'];}?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Địa Chỉ">
                    <label for="" style="color: red;"> <?=$address_error = isset($address_error) ? $address_error : '' ?></label>
                </div>
                <div class="col-sm-6">
                    <input type="number" name="phone" value="<?php if(empty($update_id['phone'])){$update_id['phone']="";}else{echo $update_id['phone'];}?>" class="form-control form-control-user" id="exampleLastName" placeholder="Số Điện Thoại">
                    <label for="" style="color: red;"><?=$phone_number = isset($phone_number) ? $phone_number : '' ?></label>
                </div>
            </div>
            <!-- content five -->
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0 form-control form-control-user">
                    <div class="row" style="margin-left:2rem;margin-top:-0.75rem;">
                        <div class="col-sm-6 mb-sm-0 t-2 custom-control custom-checkbox small">
                            <input type="radio" class="custom-control-input" name="active" value="1" id="customCheck" checked>
                            <label class="custom-control-label" for="customCheck">Kích Hoạt</label>
                        </div>
                        <div class="col-sm-6 custom-control custom-checkbox small">
                            <!-- <input type="radio" class="custom-control-input" name="active" value="0" id="customCheck2"> -->
                            <label class="custom-control-label" for="customCheck2">Chưa Kích Hoạt</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 form-control form-control-user">
                    <div class="row" style="margin-left:2rem;margin-top:-0.75rem;">
                        <div class="col-sm-6 mb-sm-0 t-2 custom-control custom-checkbox small">
                            <input type="radio" name="role" value="1" <?= $update_id['role'] == 1 ? 'checked' : ''?> class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">Khách Hàng</label>
                        </div>
                        <div class="col-sm-6 custom-control custom-checkbox small">
                            <input type="radio" name="role" value="0" <?= $update_id['role'] == 0 ? 'checked' : ''?> class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">Quản Trị</label>
                        </div>
                    </div>
                </div>
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
        <form class="user" action="?act=customer" method="post" enctype="multipart/form-data">
            <!-- content one -->
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="user_name" value="<?php if(empty($_POST['user_name'])){$_POST['user_name']="";}else{echo $_POST['user_name'];}?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Mã Khách Hàng">
                    <label for="" style="color: red;"> <?=$user_name_error = isset($user_name_error) ? $user_name_error : '' ?></label>
                </div>
                <div class="col-sm-6">
                    <input type="text" name="full_name" value="<?php if(empty($_POST['full_name'])){$_POST['full_name']="";}else{echo $_POST['full_name'];}?>" class="form-control form-control-user" id="exampleLastName" placeholder="Họ Và Tên">
                    <label for="" style="color: red;"> <?=$full_name_error = isset($full_name_error) ? $full_name_error : '' ?></label>
                </div>
            </div>
            <!-- content two -->
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" value="<?php if(empty($_POST['password'])){$_POST['password']="";}else{echo $_POST['password'];}?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Mật Khẩu">
                    <label for="" style="color: red;"> <?=$password_error = isset($password_error) ? $password_error : '' ?></label>
                </div>
                <div class="col-sm-6">
                    <input type="password" name="password2" value="<?php if(empty($_POST['password2'])){$_POST['password2']="";}else{echo $_POST['password2'];}?>" class="form-control form-control-user" id="exampleLastName" placeholder="Xác Nhận Mật khẩu">
                    <label for="" style="color: red;"> <?=$password2_error = isset($password2_error) ? $password2_error : '' ?></label>
                </div>
            </div>
            <!-- content three -->
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="email" name="email" value="<?php if(empty($_POST['email'])){$_POST['email']="";}else{echo $_POST['email'];}?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Địa Chỉ Email">
                    <label for="" style="color: red;"> <?=$email_error = isset($email_error) ? $email_error : '' ?></label>
                </div>
                <div class="col-sm-6">
                    <input type="file" name="image" class="form-control form-control-user" id="exampleLastName">
                </div>
            </div>
            <!-- content four -->
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="address" value="<?php if(empty($_POST['address'])){$_POST['address']="";}else{echo $_POST['address'];}?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Địa Chỉ">
                    <label for="" style="color: red;"> <?=$address_error = isset($address_error) ? $address_error : '' ?></label>
                </div>
                <div class="col-sm-6">
                    <input type="number" name="phone" value="<?php if(empty($_POST['phone'])){$_POST['phone']="";}else{echo $_POST['phone'];}?>" class="form-control form-control-user" id="exampleLastName" placeholder="Số Điện Thoại">
                    <label for="" style="color: red;"><?=$phone_number = isset($phone_number) ? $phone_number : '' ?></label>
                </div>
            </div>
            <!-- content five -->
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0 form-control form-control-user">
                    <div class="row" style="margin-left:2rem;margin-top:-0.75rem;">
                        <div class="col-sm-6 mb-sm-0 t-2 custom-control custom-checkbox small">
                            <!-- <input type="radio" class="custom-control-input" name="active" value="1" id="customCheck" readonly> -->
                            <label class="custom-control-label" for="customCheck">Kích Hoạt</label>
                        </div>
                        <div class="col-sm-6 custom-control custom-checkbox small">
                            <input type="radio" class="custom-control-input" name="active" value="0" id="customCheck2" readonly>
                            <label class="custom-control-label" for="customCheck2">Chưa Kích Hoạt</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 form-control form-control-user">
                    <div class="row" style="margin-left:2rem;margin-top:-0.75rem;">
                        <div class="col-sm-6 mb-sm-0 t-2 custom-control custom-checkbox small">
                            <input type="radio" name="role" value="1" class="custom-control-input" id="customCheck3">
                            <label class="custom-control-label" for="customCheck3">Khách Hàng</label>
                        </div>
                        <div class="col-sm-6 custom-control custom-checkbox small">
                            <input type="radio" name="role" value="0" class="custom-control-input" id="customCheck4">
                            <label class="custom-control-label" for="customCheck4">Quản Trị</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button name="btn_insert" onclick="return confirm('Are you sure you want to insert this item ?');" class="btn btn-success">Thêm mới</button>
                <button type="reset" class="btn btn-success">Nhập lại</button>
            </div>
        </form>
    </div>
</div>

<?php
    }
?>



<?php
$mess_delete = isset($mess_delete) ? $mess_delete : '';
echo "<h5 class='alert alert-warning'>$mess_delete</h5>";
?>
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="bg-gradient-info text-gray-100">
                                    <th></th>
                                    <th>Họ Và Tên</th>
                                    <th>Địa Chỉ Email</th>
                                    <th>Hình Ảnh</th>
                                    <th>Địa Chỉ</th>
                                    <th>Vai Trò</th>
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
                                        </td>
                                        <td><?= $item['full_name'] ?></td>
                                        <td><?= $item['email'] ?></td>
                                        <td> <img src="<?= PUBLIC_IMAGE ?>customer/<?= $item['image'] ?>" width="100%" alt=""></td>
                                        <td><?= $item['address'] ?></td>
                                        <td><?= $item['role'] == 0 ? 'Quản Trị' : 'Khách Hàng' ?></td>
                                        <td>
                                            <a href="?act=customer&update&user_name=<?= $item['user_name'] ?>" class="btn btn-success btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                <span class="text">SỬA</span>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="?act=customer&btn_delete&user_name=<?= $item['user_name'] ?>" onclick="return confirm('Are you sure you want to delete this item ?');" class="btn btn-danger btn-icon-split">
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
                        <div class="form-group">
                            <a href="?act=customer" class="btn btn-success">Nhập Thêm</a>
                        </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>