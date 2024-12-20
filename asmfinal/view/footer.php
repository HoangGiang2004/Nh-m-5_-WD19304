
<!-- js cho slideshow -->
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>
</body>

</html> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liên Hệ Táo Store</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<style>
  /* Đặt nền cho trang */
/* body {
  background-color: #f3f4f6;
  color: #1f2937;
} */
.header-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      background-color: #f8f9fa;
      padding: 10px 20px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .logo {
      display: flex;
      align-items: center;
    }
    .logo img {
      width: 50px; /* Kích thước logo */
      height: auto;
      margin-right: 10px;
    }
    .navbar {
      display: flex;
      gap: 15px;
    }
    .navbar a {
      color: #333;
      font-weight: bold;
      padding: 8px 12px;
      border-radius: 5px;
      text-decoration: none;
    }
    .navbar a:hover {
      background-color: #e2e6ea;
    }
    .search-container {
      position: relative;
    }
    .search-container input[type="text"] {
      padding: 8px 12px;
      border-radius: 20px;
      border: 1px solid #ccc;
      outline: none;
      padding-right: 35px;
    }
    .search-container button {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      cursor: pointer;
      color: #333;
    }

.banner-container {
    max-width: 384px; /* Chiều rộng tối đa cho banner */
    margin: 0 auto; /* Căn giữa banner */
}

.banner-image {
    /* width: 100%; */
    height: 10px; /* Chiều cao banner */

    border-radius: 0.5rem; /* Bo góc */
}

.banner-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 1.5rem; /* Kích thước chữ */
    font-weight: bold;
}

/* Căn chỉnh lưới và khoảng cách giữa các mục */
.contact-section {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  
  max-width: 1000px;
  margin: auto;
  padding: 20px;
  background-color: #ffffff;
  border-radius: 8px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Kiểu chữ và căn lề cho tiêu đề và nội dung */
.contact-section h2 {
  font-size: 24px;
  font-weight: bold;
  color: #1f2937;
}

.contact-section p {
  font-size: 16px;
  color: #4b5563;
}

/* Phong cách liên kết email và số điện thoại */
.contact-section a {
  color: #1d4ed8;
  text-decoration: none;
}

.contact-section a:hover {
  text-decoration: underline;
}

/* Kiểu chữ đậm cho tiêu đề nhỏ */
.contact-section .title {
  font-weight: bold;
  margin-bottom: 8px;
}

/* Phong cách cho form */
form input[type="text"],
form input[type="tel"],
form input[type="email"],
form textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #d1d5db;
  border-radius: 4px;
  margin-top: 4px;
  font-size: 16px;
}

form input[type="text"]:focus,
form input[type="tel"]:focus,
form input[type="email"]:focus,
form textarea:focus {
  border-color: #34d399;
  outline: none;
}

form button[type="submit"] {
  background-color: #14b8a6;
  color: #ffffff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

form button[type="submit"]:hover {
  background-color: #0d9488;
}
footer {
  color: white;
  padding: 40px 0;
  margin: 0 auto;
  align-items: center;  
 /* Căn giữa văn bản trong footer */
}

.footer-tong .container {   
  background-color: black;
  max-width: 1025px;
  margin: 0 auto; /* Đưa container vào giữa trang */
  display: flex;
  flex-direction: column;
  align-items: center; /* Căn giữa các phần tử theo chiều ngang */
  gap: 20px;
}

.footer-tong .container .flex {
  justify-content: center; /* Căn giữa các icon mạng xã hội */
}

.footer-tong .container .space-x-2 a {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #d3d3d3;
  background-color: #fff;
  color: #000;
  margin: 0 4px; /* Tạo khoảng cách giữa các icon */
}

footer .border-t {
  border-top: 1px solid #555;
  padding-top: 16px;
  margin-top: 16px;
  text-align: center;
}

footer .border-t .text-sm {
  margin-bottom: 8px;
}

footer .border-t .flex {
  justify-content: center; /* Căn giữa các icon thanh toán */
  gap: 8px;
}

.footer-tong .company-info, .footer-tong .contact-info, .footer-tong .extra-links {
  flex: 1; /* Chia đều không gian cho các cột */
}

@media (min-width: 768px) {
  .footer-tong .container {
    flex-direction: row; /* Khi trên màn hình lớn, chuyển sang dạng hàng ngang */
    justify-content: space-between;
  }
}



.breadcrumb {
  list-style: none;
  padding: 10px;
  margin: 0;
  display: flex;
  background-color: #fff; /* Thêm nền màu trắng */
  border-radius: 5px; /* Nếu bạn muốn bo góc cho thanh */
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); /* Tạo bóng nhẹ cho thanh */
  margin-bottom: 20px; /* Khoảng cách giữa breadcrumb và phần dưới */
}

.breadcrumb-item {
  margin-right: 10px;
}

.breadcrumb-item a {
  text-decoration: none;
  color: #007bff;
}

.breadcrumb-item::after {
  content: ">";
  margin-left: 10px;
}

.breadcrumb-item:last-child::after {
  content: "";
}




</style>
<body class="bg-gray-100 text-gray-800">

    <div class="mt-8">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.131045692477!2d106.6953962152607!3d10.775658792320429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292920a36b69%3A0xe7b5eb1c4a1a6db7!2sHo%20Chi%20Minh%20City!5e0!3m2!1sen!2s!4v1636635744392!5m2!1sen!2s" width="100%" height="300" frameborder="0" class="rounded-md border border-gray-200" allowfullscreen></iframe>
    </div>
  </section>

  <!-- Footer -->
  <div class="footer-tong">
    <footer class="bg-black text-white py-8">
      <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-4">
        
        <!-- Giới thiệu về cửa hàng -->
        <div class="space-y-2">
          <h2 class="font-bold text-lg">TÁO STORE</h2>
          <p>Hệ thống bán lẻ sản phẩm Apple chính hãng. Nơi có thu cũ đổi mới, máy cũ đã sử dụng giá rẻ, hỗ trợ trả góp với nhiều hình thức.</p>
        
        
        <!-- Thông tin liên hệ -->
        <div class="space-y-2">
          <h2 class="font-bold text-lg">Thông tin liên hệ</h2>
          <p>📍 Hệ thống cửa hàng</p>
          <p>📞 1900 998839</p>
          <p>📧 taostore@gmail.com</p>
        </div>
      </div>
  
        <!-- Hỗ trợ khách hàng -->
        <div class="space-y-2">

          <ul class="space-y-1">
            <li><a href="#" class="hover:underline">Chính sách bảo hành</a></li>
            <li><a href="#" class="hover:underline">Chính sách đổi trả</a></li>
            <li><a href="#" class="hover:underline">Hướng dẫn mua hàng</a></li>
            <li><a href="#" class="hover:underline">Hướng dẫn thanh toán</a></li>
          </ul>
        </div>
  
        <!-- Kết nối với chúng tôi -->
        <div class="space-y-2">
          <h2 class="font-bold text-lg">Kết nối với chúng tôi</h2>
          <div class="flex space-x-2">
            <a href="#" class="bg-white text-black p-2 rounded-md border border-gray-300">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="bg-white text-black p-2 rounded-md border border-gray-300">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="bg-white text-black p-2 rounded-md border border-gray-300">
              <i class="fab fa-tiktok"></i>
            </a>
            <a href="#" class="bg-white text-black p-2 rounded-md border border-gray-300">
              <i class="fab fa-youtube"></i>
            </a>
            <a href="#" class="bg-white text-black p-2 rounded-md border border-gray-300">
              Zalo
            </a>
          </div>
        </div>
      </div>
  
      <!-- Thông tin bản quyền và thanh toán -->
      <div class="container mx-auto px-4 mt-4 border-t border-gray-700 pt-4 text-center">
        <div>
        <p class="text-sm">© Công ty TNHH TM DV Táo Store - Nhóm 5 .</p>

        </div>  
        <p class="text-sm">Địa chỉ: Hà Nội - Việt Nam. Điện thoại: ###.</p>

      </div>
      
    </footer>
  </div>
  
  <!-- FontAwesome Icons (for social media icons) -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  
  
  <!-- FontAwesome Icons (for social media icons) -->
  <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
  </body>

  <script>
    window.onload = function() {
  const breadcrumb = document.querySelector('.breadcrumb');
  const paths = location.pathname.split('/').filter(path => path !== '');
  let breadcrumbHTML = '<li class="breadcrumb-item"><a href="/">Trang chủ</a></li>';

  paths.forEach((path, index) => {
    const pageName = path.replace(/-/g, ' ');  // Đổi dấu gạch ngang thành dấu cách
    const url = '/' + paths.slice(0, index + 1).join('/');
    breadcrumbHTML += `<li class="breadcrumb-item"><a href="${url}">${pageName}</a></li>`;
  });

  breadcrumb.innerHTML = breadcrumbHTML;
};

  </script>