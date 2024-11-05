<?php
    include "../model/pdo.php";
    include "header.php";
    include "../model/danhmuc.php";
    include "../model/taikhoan.php";
    include "../model/sanpham.php";
    include "../model/binhluan.php";
    
    //controler
    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                //  Caaph nhật danh mục
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm thành công";
                }

                include "danhmuc/add.php";
                break;
                // Xóa
            case 'lisdm':
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
                // Sửa
            case'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                $dm=loadone_danhmuc($_GET['id']);
                } 
                include "danhmuc/update.php";
                break;
                //Cập nhật
            case'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php";
                break;
                // controller sản phẩm
                case 'addsp':
                    // Thêm
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $giasp=$_POST['giasp'];
                        $mota=$_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir= "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            echo " Tệp " . htmlspecialchars(basename($_FILES ["hinh"] ["name"])). " đã được tải lên.";
                        }else {
                             echo "Không thế upload file";
                        }
                        
                        insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                        $thongbao="Thêm thành công";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    include "sanpham/add.php";
                    break;
                    // Xóa
                case 'lissp':
                    if(isset($_POST['listok'])&&($_POST['listok'])){
                        $kyw=$_POST['kyw'];
                        $iddm=$_POST['iddm'];

                    }else{
                        $kyw='';
                        $iddm=0;
                    }

                    $listdanhmuc=loadall_danhmuc();
                    $listsanpham=loadall_sanpham($kyw="",$iddm=0);
                    include "sanpham/list.php";
                    break;
                case'xoasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                    }
                    $listsanpham=loadall_sanpham('',0);
                    include "sanpham/list.php";
                    break;
                    // Sửa
                case'suasp':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham=loadone_sanpham($_GET['id']);
                    } 
                    $listdanhmuc=loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
                    //Cập nhật
                case'updatesp':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $id=$_POST['id'];
                        $iddm=$_POST['iddm'];
                        $tensp=$_POST['tensp'];
                        $giasp=$_POST['giasp'];
                        $mota=$_POST['mota'];
                        $hinh=$_FILES['hinh']['name'];
                        $target_dir= "../upload/";
                        $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                        if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                            echo " Tệp " . htmlspecialchars(basename($_FILES ["hinh"] ["name"])). " đã được tải lên.";
                        }else {
                             echo "Không thể upload file";
                        }
                        update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                        $thongbao="Cập nhật thành công";
                    }
                    $listdanhmuc=loadall_danhmuc();
                    $listsanpham=loadall_sanpham('',0);
                    include "sanpham/list.php";
                    break;
                case'dskh':
                    $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;
                case'dsbl':
                    $listbinhluan=loadall_binhluan(0);
                    include "binhluan/list_binhluan.php";
                    break; 
                case'xoabl':
                    
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_binhluan($_GET['id']);
                    }
                    $listbinhluan=loadall_binhluan("");
                    include "binhluan/list_binhluan.php";
                    break;
            default:
                include "home.php";
                break;
        }
    }else {
        include "home.php";
    }
        


    
    include "footer.php";
?>