<?php 
    if(is_array($sanpham)){
        extract($sanpham);
    }
        $hinhpath="../upload/".$img;
        if(is_file($hinhpath)){
            $hinh = "<img src='".$hinhpath."' height='100'>";
        }else{ 
            $hinh="no photo";
        }
?>

<div class="row">
            <div class="row header formtitle">
                <H1>CẬP NHẬT LOẠI HÀNG</H1>
            </div>
            <div class="row fromcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10"> 
                    <select name="iddm" >
                        <option value="0" selected> Tất cả </option>
                        <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                //extract($danhmuc);
                                if($danhmuc['id']==$id) $s="selected"; else $s="";
                                echo '<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option>';
                            }
                        ?>

                    </select>
                        Mã sản phẩm<BR>
                        <input type="text" name="malsp">
                    </div>
                    <div class="row mb10">
                        Tên Sản Phẩm
                        <BR>
                        <input type="text" name="tensp" value="<?=$name?>">
                    </div>
                    <div class="row mb10">
                        Giá
                        <BR>
                        <input type="text" name="giasp" value="<?=$price?>">
                    </div>
                    <div class="row mb10">
                        Hình
                        <BR>
                        <input type="file" name="hinh" >
                        <?=$hinh?>
                    </div>
                    <div class="row mb10">
                        Mô tả
                        <BR>
                        <textarea name="mota" cols="30" rows="10"><?=$mota?></textarea>
                    </div>
                    <div class="row m10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="capnhat" value="Cập Nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=lissp"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>