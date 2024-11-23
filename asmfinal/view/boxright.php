<!-- <div class="row mb">
                    <div class="boxtitle"> TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                        if (isset($_SESSION['user'])) {
                            extract($_SESSION['user']);
                        ?>
                            <div class="row mb10">
                                Xin chào<br>
                                <?= $user ?>
                            </div>
                            <div class="row mb10">
                                 <li> 
                                     <a href="index.php?act=quenmk"> Quên mật khẩu</a>
                                </li>
                                <li> 
                                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                </li>
                                <?php if ($role == 1) { ?>
                                <li> 
                                    <a href="admin/index.php">Đăng nhập Admin</a>
                                </li>
                                <?php } ?>
                                <li> 
                                    <a href="index.php?act=thoat">Thoát</a>
                                </li>
                            </div>

                          <?php  } else {

                            ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                Tên đăng nhập <br>
                                <input type="text" name="user" >
                            </div>
                            <div class="row mb10">
                                Mật Khẩu <br>
                                <input type="password" name="pass" >
                            </div>

                            <div class="row mb10">
                                <input type="checkbox" name="" > Ghi nhớ tài khoản ?
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                        <li> <a href="#"> Quên mật khẩu</a>
                        </li>
                        <li> <a href="index.php?act=dangky"> Đăng ký thành viên</a>
                        </li>
                        <?php } ?>
                    </div>
                </div> -->


<!-- </div> -->

<style>
    /* Tiêu đề Top 10 */
    .boxtitle {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        text-align: left;
        margin-bottom: 20px;
        padding: 10px 0;
        border-left: 5px solid #ff5722;
        margin-left: 40px;
    }

    /* Nội dung Top 10 */
    .boxcontent {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 42px;
    }

    /* Hộp sản phẩm Top 10 */
    .top10 {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .top10:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    /* Hình ảnh sản phẩm */
    .top10 img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    /* Tên sản phẩm */
    .top10 a {
        display: block;
        font-size: 14px;
        font-weight: bold;
        color: #333;
        text-decoration: none;
        margin-bottom: 5px;
        transition: color 0.3s;
    }

    .top10 a:hover {
        color: #ff5722;
    }

    /* Phần giá sản phẩm */
    .top10 .price {
        font-size: 16px;
        color: #ff5722;
        font-weight: bold;
    }
</style>
<div class="row mb ">
    <div class="boxtitle"> Top các sản phẩm bán chạy</div>
    <div class=" row boxcontent">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $img = $img_path . $img;
            echo '<div class="row mb10 top10">
                                            <a href="' . $linksp . '"><img src="' . $img . '" alt=""></a>
                                            <a href="' . $linksp . '"> ' . $name . ' </a>
                                        </div>';
        }
        ?>


    </div>
</div>