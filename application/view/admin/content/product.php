<h2 class="text-center font-weight-bold text-primary">QUẢN LÝ HÀNG HÓA</h2>
<?php
    if(isset($_GET['update']) || isset($_POST['btn_update'])){
        $update_id = isset($_GET['id_product']) ? $product->select_product_by_id($_GET['id_product']) : $product->select_product_by_id($_POST['id_product']) ;
?>
<?php $mess_update = isset($mess_update) ? $mess_update : '';
    echo "<h5 class='alert alert-warning'>$mess_update</h5>";
?>
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <form class="user" method="post" action="?act=product" enctype="multipart/form-data">
            <!-- content one -->
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="id_product" value="<?=$update_id['id']?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Mã Hàng Hóa" readonly>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="name_product" value="<?php if(empty($update_id['name_product'])){$update_id['name_product']="";}else{echo $update_id['name_product'];}?>" class="form-control form-control-user" id="exampleLastName" placeholder="Tên Hàng Hóa">
                    <label for="" style="color: red;"> <?=$name_product_error = isset($name_product_error) ? $name_product_error : '' ?></label>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="price" value="<?php if(empty($update_id['price'])){$update_id['price']="";}else{echo $update_id['price'];}?>" class="form-control form-control-user" id="exampleLastName" placeholder="Đơn Giá">
                    <label for="" style="color: red;"> <?=$price_error = isset($price_error) ? $price_error : '' ?></label>
                </div>
            </div>
            <!-- content two -->
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="discount" value="<?php if(empty($update_id['discount'])){$update_id['discount']="";}else{echo $update_id['discount'];}?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Giảm Giá">
                    <label for="" style="color: red;"> <?=$discount_error = isset($discount_error) ? $discount_error : '' ?></label>
                </div>
                <div class="col-sm-4">
                    <input type="file" name="image" class="form-control form-control-user center-xs" id="exampleLastName" ><?=$update_id['image']?>
                    <input type="hidden" name="image2" value="<?=$update_id['image']?>" class="form-control form-control-user center-xs" id="exampleLastName" >
                </div>
                <div class="col-sm-4">
                    <select class="form-control form-control-user p-0 pl-1" name="id_category" id="">
                        <?php
                        foreach ($id_category as $list_category) {
                            if($list_category['id'] == $update_id['id_category']){
                                echo '<option selected value="' . $list_category['id'] . '">' . $list_category['name_category'] . '</option>';
                            }else{
                                echo '<option value="' . $list_category['id'] . '">' . $list_category['name_category'] . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
            <!-- content three -->
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0 form-control form-control-user">
                    <div class="row" style="margin-left:2rem;margin-top:-0.75rem;">
                        <div class="col-sm-6 mb-sm-0 t-2 custom-control custom-checkbox small">
                            <input type="radio" value="1" name="special" <?= $update_id['special'] == 1 ? 'checked' : ''?> class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Đặc Biệt</label>
                        </div>
                        <div class="col-sm-6 custom-control custom-checkbox small">
                            <input type="radio" value="0" name="special" <?= $update_id['special'] == 0 ? 'checked' : ''?> class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Bình Thường</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <input type="date" name="date" value="<?php if(empty($update_id['date'])){$update_id['date']="";}else{echo $update_id['date'];}?>" class="form-control form-control-user" id="exampleLastName" placeholder="Ngày Nhập">
                    <label for="" style="color: red;"> <?=$date_error = isset($date_error) ? $date_error : '' ?></label>
                </div>
                <div class="col-sm-4 form-control form-control-user">
                    <div class="row" style="margin-left:2rem;margin-top:-0.75rem;">
                        <div class="col-sm-6 mb-sm-0 t-2 custom-control custom-checkbox small">
                            <input type="radio" value="1" name="status" <?= $update_id['status'] == 1 ? 'checked' : ''?> class="custom-control-input" id="customChec3">
                            <label class="custom-control-label" for="customChec3">Còn Hàng</label>
                        </div>
                        <div class="col-sm-6 custom-control custom-checkbox small">
                            <input type="radio" value="0" name="status" <?= $update_id['status'] == 0 ? 'checked' : ''?> class="custom-control-input" id="customChec4">
                            <label class="custom-control-label" for="customChec4">Hết Hàng</label>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" class="form-control" readonly value="0" name="view" id="" aria-describedby="helpId" placeholder="">
            <!-- content four -->
            <div class="form-group">
                <textarea name="description" class="form-control form-control-user" id="" placeholder="Mô Tả"><?php if(empty($update_id['description'])){$update_id['description']="";}else{echo $update_id['description'];}?></textarea>
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
        <form class="user" method="post" action="?act=product" enctype="multipart/form-data">
            <!-- content one -->
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="id_product" class="form-control form-control-user" id="exampleFirstName" placeholder="Mã Hàng Hóa" readonly>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="name_product" value="<?php if(empty($name_product)){$name_product="";}else{echo $name_product;}?>" class="form-control form-control-user" id="exampleLastName" placeholder="Tên Hàng Hóa">
                    <label for="" style="color: red;"> <?=$name_product_error = isset($name_product_error) ? $name_product_error : '' ?></label>
                </div>
                <div class="col-sm-4">
                    <input type="text" name="price" value="<?php if(empty($price)){$price="";}else{echo $price;}?>" class="form-control form-control-user" id="exampleLastName" placeholder="Đơn Giá">
                    <label for="" style="color: red;"> <?=$price_error = isset($price_error) ? $price_error : '' ?></label>
                </div>
            </div>
            <!-- content two -->
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <input type="text" name="discount" value="<?php if(empty($discount)){$discount="";}else{echo $discount;}?>" class="form-control form-control-user" id="exampleFirstName" placeholder="Giảm Giá">
                    <label for="" style="color: red;"> <?=$discount_error = isset($discount_error) ? $discount_error : '' ?></label>
                </div>
                <div class="col-sm-4">
                    <input type="file" name="image" class="form-control form-control-user center-xs" id="exampleLastName" >
                </div>
                <div class="col-sm-4">
                    <select class="form-control form-control-user p-0 pl-1" name="id_category" id="">
                        <?php
                        foreach ($id_category as $list_category) {
                            echo '<option value="' . $list_category['id'] . '">' . $list_category['name_category'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <!-- content three -->
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0 form-control form-control-user">
                    <div class="row" style="margin-left:2rem;margin-top:-0.75rem;">
                        <div class="col-sm-6 mb-sm-0 t-2 custom-control custom-checkbox small">
                            <input type="radio" value="1" name="special" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Đặc Biệt</label>
                        </div>
                        <div class="col-sm-6 custom-control custom-checkbox small">
                            <input type="radio" value="0" name="special" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label" for="customCheck2">Bình Thường</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <input type="date" name="date" value="<?php if(empty($date)){$date="";}else{echo $date;}?>" class="form-control form-control-user" id="exampleLastName" placeholder="Ngày Nhập">
                    <label for="" style="color: red;"> <?=$date_error = isset($date_error) ? $date_error : '' ?></label>
                </div>
                <div class="col-sm-4 form-control form-control-user">
                    <div class="row" style="margin-left:2rem;margin-top:-0.75rem;">
                        <div class="col-sm-6 mb-sm-0 t-2 custom-control custom-checkbox small">
                            <input type="radio" value="1" name="status" class="custom-control-input" id="customChec3">
                            <label class="custom-control-label" for="customChec3">Còn Hàng</label>
                        </div>
                        <div class="col-sm-6 custom-control custom-checkbox small">
                            <input type="radio" value="0" name="status" class="custom-control-input" id="customChec4">
                            <label class="custom-control-label" for="customChec4">Hết Hàng</label>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" class="form-control" readonly value="0" name="view" id="" aria-describedby="helpId" placeholder="">
            <!-- content four -->
            <div class="form-group">
                <textarea name="description" class="form-control form-control-user" id="" placeholder="Mô Tả"><?php if(empty($description)){$description="";}else{echo $description;}?></textarea>
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
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="bg-gradient-info text-gray-100">
                                <th></th>
                                <th>Tên Hàng Hóa</th>
                                <th>Hình</th>
                                <th>Tình Trạng</th>
                                <th>Giảm Giá</th>
                                <th>Lượt Xem</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($items as $item) {
                                if ($item['status'] == 1) {
                                    $status = "Còn Hàng";
                                } elseif ($item['status'] == 0) {
                                    $status = "Hết Hàng";
                                }
                            ?>
                                <tr>
                                    <td>
                                        
                                    </td>
                                    <td><?= $item['name_product'] ?></td>
                                    <td class=""><img src="<?= PUBLIC_IMAGE ?>products/<?= $item['image'] ?>" width="100%" alt=""></td>
                                    <td><?= $status ?></td>
                                    <td><?= $item['discount'] ?></td>
                                    <td><?= $item['view'] ?></td>
                                    <td>
                                        <a href="?act=product&update&id_product=<?= $item['id'] ?>" class="btn btn-success btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-check"></i>
                                            </span>
                                            <span class="text">SỬA</span>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="?act=product&btn_delete&id_product=<?= $item['id'] ?>" onclick="return confirm('Are you sure you want to delete this item ?');" class="btn btn-danger btn-icon-split">
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
                        <a href="?act=product" class="btn btn-success">Nhập Thêm</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>