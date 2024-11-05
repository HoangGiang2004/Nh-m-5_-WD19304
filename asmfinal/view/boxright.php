<div class="row mb">
                    <div class="boxtitle"> TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                        ?>
                            <div class="row mb10">
                                Xin chào<br>
                                <?=$user?>
                            </div>
                            <div class="row mb10">
                                 <li> 
                                     <a href="index.php?act=quenmk"> Quên mật khẩu</a>
                                </li>
                                <li> 
                                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                </li>
                                <?php if($role==1){?>
                                <li> 
                                    <a href="admin/index.php">Đăng nhập Admin</a>
                                </li>
                                <?php }?>
                                <li> 
                                    <a href="index.php?act=thoat">Thoát</a>
                                </li>
                            </div>

                          <?php  }else{
   
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
                        <?php }?>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle"> Danh Mục</div>
                    <div class="boxcontent2 menudoc">
                      <ul>
                          <?php
                            foreach ($dsdm as $dm) {
                                extract($dm);
                                $linkdm="index.php?act=sanpham&iddm=".$id;
                                echo '<li>
                                            <a href="'.$linkdm.'"> '.$name.'</a>
                                    </li>';
                            }
                          ?>
                            <!-- 
                            <li>
                                <a href="#"> Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#"> LabTop</a>
                            </li>
                            <li>
                                <a href="#"> Điện Thoại</a>
                            </li>
                            <li>
                                <a href="#">BaLo</a>
                            </li>
                            <li>
                                <a href="#"> Thời trang</a>
                            </li>
                            <li>
                                <a href="#">Trang Sức</a>
                            </li>
                            <li>
                                <a href="#"> Nước Hoa</a>
                            </li>
                            <li>
                                <a href="#"> Máy Ảnh</a>
                            </li> -->
                        </ul> 
                    </div>
                    <div class="boxfooter searbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw" >
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row mb ">
                    <div class="boxtitle"> TOP 10</div>
                    <div class=" row boxcontent">
                            <?php 
                                foreach ($dstop10 as $sp) {
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $img=$img_path.$img;
                                echo'<div class="row mb10 top10">
                                            <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                            <a href="'.$linksp.'"> '.$name.' </a>
                                        </div>';
                                }
                            ?>
                         <!--  <div class="row mb10 top10">
                                    <img src="view/images/1.jpg" alt="">
                                    <a href="#">CJ C3079 Men's Watch </a>
                            </div>
                        <div class="row mb10 top10">
                            <img src="view/images/maytinh.jpg" alt="">
                            <a href="#"> Macbook computer </a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/dogiandung.jpg" alt="">
                            <a href="#">Household appliances </a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/non.jpg" alt="">
                            <a href="#">Men's hats </a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/mypham.jpg" alt="">
                            <a href="#">Cosmetics for women </a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/trangsuc.jpg" alt="">
                            <a href="#">Women's jewelry </a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/cay.jpg" alt="">
                            <a href="#">Computer tree </a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/images/balo.jpg" alt="">
                            <a href="#"> Backpack </a>
                        </div> -->

                    </div>
                </div>