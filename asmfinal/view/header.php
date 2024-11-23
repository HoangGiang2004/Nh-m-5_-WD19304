<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dự án nhóm 5 </title>
    <link rel="stylesheet" href="view/css/slyte.css">
    <style>
        .horizontal-menu {
            list-style-type: none;
            /* Loại bỏ dấu chấm đầu dòng */
            padding: 0;
            /* Loại bỏ khoảng cách thừa */
            margin: 0;
            /* Loại bỏ khoảng cách thừa */
            display: flex;
            /* Hiển thị các mục trên cùng một hàng */
            justify-content: center;
            /* Căn giữa các mục (tuỳ chọn) */
            align-items: center;
        }

        .horizontal-menu li {
            margin: 0 15px;
            /* Tạo khoảng cách giữa các mục */
        }

        .horizontal-menu a {
            text-decoration: none;
            /* Loại bỏ gạch chân */
            color: white;
            /* Màu chữ */
            font-size: 16px;
            /* Kích thước chữ */
            font-weight: bold;
            /* Chữ đậm */
            transition: color 0.3s;
            /* Hiệu ứng đổi màu khi hover */
        }

        .horizontal-menu a:hover {
            color: #007BFF;
            /* Đổi màu khi hover (tuỳ chọn) */
        }





        .boxfooter.searbox {
            float: right;
            /* Đặt khung ở phía bên phải */
            width: 400px;
            /* Độ rộng tổng thể */
            background-color: black;
            /* Màu nền */
            margin-left: 200px;
            border-radius: 8px;
            /* Bo góc */
            display: flex;
            /* Sắp xếp các phần tử ngang hàng */
            justify-content: space-between;
            /* Căn đều giữa các phần tử */
            align-items: center;
            /* Căn giữa theo chiều dọc */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            /* Hiệu ứng đổ bóng */
        }

        .boxfooter.searbox form {
            display: flex;
            /* Đảm bảo các phần tử bên trong form hiển thị ngang hàng */
            width: 100%;
        }

        .boxfooter.searbox input[type="text"] {
            flex: 1;
            /* Trường nhập chiếm phần lớn không gian */
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
            /* Khoảng cách với nút tìm kiếm */
            font-size: 14px;
        }

        .boxfooter.searbox input[type="submit"] {
            padding: 5px 15px;
            background-color: #a4a6a7;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .boxfooter.searbox input[type="submit"]:hover {
            background-color: #696969;
        }
        .danhmuc{
            background-color: #000;
            border: 2px solid #fff;
        }

        .danhmuc ul {
            list-style-type: none;
            /* Bỏ dấu chấm đầu dòng */
            padding: 0;
            margin: 0;
            display: flex;
            /* Hiển thị các mục trong một dòng ngang */
            justify-content: space-around;
            /* Căn đều khoảng cách giữa các mục */
        }

        .danhmuc ul li {
            margin: 0 10px;
            /* Khoảng cách giữa các mục */
        }

        .danhmuc ul li a {
            text-decoration: none;
            /* Bỏ gạch chân liên kết */
            color: white;
            /* Màu chữ ban đầu */
            font-size: 16px;
            /* Kích thước chữ */
            padding: 10px 15px;
            /* Tạo khoảng trống trong liên kết */
            display: inline-block;
            /* Đảm bảo kích thước của liên kết */
            transition: all 0.3s;
            /* Hiệu ứng mượt mà */
            border: 2px solid transparent;
            /* Khung ban đầu không nhìn thấy */
            background-color: transparent;
            /* Nền ban đầu trong suốt */
        }

        .danhmuc ul li a:hover {
            border: 2px solid #000;
            /* Viền màu đen khi hover */
            background-color: white;
            /* Nền màu đen khi hover */
            color: black;
            /* Chữ trắng khi hover */
            transition: all 0.3s;
            /* Hiệu ứng chuyển đổi */
            border-radius: 10px;
        }
    </style>

</head>

<body class="di">
    <div class="boxcenter">
        <div class="row mb header">
            <h4>Táo Store Shop bán điện thoại uy tín chất lượng - Tel : 0816.919191</h4>
        </div>
        <div class="row mb menu" style="display: flex; height: 100px;">
            <div class="logo">
                <img src="./images/logo.svg" style="background-color: aliceblue;" alt="">

            </div>

            <ul class="horizontal-menu">
                <li><a href="index.php"> Trang chủ</a></li>
                <li><a href="index.php?act=gioithieu"> Giới thiệu</a></li>
                <li><a href="index.php?act=lienhe"> Liên hệ</a></li>
                <li><a href="index.php?act=gopy"> Góp ý</a></li>
                <li><a href="index.php?act=hoidap"> Hỏi đáp</a></li>
            </ul>

            <div class="boxfooter searbox">
                <form action="index.php?act=sanpham" method="post">
                    <input type="text" name="kyw">
                    <input type="submit" name="timkiem" value="Tìm kiếm">
                </form>
            </div>

        </div>
        <div class="row mb">


            <div class="danhmuc">
                <ul>
                    <?php
                    $dsdm = loadall_danhmuc();
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                        echo '<li>
                                            <a href="' . $linkdm . '"> ' . $name . '</a>
                                    </li>';
                    }
                    ?>


                </ul>
            </div>



        </div>
    </div>