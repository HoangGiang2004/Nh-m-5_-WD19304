<div class="row mb ">
            <div class="boxtrai mr  ">
                <div class="row">
                    <div class="banner">
                           <!-- Slideshow container -->
                        <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <img src="view/images/banner1.jpg" style="width:50%">
                        </div>

                        <div class="mySlides fade">
                        <img src="view/images/banner2.jpg" style="width:50%">
                        </div>

                        <div class="mySlides fade">
                        <img src="view/images/banner3.jpg" style="width:50%">
                        </div>

                        <!-- Next and previous buttons -->
                        
                        </div>
                        <br>

                        <!-- The dots/circles -->
                       
                    </div>
                </div>
                <div class="row">
                    <?php 
                    $i=0;
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id;
                            $hinh = $img_path.$img;
                            if(($i==2)||($i==5)||($i==8)){
                                $mr="";
                            }else{
                                $mr="mr";
                            }
                            echo ' <div class="boxsp '.$mr.'">
                                    <div class="row img"><a href="'.$linksp.'"><img src="'.$hinh.'" alt=""></a></div>
                                    <p class="p">$'.$price.'</p>
                                    <a href="'.$linksp.'">'.$name.'</a>
                                    <div class="row btnaddtocart">
                                    <form action="index.php?act=addtocart" method="post"> 
                                        <input type="hidden" name="id" value="'.$id.'">
                                        <input type="hidden" name="name" value="'.$name.'">
                                        <input type="hidden" name="img" value="'.$img.'">
                                        <input type="hidden" name="price" value="'.$price.'">
                                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                    </form>
                                    </div>
                                    </div>';
                             $i+=1;
                                }
                    ?>
                     <!-- <div class="boxsp mr">
                        <div class="row img"><img src="view/images/1.jpg" alt=""></div>
                        <p class="p">$30</p>
                        <a href="#">CJ C3079 Men's Watch </a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/dien thoai.jpg" alt=""></div>
                        <p class="p">$2000</p>
                        <a href="#">Iphone 12 promax</a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="view/images/Luattamthuc.webp" alt=""></div>
                        <p class="p">$10</p>
                        <a href="#">Book of the law of mind </a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/laptopdeell.webp" alt=""></div>
                        <p class="p">$1200</p>
                        <a href="#">Laptop Dell Gaming G3 3500 G3500Cw(Core i7-107...) </a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/nonnam.jpg" alt=""></div>
                        <p class="p">$5</p>
                        <a href="#">Men's hat, cap </a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="view/images/balo1.jpg" alt=""></div>
                        <p class="p">$130</p>
                        <a href="#">New generation Compacto anti-theft backpack – Mark Ryden </a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/case.jpg" alt=""></div>
                        <p class="p">$120</p>
                        <a href="#">High configuration desktop case </a>
                    </div>
                    <div class="boxsp mr">
                        <div class="row img"><img src="view/images/rolex.jpg" alt=""></div>
                        <p class="p">$56000</p>
                        <a href="#">Rolex men's watch </a>
                    </div>
                    <div class="boxsp ">
                        <div class="row img"><img src="view/images/ao.jpg" alt=""></div>
                        <p class="p">$87</p>
                        <a href="#">Kappa men's wind jacket K0B12FJ01 990 </a>
                    </div>-->
                </div> 
            </div>
            <div class="boxphai ">
            <?php
                    include "boxright.php";
                ?>
            </div>
</div>