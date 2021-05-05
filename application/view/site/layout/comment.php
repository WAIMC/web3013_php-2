<div class="card m-3">
    <div class="card-header">
        BÌNH LUẬN
    </div>
    <div class="card-body">
        <?php
        $comment = new comment;
        $customer = new user;
        if (isset($_POST['content'])) {
            $user = $_SESSION['user']['user_name'];
            $date = date_format(date_create(), 'Y-m-d');
            $comment->insert_comment($_POST['content'], $_GET['id_product'], $_SESSION['user']['user_name'], $date, $status = 0);
        }
        $id_product = isset($_GET['id_product']) ? $_GET['id_product'] : $post['id'];
        $list_comment = $comment->select_comment_by_product($id_product);
        foreach ($list_comment as $bl) {
            if($bl['status'] == 1){
            $user = $customer->select_user_by_id($bl['id_user']);
        ?>
            <div class="comments-area">
                <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src=" <?= PUBLIC_IMAGE ?>customer/<?= $user['image'] ?>" style="width:70px;height:70px;border-radius=50%;" alt="img-customer">
                            </div>
                            <div class="desc">
                                <p class="comment"><?= $bl['content'] ?></p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            <a href="#"><span style="color:#635c5c"><?= $user['full_name'] ?></span></a>
                                        </h5>
                                        <p class="date"><?= $bl['date'] ?></p>
                                    </div>
                                    <div class="reply-btn">
                                        <a href="#" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
            }
        }
        ?>
    </div>
    <div class="card-footer">
        <?php
        if (!isset($_SESSION['user'])) {
            echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
        } else {
        ?>
            <form action="<?= $_SERVER["REQUEST_URI"] ?>" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <div class="form-group">
                                <input type="text" class="form-control" name="content" id="" aria-describedby="helpId" placeholder="Viết bình luận ở đây !">
                            </div>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-primary">Gửi</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php
        }
        ?>
    </div>
</div>