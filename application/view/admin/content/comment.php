<h2 class="text-center font-weight-bold text-primary">QUẢN LÝ BÌNH LUẬN</h2>

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
                                <th>Hàng Hóa</th>
                                <th>Số Bình Luận</th>
                                <th>Mới Nhất</th>
                                <th>Cũ Nhất</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($items as $item){
                            ?>
                            <tr>
                                <td><?=$item['name_product']?></td>
                                <td><?=$item['quantity']?></td>
                                <td><?=$item['newest_max']?></td>
                                <td><?=$item['oldest_min']?></td>
                                <td>
                                    <a href="?act=comment&id_product=<?=$item['id_product']?>" class="btn btn-info btn-icon-split">
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