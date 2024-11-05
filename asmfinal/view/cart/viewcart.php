<div class="row mb">
    <div class="boxtrai mr ">
    <div class="row mb ">
        <div class="boxtitle ">GIỎ HÀNG</div>
        <div class=" row boxcontent">
            <table>
                <tr>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                </tr>
                <?php 
                    $tong=0;
                    $i=0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh=$img_path.$cart[2];
                        $thanhtien=$cart[3] * $cart[4];
                        $tong+=$thanhtien;
                        $delsp='<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa" ></a>';
                       echo '<tr>
                                    <td><img src="'.$hinh.'" alt="" height="80px"></td>
                                    <td>'.$cart[1].'</td>
                                    <td>'.$cart[3].'</td>
                                    <td>'.$cart[4].'</td>
                                    <td>'.$thanhtien.'</td>
                                    <td>'.$delsp.'</td>
                            </tr>';
                        $i+=1;
                    }
                    echo '<tr>
                            <td colspan="4">Tổng đơn hàng</td>
                           
                            <td>'.$tong.'</td>
                            <td></td>
                        </tr>';
                ?>
                <!-- <tr>
                    <td>1</td>
                    <td><img src="images/balo.jpg" alt="" height="80px"></td>
                    <td>Balo</td>
                    <td>50</td>
                    <td>2</td>
                    <td>50$</td>
                    <td><input type="button" value="Xóa" ></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="images/balo1.jpg" alt="" height="80px"></td>
                    <td>Balo</td>
                    <td>50</td>
                    <td>2</td>
                    <td>50$</td>
                    <td><input type="button" value="Xóa" ></td>
                </tr> -->
            </table>
        </div>
    </div>
    <div class="row mb ">
            <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG"> <a href="index.php?act=decart"><input type="button" value="XÓA GIỎ HÀNG"></a>
    </div>
    </div>
    
    <div class="boxphai ">
            <?php include "view/boxright.php";?>
            </div>
</div>