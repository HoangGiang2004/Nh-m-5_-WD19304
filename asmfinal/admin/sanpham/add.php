<div class="row">
            <div class="row header formtitle">
                <H1>THÊM MỚI SẢN PHẨM</H1>
            </div>
            <div class="row fromcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">Danh mục<BR>
                    <select name="iddm" >
                        <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>

                    </select>
                        <input type="text" name="malsp">
                    </div>
                    <div class="row mb10">
                        Tên Sản Phẩm<BR>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row mb10">
                        Giá<BR>
                        <input type="text" name="giasp">
                    </div>
                    <div class="row mb10">
                        Hình<BR>
                        <input type="file" name="hinh" >
                    </div>
                    <div class="row mb10">
                        Mô tả
                        <BR>
                        <textarea name="mota" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row m10">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=lissp"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>