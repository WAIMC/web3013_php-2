 <!--================Checkout Area =================-->
 <section class="checkout_area section_padding">
   <div class="container">
     <?php
      if (!isset($_SESSION['user'])) {
      ?>
       <div class="returning_customer">
         <div class="check_title">
           <h2>
             Bạn Cần Đăng Nhập Để Thanh Toán !
             <a href="?act=login">Nhấp để đăng nhập </a>
           </h2>
         </div>
         <p>
           Nếu bạn đã mua sắm với chúng tôi trước đây, vui lòng nhập thông tin chi tiết
           của bạn vào ô bên dưới. Nếu bạn là khách hàng mới, vui lòng chuyển sang phần Lập hóa đơn & Giao hàng.
         </p>
       </div>
       <div class="cupon_area">
         <div class="check_title">
           <h2>
             Có phiếu giảm giá?
             <a href="#">Bấm vào đây để nhập mã của bạn</a>
           </h2>
         </div>
         <input type="text" disabled placeholder="Enter coupon code" />
         <a class="tp_btn" href="#">Áp dụng phiếu giảm giá</a>
       </div>
     <?php
      } else {
        $list = $user_obj->select_user_by_id($_SESSION['user']['user_name']);
      ?>
       <form action="<?= $_SERVER["REQUEST_URI"] ?>" name="formName" method="post" novalidate="novalidate">
         <div class="billing_details">
           <div class="row">
             <div class="col-lg-8">
               <h3>Chi tiết thanh toán</h3>
               <div class="row contact_form">
                 <div class="col-md-6 form-group p_star">
                   <input type="text" class="form-control" id="first" name="user_name" value="<?= $list['user_name'] ?>" placeholder="Mã Khách Hàng" />
                 </div>
                 <div class="col-md-6 form-group p_star">
                   <input type="text" class="form-control" id="last" name="full_name" value="<?= $list['full_name'] ?>" placeholder="Họ Và Tên" />
                 </div>
                 <div class="col-md-12 form-group">
                   <input type="text" class="form-control" id="company" name="address" value="<?= $list['address'] ?>" placeholder="Địa Chỉ" />
                 </div>
                 <div class="col-md-6 form-group p_star">
                   <input type="text" class="form-control" id="number" name="phone" value="<?= $list['phone'] ?>" placeholder="Số Điện Thoại" />
                 </div>
                 <div class="col-md-6 form-group p_star">
                   <input type="text" class="form-control" id="email" name="email" value="<?= $list['email'] ?>" placeholder="Đia Chỉ Email" />
                 </div>
                 <div class="col-md-12 form-group">
                   <input type="text" class="form-control" id="zip" name="zip" placeholder="Mã bưu / Zip" disabled />
                 </div>
                 <div class="col-md-12 form-group">
                   <div class="creat_account">
                     <h3>Chi tiết vận chuyển</h3>
                     <!-- <input type="checkbox" id="f-option3" name="selector" />
                     <label for="f-option3">Gửi đến một địa chỉ khác?</label> -->
                   </div>
                   <!-- <textarea class="form-control" name="ghi_chu" id="message" rows="1" placeholder="Ghi chú đơn hàng"></textarea> -->
                 </div>
               </div>
             </div>
             <div class="col-lg-4">
               <div class="order_box">
                 <h2>Đơn hàng của bạn</h2>
                 <ul class="list">
                   <li>
                     <div class="row" style="border-bottom: 1px solid #dddddd;text-transform: uppercase;color: #415094;font-weight: 500;">
                       <div class="col-6"><b>Sản Phẩm</b></div>
                       <div class="col-3"><b>Số Lượng</b></div>
                       <div class="col-3"><b>Toàn Bộ</b></div>
                     </div>
                   </li>
                   <?php
                    $subtotal = 0;
                    if (isset($_SESSION['cart'])) {
                      foreach ($_SESSION['cart'] as $key => $value) {
                        if ($key != 0 && $_SESSION['cart'][$key]['qty'] >= 1) {
                          $item = $product->select_product_by_id($key);
                    ?>
                         <li>
                           <div class="row" style="border-bottom: 1px solid #dddddd;text-transform: uppercase;color: #828bb2;font-weight: normal;opacity:80%;line-height: 42px;">
                             <div class="col-6"><i><?= $item['name_product'] ?></i></div>
                             <div class="col-3"><i>x<?= $_SESSION['cart'][$key]['qty'] ?></i></div>
                             <div class="col-3"><i>$<?= $item['discount'] * $_SESSION['cart'][$key]['qty'] ?></i></div>
                           </div>
                         </li>
                   <?php
                          $subtotal += $item['discount'] * $_SESSION['cart'][$key]['qty'];
                        }
                      }
                    }
                    ?>
                 </ul>
                 <ul class="list list_2">
                   <li>
                     <div class="row" style="border-bottom: 1px solid #dddddd;text-transform: uppercase;color: #415094;font-weight: 500;line-height: 42px;">
                       <div class="col-9">
                         Tổng Cộng
                       </div>
                       <div class="col-3">
                         <span>$<?= $subtotal ?></span>
                       </div>
                     </div>
                   </li>
                   <li>
                     <a href="#">Phí Ship
                       <span>Flat rate: $50.00</span>
                     </a>
                   </li>
                   <li>
                     <div class="row" style="border-bottom: 1px solid #dddddd;text-transform: uppercase;color: #415094;font-weight: 500;line-height: 42px;">
                       <div class="col-9">
                         Tổng Tất Cả
                       </div>
                       <div class="col-3">
                         <span>$<?= $subtotal + 50 ?></span>
                       </div>
                     </div>
                   </li>
                 </ul>
                 <div class="payment_item">
                   <!-- <div class="radion_btn">
                     <input type="radio" id="f-option5" name="selector" />
                     <label for="f-option5">Kiểm tra thanh toán</label>
                     <div class="check"></div>
                   </div> -->
                   <p>
                     Vui lòng gửi séc đến Tên cửa hàng, Phố cửa hàng, Thị trấn cửa hàng,
                     Lưu trữ Tiểu bang / Quận, Lưu trữ Mã bưu điện.
                   </p>
                 </div>
                 <div class="payment_item active">
                   <!-- <div class="radion_btn">
                     <input type="radio" id="f-option6" name="selector" />
                     <label for="f-option6">Paypal </label>
                     <img src="img/product/single-product/card.jpg" alt="" />
                     <div class="check"></div>
                   </div> -->
                   <p>
                     Vui lòng gửi séc đến Tên cửa hàng, Phố cửa hàng, Thị trấn cửa hàng,
                     Lưu trữ Tiểu bang / Quận, Lưu trữ Mã bưu điện.
                   </p>
                 </div>
                 <!-- <div class="creat_account">
                   <input type="checkbox" id="f-option4" onchange="document.getElementById('formName').submit()" name="selector" />
                   <label for="f-option4">Tôi đã đọc và chấp nhận</label>
                   <a href="#">Điều khoản và điều kiện*</a>
                 </div> -->
                 <button type="submit" class="btn_3" onclick="return confirm('Are you sure you want to order this item ?');" name='btn_insert' style="width:100%;">Thanh Toán</button>
               </div>
             </div>
           </div>
         </div>
       </form>
     <?php
        if (isset($_POST['btn_insert'])) {
          $date = date_format(date_create(), 'Y-m-d H:i:s');
          if (isset($_SESSION['cart'])) {
            try {
              $invoices->insert_invoices($_SESSION['user']['user_name'],$_SESSION['user']['phone'],$_SESSION['user']['address'],$note = 0);
              $orderID = $invoices->get_last_id();
              foreach ($_SESSION['cart'] as $key => $val) {
                if ($key != 0 && $_SESSION['cart'][$key]['qty'] >= 1) {
                  $item = $product->select_product_by_id($key);
                  $invoices_detail->insert_invoices_detail($orderID, $key, $item['discount'], $date, $_SESSION['cart'][$key]['qty'], $status = 0);
                }
              }
              unset($_SESSION['cart']);
              $notify = "Thanh Toán Thành Công, hàng hóa sẽ được giao sớm nhất là năm sau !";
            } catch (Exception $e) {
              $notify = "Thanh Toán Thất Bại !";
            }
          } else {
            $notify = " Hãy Thêm Hàng Vào Giỏ !";
          }
        }
      }
      if (isset($notify)) {
        echo "<h2 class='alert alert-warning text-center'>" . $notify . "</h2>";
      }
      ?>
   </div>
 </section>

 <!--================End Checkout Area =================-->