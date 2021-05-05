<div class="container">
    <h3 class="text-center"><strong>TOP 5 YÊU THÍCH</strong></h3>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php
                $product = new product;
                $list_product_five = $product->select_top_five_product();
                foreach ($list_product_five as $list) {
                ?>
                    <li class="nav-item active">
                        <div class="single-popular-items mb-50 text-center">
                            <div class="popular-img">
                                <img src=" <?= PUBLIC_IMAGE ?>products/<?= $list['image'] ?>" width="50%" alt="">
                            </div>
                            <div class="popular-caption">
                                <h5><a href="?act=product_detail&id_product=<?= $list['id'] ?>"><span style="color:black"><?= $list['name_product'] ?></span></a></h5>
                                <span> <del>$<?= $list['price'] ?></del> &nbsp; <strong>$<?= $list['discount'] ?></strong> </span>
                            </div>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </nav>
</div>