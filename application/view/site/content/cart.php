<!--================Cart Area =================-->
<section class="cart_area section_padding">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Giá bán</th>
                            <th scope="col">Số Lượng</th>
                            <th scope="col">Toàn Bộ</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $mess_cart = "";
                        // delete session cart
                        if (isset($_GET['btn_delete'])) {
                            unset($_SESSION['cart'][$_GET['id_product']]);
                        }
                        // update session cart
                        if (isset($_POST['btn_update_cart'])) {
                            foreach ($_POST['qty'] as $key => $value) {
                                $_SESSION['cart'][$_POST['hh'][$key]]['qty'] = $value;
                            }
                        }
                        ?>
                        <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post" enctype="multipart/form-data">
                            <?php
                            $total = 0;
                            if (!isset($_SESSION['cart']) || $_SESSION['cart'] == null) {
                                echo "<h3>Không Có Sản Phẩm Trong Giỏ Hàng !</h3>";
                            } elseif (isset($_SESSION['cart']) || $_SESSION['cart'] != null) {
                                foreach ($_SESSION['cart'] as $key => $value) {
                                    if ($key != 0 && $value['qty'] > 0) {
                                        $list = $product->select_product_by_id($key);
                                        echo "
                  <tr>
                    <td>
                      <div class='media'>
                        <div class='d-flex'>
                          <img src='" . PUBLIC_IMAGE . "products/" . $list['image'] . "' alt='' />
                        </div>
                        <div class='media-body'>
                          <p>" . $list['name_product'] . "</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h5>$" . $list['discount'] . "</h5>
                    </td>
                    <td>
                      <div class='product_count'>
                        <input class='input-number' type='number' name='qty[]' value='" . $value['qty'] . "' min='1' max='5'>
                      </div>
                    </td>
                    <td>
                      <h5>$" . $list['discount'] * $_SESSION['cart'][$list['id']]['qty'] . "</h5>
                    </td>
                    <td>
                    <input value='" . $list['id'] . "' name='hh[]' type='hidden'>
                    <button type='submit' name='btn_update_cart' class='btn_1'>
                    <span class='icon text-white-5'>
                      <i class='fas fa-check'></i>
                    </span>
                    <span class='text'>SỬA</span>
                  </button>
                    </td>
                    <td>
                    <a href='?act=cart&btn_delete&id_product=" . $list['id'] . "' class='btn_1'>
                    <span class='icon text-white-5'>
                      <i class='fas fa-check'></i>
                    </span>
                    <span class='text'>XÓA</span>
                  </a>
                    </td>
                  </tr>";
                                        $total += $list['discount'] * $_SESSION['cart'][$list['id']]['qty'];
                                    }
                                }
                            }
                            ?>
                        </form>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <h4>Tổng</h4>
                            </td>
                            <td>
                                <h4>$<?= $total ?></h4>
                            </td>
                        </tr>
                        <tr class="shipping_area">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Phí CHuyển Hàng</h5>
                            </td>
                            <td>
                                <div class="shipping_box">
                                    <ul class="list">
                                        <li>
                                            Flat Rate: $5.00
                                            <input type="radio" aria-label="Radio button for following text input">
                                        </li>
                                        <li>
                                            Free Shipping
                                            <input type="radio" aria-label="Radio button for following text input">
                                        </li>
                                        <li>
                                            Flat Rate: $10.00
                                            <input type="radio" aria-label="Radio button for following text input">
                                        </li>
                                        <li class="active">
                                            Local Delivery: $2.00
                                            <input type="radio" aria-label="Radio button for following text input">
                                        </li>
                                    </ul>
                                    <input class="post_code" type="text" disabled placeholder="Postcode/Zipcode" />
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="checkout_btn_inner float-right">
                    <a class="btn_1" href="?act=shop">Tiếp Tục Mua Hàng</a>
                    <a class="btn_1 checkout_btn_1" href="?act=check_invoices">Tiến Hành Kiểm Tra</a>
                </div>
            </div>
        </div>
</section>
<!--================End Cart Area =================-->