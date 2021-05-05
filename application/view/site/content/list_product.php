        <!-- Latest Products Start -->
        <section class="popular-items latest-padding">
            <div class="container">
                <div class="row product-btn justify-content-between mb-40">
                    <div class="properties__button">
                        <!--Nav Button  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tất Cả</a>
                                <?php
                                foreach ($items_category as $category2) {
                                    echo "<a class='nav-item nav-link' id='nav-".$category2['id']."-tab-1' data-toggle='tab' href='#nav-".$category2['id']."' role='tab' aria-controls='nav-".$category2['id']."' aria-selected='false'>".$category2['name_category']."</a>";
                                }
                                ?>
                            </div>
                        </nav>
                        <!--End Nav Button  -->
                    </div>
                    <!-- Grid and List view -->
                    <div class="grid-list-view">
                    </div>
                    <!-- Select items -->
                    <!-- <div class="select-this">
                        <form action="#">
                            <div class="select-itms">
                                <select name="select" id="select1">
                                    <option value="">40 per page</option>
                                    <option value="">50 per page</option>
                                    <option value="">60 per page</option>
                                    <option value="">70 per page</option>
                                </select>
                            </div>
                        </form>
                    </div> -->
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <?php
                            foreach ($items_product as $item) {
                            ?>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                    <div class="single-popular-items mb-50 text-center">
                                        <div class="popular-img">
                                            <img src="<?= PUBLIC_IMAGE ?>products/<?= $item['image'] ?>" alt="">
                                            <div class="img-cap">
                                                <a href="?act=product_detail&id_product=<?= $item['id'] ?>"><span>CHI TIẾT</span></a>
                                            </div>
                                            <div class="favorit-items">
                                                <span class="flaticon-heart"></span>
                                            </div>
                                        </div>
                                        <div class="popular-caption">
                                            <h3><?= $item['name_product'] ?></h3>
                                            <span><del><?= $item['discount'] ?></del> &nbsp; <strong>$ <?= $item['price'] ?></strong> </span>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <!-- Card two -->
                    <?php
                    foreach ($items_category as $category2) {
                    ?>
                        <div class='tab-pane fade' id='nav-<?= $category2['id'] ?>' role='tabpanel' aria-labelledby='nav-<?= $category2['id'] ?>-tab-1'>
                            <div class='row'>
                                <?php
                                $list_category =  $product->select_product_by_category($category2['id']);
                                foreach ($list_category as $list_category3) {
                                ?>
                                    <div class='col-xl-4 col-lg-4 col-md-6 col-sm-6'>
                                        <div class='single-popular-items mb-50 text-center'>
                                            <div class='popular-img'>
                                                <img src='<?= PUBLIC_IMAGE ?>products/<?= $list_category3['image'] ?>' alt=''>
                                                <div class='img-cap'>
                                                    <a href="?act=product_detail&id_product=<?= $list_category3['id'] ?>"><span>CHI TIẾT</span></a>
                                                </div>
                                                <div class='favorit-items'>
                                                    <span class='flaticon-heart'></span>
                                                </div>
                                            </div>
                                            <div class='popular-caption'>
                                                <h3><?= $list_category3['name_product'] ?></h3>
                                                <span><del><?= $list_category3['price'] ?></del> &nbsp; <strong>$ <?= $list_category3['discount'] ?></strong> </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <!-- End Nav Card -->
            </div>
        </section>