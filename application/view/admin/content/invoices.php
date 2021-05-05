<h2 class="text-center font-weight-bold text-primary">QUẢN LÝ ĐƠN HÀNG</h2>

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
                                <th>Khách Hàng</th>
                                <th>Số Điện Thoại</th>
                                <th>Địa Chỉ</th>
                                <th>Số Lượng</th>
                                <th>Trạng Thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            foreach ($items as $item) {
                                $ivs_dt = $invoices_detail->select_invoices_detail_by_product($item['id']);
                                if ($item['note'] == 0) {
                                    $status = "Chưa thanh toán";
                                } elseif ($item['note'] == 1) {
                                    $status = "Đã thanh toán !";
                                }
                            ?>
                                <tr>
                                    <td><?= $item['id_user'] ?></td>
                                    <td><?= $item['phone'] ?></td>
                                    <td><?= $item['address'] ?></td>
                                    <td><?= $item['quantity'] ?></td>
                                    <td>
                                        <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
                                            <input type="hidden" name="id_invoices" value="<?=$item['id']?>">
                                            <select class="form-control form-control-user p-0 pl-1" name="note" id="">
                                                <option value="0" <?php if($item['note']==0){echo "selected";} ?>>Chưa thanh toán</option>
                                                <option value="1" <?php if($item['note']==1){echo "selected";} ?>>Đã thanh toán</option>
                                            </select>
                                            <button type="submit" name="sub" class="btn btn-primary p-1">Submit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="?act=invoices&id_invoices=<?= $item['id'] ?>" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-info"></i>
                                            </span>
                                            <span class="text">Chi Tiết</span>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>