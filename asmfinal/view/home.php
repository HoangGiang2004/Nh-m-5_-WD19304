<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án nhóm 5</title>
    <link rel="stylesheet" href="view/css/slyte.css">
    <style>
        .slideshow-container {
            position: relative;
            max-width: 100%;
            margin: auto;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .mySlides {
            display: none;
        }

        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        /* .active, */
        .dot:hover {
            background-color: #717171;
        }

        .banner {
            background-color: black;
            padding: 20px;

        }

        .banner {
            min-height: 283px;
            width: 100%;
            text-align: center;
        }

        
    </style>
</head>

<body>
    <div class="row">
        <div class="banner">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="https://bizweb.dktcdn.net/100/116/615/themes/845901/assets/slider_1.jpg?1730392444328" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://bizweb.dktcdn.net/100/116/615/themes/845901/assets/slider_2.jpg?1730392444328" style="width:100%">
                </div>

                <div class="mySlides fade">
                    <img src="https://bizweb.dktcdn.net/100/116/615/themes/845901/assets/slider_1.jpg?1730392444328" style="width:100%">
                </div>
            </div>
            <br>
        </div>
    </div>

</body>

</html>


<style>
    /* Thiết lập chung cho danh sách sản phẩm */
    .row1 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        padding: 118px;
        gap: 25px;
        margin: -80px 27px;
        justify-items: center;
        margin-top: -100px;
    }

    /* Hộp chứa sản phẩm */
    .boxsp {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        background-color: #fff;
    }

    /* Hình ảnh sản phẩm */
    .boxsp .img img {
        width: 100%;
        height: auto;
        max-height: 200px;
        object-fit: cover;
        border-radius: 8px;
    }

    /* .mr {
        margin-right: -10px;
    } */

    .boxsp {
        width: 360px;
    }

    .boxsp .img {
        min-width: 300px;
        min-height: 249px;
        text-align: center;

    }

    /* Tên sản phẩm */
    .boxsp a {
        display: block;
        margin: 10px 0;
        font-size: 16px;
        font-weight: 600;
        color: #333;
        text-decoration: none;
    }

    /* Giá sản phẩm */
    .boxsp p {
        color: #f44336;
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 10px;
    }

    /* Nút thêm vào giỏ hàng */
    .btnaddtocart {
        margin-top: 10px;
    }

    .btnaddtocart input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btnaddtocart input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>


<div>

    <h3 class=" Product"  style="font-size: 30px;"> SẢN PHẨM MỚI</h3>
    <div class="row1">

        <?php
        $i = 0;
        foreach ($spnew as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $hinh = $img_path . $img;
            if (($i == 2) || ($i == 5) || ($i == 8)) {
                $mr = "";
            } else {
                $mr = "mr";
            }
            echo ' <div class="boxsp ' . $mr . '">
                                    <div class="row img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                                    <p class="p">$' . $price . '</p>
                                    <a href="' . $linksp . '">' . $name . '</a>
                                    <div class="row btnaddtocart">
                                    <form action="index.php?act=addtocart" method="post"> 
                                        <input type="hidden" name="id" value="' . $id . '">
                                        <input type="hidden" name="name" value="' . $name . '">
                                        <input type="hidden" name="img" value="' . $img . '">
                                        <input type="hidden" name="price" value="' . $price . '">
                                        <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                    </form>
                                    </div>
                                    </div>';
            $i += 1;
        }
        ?>

    </div>
</div>

<div class="boxphai ">
    <?php
    include "boxright.php";
    ?>
</div>
</div>