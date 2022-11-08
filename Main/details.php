<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Product Card/Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/details.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>
  <div class="header">
    <div class="logo"><img src="./Images/img/img_raucuqua/logo/logo2.jpg" alt=""></div>
    <div class="menu">
      <ul>
        <li><a href="#">Vitanic</a></li>
        <li>
          <div class="dropdown">
            <a class="dropbtn">Sản Phẩm</a>
            <div class="dropdown-content">
              <a href="#">Rau Củ</a>
              <a href="#">Hoa Quả Tươi</a>
              <a href="#">Hoa Quả Sấy</a>
              <a href="#">Ô Mai</a>
              <a href="#">Hoa Quả Đông Lạnh</a>
              <a href="#">Thêm..</a>
            </div>
          </div>
        </li>
        <li><a href="#">Tin Tức</a></li>
        <li><a href="#">Khuyến Mãi</a></li>
        <li><a href="#">Liên hệ</a></li>
      </ul>
    </div>
    <div class="user">
      <ul>
        <li><i class="fa-solid fa-user"></i><a href="#"> Đăng Nhập</a></li>
        <li><i class="fa-solid fa-cart-shopping"></i><a href="#"> Giỏ Hàng</a></li>
      </ul>
    </div>
  </div>
  <div class="card-wrapper">
    <div class="card">
      <!-- card left -->
      <div class="product-imgs">
        <div class="img-display">
          <div class="img-showcase">
            <img src="./Images/img/img_raucuqua/sanpham/bapcaitim.jpg" alt="organic-food">
            <img src="./Images/img/img_raucuqua/sanpham/bapchuoi.jpg" alt="organic-food">
            <img src="./Images/img/img_raucuqua/sanpham/bi-do.jpg" alt="organic-food">
            <img src="./Images/img/img_raucuqua/sanpham/bingoi.jpg" alt="organic-food">
          </div>
        </div>
        <div class="img-select">
          <div class="img-item">
            <a href="#" data-id="1">
              <img src="./Images/img/img_raucuqua/sanpham/bapcaitim.jpg" alt="organic-food">
            </a>
          </div>
          <div class="img-item">
            <a href="#" data-id="2">
              <img src="./Images/img/img_raucuqua/sanpham/bapchuoi.jpg" alt="organic-food">
            </a>
          </div>
          <div class="img-item">
            <a href="#" data-id="3">
              <img src="./Images/img/img_raucuqua/sanpham/bi-do.jpg" alt="organic-food">
            </a>
          </div>
          <div class="img-item">
            <a href="#" data-id="4">
              <img src="./Images/img/img_raucuqua/sanpham/bingoi.jpg" alt="organic-food">
            </a>
          </div>
        </div>
      </div>
      <!-- card right -->
      <div class="product-content">
        <h2 class="product-title">Bắp cải tím</h2>
        <a href="./index.html" class="product-link">Cửa hàng</a>
        <div class="product-rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <span>4.7(21)</span>
        </div>

        <div class="product-price">
          <p class="last-price">Giá cũ: <span>$257.00</span></p>
          <p class="new-price">Giá mới: <span>$249.00 (-5%)</span></p>
        </div>

        <div class="product-detail">
          <h2>Thông tin sản phẩm: </h2>
          <p>Là một loại thực phẩm vô cùng quen thuộc, có màu sắc vô cùng bắt mắt, rất dễ mua và chế biến thành nhiều món ăn đa dạng khác nhau trong bữa cơm hằng ngày. Bắp cải tím đặc biệt mang đến lợi ích trong việc hỗ trợ phòng chống ung thư, giúp cơ thể khỏe mạnh toàn diện.</p>
          <p>Mọi người dường như đã quá quen thuộc với những quả bắp cải xanh nhưng ít người biết rằng, bắp cải còn có loại màu tím bắt mắt. </p>
          <ul>
            <li>Tình trạng: <span>Còn hàng</span></li>
            <li>Phân loại <span>Rau-củ-quả</span></li>
            <li>Khu vực vận chuyển: <span>Nội thành</span></li>
            <li>Giá vận chuyển: <span>Free</span></li>
          </ul>
        </div>

        <div class="purchase-info">
          <input type="number" min="0" value="1">
          <button type="button" class="btn">
            Add to Cart <i class="fas fa-shopping-cart"></i>
          </button>
        </div>

        <div class="social-links">
          <p>Share At: </p>
          <a href="#">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fab fa-whatsapp"></i>
          </a>
          <a href="#">
            <i class="fab fa-pinterest"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--Bình luận -->
  <div class="cmt">
    <h2>Đánh giá</h2>
    <form action="" method="POST">
      <div class="formbold-mb-3">
        <textarea rows="6" name="message" id="message" class="formbold-form-input"></textarea>
      </div>

      <div>
        <label for="email" class="formbold-form-label"> Email <span>(Giúp chúng tôi có thể liên hệ với bạn)</span> </label>
        <input type="email" name="email" id="email" class="formbold-form-input" />
      </div>

      <button class="formbold-btn">Gửi đánh giá</button>
    </form>
  </div>

  <!--Hiển thị bình luận-->
  <div class="hienthi">
  </div>
  <div class="footer">
    <!-- <img src="./Images/img/img_raucuqua/Footer/variety-fresh-tasty-vegetables-dark.jpg" alt=""> -->
    <div class="footer-box contact">
      <img src="./Images/img/img_raucuqua/logo/logo2.jpg" alt=""><br>
      <i class="fa-brands fa-facebook"></i>
      <i class="fa-brands fa-instagram"></i>
      <i class="fa-solid fa-envelope"></i>
      <i class="fa-brands fa-google"></i>
    </div>
    <div class="footer-box address">
      <ul>
        <li><a href="#">Đặt Hàng</a></li>
        <li><a href="#">Góp Ý</a></li>
        <li><a href="#">Đánh Giá</a></li>
        <li><a href="#">Nhận Ưu Đãi</a></li>
      </ul>
    </div>
    <div class="footer-box address">
      <ul>
        <li><a href="#">Hợp Tác</a></li>
        <li><a href="#">Đăng Kí Thành Viên</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Thanh Toán</a></li>
      </ul>
    </div>
    <div class="footer-box address">
      <p><i class="fa-solid fa-envelope-circle-check"></i> Đăng kí thành viên để nhận nhiều ưu đãi từ chúng tôi !</p>
      <input type="email" placeholder="Email..">
      <button>SIGN UP</button>
    </div>
  </div>

  <script src="./chitiet.js"></script>
</body>

</html>