<h2 class="text-center font-weight-bold text-primary">QUẢN LÝ BÌNH LUẬN</h2>
<?php
$mess_update = isset($mess_update) ? $mess_update : '';
echo "<h5 class='alert alert-warning'>$mess_update</h5>";
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
                                <th>Nội Dung</th>
                                <th>Ngày</th>
                                <th>Người</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($items as $item){
                            ?>
                            <tr>
                                <td>
                                    
                                </td>
                                <td><?=$item['content']?></td>
                                <td><?=$item['date']?></td>
                                <td><?=$item['id_user']?></td>
                                <td>
                                    <a href="?act=comment&btn_update&id_comment=<?=$item['id']?>&status=1&id_product=<?=$item['id_product']?>" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">HIỆN</span>
                                    </a>
                                    <a href="?act=comment&btn_update&id_comment=<?=$item['id']?>&status=0&id_product=<?=$item['id_product']?>" class="btn btn-warning btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">ẨN</span>
                                    </a>
                                </td>
                                <td>
                                    <a href="?act=comment&btn_delete&id_comment=<?=$item['id']?>&id_product=<?=$item['id_product']?>" class="btn btn-danger btn-icon-split">
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
                        <a href="?act=comment" class="btn btn-success">Danh Sách Bình Luận</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>