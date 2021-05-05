<h2 class="text-center font-weight-bold text-primary">ĐƠN HÀNG CHI TIẾT</h2>
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

        <?php $mess_delete = isset($mess_delete) ? $mess_delete : '';
    echo "<h5 class='alert alert-warning'>$mess_delete</h5>";
?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr class="bg-gradient-info text-gray-100">
                                <th></th>
                                <th>Hàng Hóa</th>
                                <th>Ảnh</th>
                                <th>Đơn Giá</th>
                                <th>Số Lượng</th>
                                <th>Tổng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            foreach ($ivc_detail as $ivc) {
                            ?>
                                <tr>
                                    <td>
                                    </td>
                                    <td><?= $ivc['name_product'] ?></td>
                                    <td><img src="<?= PUBLIC_IMAGE ?>products/<?= $ivc['image'] ?>" width="100%" alt=""></td>
                                    <td><?=$ivc['price']?></td>
                                    <td><?= $ivc['amount'] ?></td>
                                    <td><?=($ivc['price'] * $ivc['amount'])?></td>
                                    <td>
                                    <a href="?act=invoices&id_invoices=<?=$ivc['id_invoices']?>&btn_delete&id_invoices_detail=<?= $ivc['id'] ?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                <span class="text">XÓA</span>
                                            </a> 
                                    </td>
                                </tr>
                            <?php
                                $total += ($ivc['price'] * $ivc['amount']);
                            }
                            ?>
                        </tbody>
                        <tfoot class="border-secondary">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> <h4>Tổng :</h4></td>
                            <td><h4>$<?= $total ?></h4></td>
                            <td></td>
                        </tfoot>
                    </table>
                    <div class="form-group">
                        <a href="?act=invoices" class="btn btn-success">Danh Sách Đơn Hàng</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>