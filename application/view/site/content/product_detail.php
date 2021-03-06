<main>
    <!--================Single Product Area =================-->
    <?php

    $new_product[] = array();
    foreach($product->select_product() as $new){
        $product_one[] = array(
            "id_product" => $new['id'],
            "qty" => 0
        );
    }
    foreach($product_one as $new_one){
        $new_product[$new_one['id_product']] = $new_one;
    }
    if(!isset($_SESSION['cart']) || $_SESSION['cart'] == null){
        $_SESSION['cart'] = $new_product;
    }
    if (isset($_GET['id_product'])  || isset($_POST['search'])) {
        if(isset($_POST['add'])){
            if(isset($_SESSION['cart'][$_GET['id_product']]) || $_SESSION['cart'][$_GET['id_product']] != null){
                if($_SESSION['cart'][$_GET['id_product']]['qty'] > 1){
                    $_SESSION['cart'][$_GET['id_product']]['qty'] += $_POST['qty'];
                }else{
                    $_SESSION['cart'][$_GET['id_product']]['qty'] = $_POST['qty'];
                }
            }else{
                $_SESSION['cart'][$_GET['id_product']]['qty'] = 0;
            }
        }
    ?>
        <div class="product_image_area">
            <div class="container">
                <div class="row justify-content-center bg-gray-200">
                    <div class="col-lg-6">
                        <div class="product_img_slide owl-carousel">
                            <div class="single_product_img">
                                <img src=" <?= PUBLIC_IMAGE ?>products/<?= $product_detail['image'] ?>" alt="#" class="img-fluid">
                            </div>
                            <div class="single_product_img">
                                <img src=" <?= PUBLIC_IMAGE ?>products/<?= $product_detail['image'] ?>" alt="#" class="img-fluid">
                            </div>
                            <div class="single_product_img">
                                <img src=" <?= PUBLIC_IMAGE ?>products/<?= $product_detail['image'] ?>" alt="#" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="single_product_text text-center">
                            <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
                                <h3><?= $product_detail['name_product'] ?></h3>
                                <p><?= $product_detail['description'] ?></p>
                                <div class="card_area">
                                    <div class="product_count_area">
                                        <p>S??? l?????ng</p>
                                        <div class="product_count d-inline-block">
                                            <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                            <input class="product_count_item input-number" type="number" name="qty" value="1" min="0" step="1" max="5">
                                            <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                                        </div>
                                        <p>$&nbsp;<?= $product_detail['discount'] ?></p>
                                    </div>
                                    <div class="add_to_cart">
                                        <button type="submit" name="add" class="btn_3">Th??m V??o Gi??? H??ng</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- commnent area start -->
                    <div class="container">
                        <?php require_once VIEW_PATH. "site/layout/comment.php" ?>
                    </div>
                    <!-- coment area end -->
                </div>
            </div>
        </div>
    <?php
    } elseif($id_product == null) {
        echo "
            <div class='text-center m-5'>
                <h2>Vui L??ng Ch???n M???t S???n Ph???m B???t K?? ????? Xem Chi Ti???t !</h2>
                <br>
                <h5>B???n C??ng C?? Th??? Ch???n Nh???ng S???n Ph???m Y??u Th??ch D?????i ????y ????? Xem Chi Ti???t !</h5>
            </div>";
    }
    ?>
    <!--================End Single Product Area =================-->



    <!-- open select top 5 list favourite product  -->
    <?php require_once VIEW_PATH . "site/layout/top-5.php"; ?>
    <!-- end select top 5 list favourite product -->

    <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Nh???n khuy???n m??i v?? c???p nh???t!</h2>
                        <p>
                            Trao quy???n li???n m???ch cho c??c chi???n l?????c t??ng tr?????ng ???????c nghi??n c???u ?????y ????? v?? c??c ngu???n n???i b??? c?? th???
                            t????ng t??c ho???c ???h???u c????? ?????i m???i n???i b??? chi ti???t m???t c??ch ????ng tin c???y.
                        </p>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Nh???p Email c???a b???n !">
                            <a href="?act=login" class="btn_1">????ng k??</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end -->
</main>