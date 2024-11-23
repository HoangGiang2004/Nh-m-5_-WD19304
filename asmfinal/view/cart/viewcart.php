<style>
    /* Định dạng chung cho bảng */
    .table_tab table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    /* Định dạng cho tiêu đề bảng (th) */
    .table_tab th {
        background-color: #f4f4f4;
        /* Màu nền tiêu đề */
        color: #333;
        /* Màu chữ */
        font-weight: bold;
        /* Chữ đậm */
        padding: 10px 15px;
        /* Khoảng cách bên trong ô */
        text-align: center;
        /* Căn giữa nội dung */
        border: 1px solid #ddd;
        /* Viền ô */
        white-space: nowrap;
        /* Không cho nội dung xuống hàng */
    }

    /* Định dạng cho các ô dữ liệu (td) */
    .table_tab td {
        padding: 10px 15px;
        /* Khoảng cách bên trong ô */
        text-align: center;
        /* Căn giữa nội dung */
        border: 1px solid #ddd;
        /* Viền ô */
        color: #555;
        /* Màu chữ */
        white-space: nowrap;
        /* Không cho nội dung xuống hàng */
    }

    /* Hiệu ứng hover cho hàng (tr) */
    .table_tab tr:hover td {
        background-color: #f0f8ff;
        /* Màu nền khi hover */
        transition: background-color 0.3s ease;
        /* Hiệu ứng mượt */
    }

    /* Định dạng hình ảnh trong ô */
    .table_tab td img {
        max-height: 80px;
        /* Chiều cao tối đa của hình ảnh */
        max-width: 100px;
        /* Chiều rộng tối đa của hình ảnh */
        object-fit: cover;
        /* Đảm bảo hình ảnh không bị méo */
    }

    /* Tùy chỉnh ô Tổng đơn hàng */
    .table_tab tr:last-child td {
        font-weight: bold;
        /* Chữ đậm */
        background-color: #ffefc1;
        /* Màu nền nổi bật */
        color: #333;
        /* Màu chữ */
    }

    /*  */
    /* Định dạng container chứa nút */
    .crum_der {
        display: flex;
        /* Sắp xếp các phần tử theo hàng ngang */
        justify-content: flex-end;
        /* Căn về phía bên phải */
        align-items: center;
        /* Căn giữa theo chiều dọc */
        gap: 10px;
        /* Khoảng cách giữa các nút */
        margin-top: 20px;
        /* Khoảng cách trên */
        padding: 10px;
        /* Khoảng cách trong container */
        background-color: #f9f9f9;
        /* Màu nền nhẹ */
        border-top: 1px solid #ddd;
        /* Đường viền phía trên */
    }

    /* Định dạng cho các nút */
    .crum_der input[type="submit"],
    .crum_der input[type="button"] {
        background-color: #007bff;
        /* Màu nền xanh dương */
        color: white;
        /* Màu chữ trắng */
        border: none;
        /* Bỏ viền */
        padding: 10px 20px;
        /* Khoảng cách bên trong */
        font-size: 16px;
        /* Kích thước chữ */
        cursor: pointer;
        /* Con trỏ dạng tay khi hover */
        border-radius: 5px;
        /* Bo tròn các góc */
        transition: background-color 0.3s ease, transform 0.2s;
        /* Hiệu ứng khi hover */
    }

    /* Hiệu ứng hover cho các nút */
    .crum_der input[type="submit"]:hover,
    .crum_der input[type="button"]:hover {
        background-color: #0056b3;
        /* Màu nền khi hover */
        transform: scale(1.05);
        /* Phóng to nhẹ khi hover */
    }

    /* Định dạng cho liên kết bọc nút */
    .crum_der a {
        text-decoration: none;
        /* Bỏ gạch chân */
    }
</style>
<div class="row mb">
    <div class="boxtrai mr ">
        <div class="row mb ">
            <div class="boxtitle ">GIỎ HÀNG</div>
            <div class=" row boxcontent table_tab">
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
                    $tong = 0;
                    $i = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh = $img_path . $cart[2];
                        $thanhtien = $cart[3] * $cart[4];
                        $tong += $thanhtien;
                        $delsp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa" ></a>';
                        echo '<tr>
                                    <td><img src="' . $hinh . '" alt="" height="80px"></td>
                                    <td>' . $cart[1] . '</td>
                                    <td>' . $cart[3] . '</td>
                                    <td>' . $cart[4] . '</td>
                                    <td>' . $thanhtien . '</td>
                                    <td>' . $delsp . '</td>
                            </tr>';
                        $i += 1;
                    }
                    echo '<tr>
                            <td colspan="4">Tổng đơn hàng</td>
                           
                            <td>' . $tong . '</td>
                            <td></td>
                        </tr>';
                    ?>


                </table>
            </div>
        </div>
        <div class="row mb crum_der">
            <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG"> <a href="index.php?act=decart"><input type="button" value="XÓA GIỎ HÀNG"></a>
        </div>
    </div>

    <div class="boxphai ">
        <?php include "view/boxright.php"; ?>
    </div>
</div>