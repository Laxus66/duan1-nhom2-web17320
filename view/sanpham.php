<div class="container">
  <!-- Slide -->
  <div class="slideshow-container">
    <div class="mySlides fade">
      <img src="../Images/slideshow/slideshow.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="../Images/slideshow/slideshow2.jpg" style="width:100%">
    </div>
    <div class="mySlides fade">
      <img src="../Images/slideshow/slideshow3.jpg" style="width:100%">
    </div>
  </div>
  <div class="product-search">
        <div class="container-title">
          <p>Trang Chủ/</p>
          <p>Danh Mục: <b><?=$tendm?></b></p>
        <form action="index.php?act=listsp" method="POST">
          <div class="search">
            <input type="text" placeholder="Bạn muốn tìm kiếm sản phẩm gì..?" name="kyw">
            <button type="submit" name="timkiem"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
        </form></div>
      </div>
  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
  </script>
  <!-- Product -->
  <div class="product">
    <!-- product category -->
    <div class="product-category">
      <a style="text-decoration: none;" href="index.php">
        <h3>Danh Mục Sản Phẩm</h3>
      </a>
      <ul>
        <?php
        foreach ($listdm as $dm) {
          extract($dm);
          $loadsp = "index.php?act=listsp&cate_id=" . $id_cate;
          echo '
                    <li><i class="fa-solid fa-carrot"></i><a href="' . $loadsp . '">' . $name_cate . '</a><i class="fa-solid fa-circle-chevron-right"></i></li>
                   
                    ';
        }
        ?>
      </ul>
      <div class="slide-category">
        <img src="../Images/banner/banner1.jpg" alt="">
      </div>
      <form class="product-category-user">
        <h3>Tài Khoản</h3>
        <input type="text" placeholder="Tài khoản..">
        <input type="text" placeholder="Mật khẩu..">
        <input type="submit" value="Đăng Nhập">
      </form>

      <!-- <form class="product-category-user">
        <h3>Xin Chào Laxus</h3>
        <input type="submit" value="Đăng Nhập ADMIN">
        <input type="submit" value="Giỏ Hàng">
        <input type="submit" value="Thông Tin">
        <input type="submit" value="Đăng Xuất">
      </form>

      <form class="product-category-user">
        <h3>Xin Chào Laxus</h3>
        <input type="submit" value="Giỏ Hàng">
        <input type="submit" value="Thông Tin">
        <input type="submit" value="Đăng Xuất">
      </form> -->
    </div>
    <!-- product box -->
    <div class="product-main">
      <?php
      foreach ($sphome as $sp) {
        extract($sp);
        $link = "index.php?act=detail&id=" . $id;
        $loadsp = "index.php?act=listsp&cate_id=" . $id_cate;
        $img = $img_path . $image;
        echo '
                <div class="product-box">
                <a href="' . $link . '">
                <img src="' . $img . '" alt="">
                </a>
                <a style="text-decoration: none;" href="' . $loadsp . '"><button>' . $name_cate . '</button></a>
                <a href="' . $link . '">
                <p class="name">' . $name . '</p>
                <p class="price">' . $price . 'đ <del>' . $amount . 'đ</del></p>
                </a>
                <div class="product-box-btn">
                <form action="index.php?act=addcart" method="POST">
                  <input type="hidden" name="id" value="'.$id.'">
                  <input type="hidden" name="image" value="'.$image.'">
                  <input type="hidden" name="name" value="'.$name.'">
                  <input type="hidden" name="price" value="'.$price.'"> 
                     <input class="add" type="submit" name="addcart" value="Add to cart">
                  </form>
                </div>
            </div>
                ';
      }
      ?>
    </div>
  </div>
  <!-- intro -->
  <div class="intro">
    <div class="intro-img">
      <img src="../Images/intro/close-up-box-with-vegetables-hands-mature-man.jpg" alt="">
    </div>
    <div class="intro-content">
      <h3>Thực Phẩm Lành, Lối Sống Xanh</h3>
      <ul>
        <li><b>Nông sản hữu cơ</b> được thu hoạch từ các nông trại sạch địa phương & thế giới</li>
        <li><b>Đa dạng lựa chọn</b> các sản phẩm lành mạnh, thuần tự nhiên – luôn có sẵn</li>
        <li><b>Giao hàng tận nhà</b> nhanh chóng & miễn phí trên toàn quốc – điều kiện áp dụng *</li>
      </ul>
      <button><a href="index.php?act=gioithieu">Khám Phá Ngay</a></button>
    </div>
  </div>
  <?php include "blog.php" ?>

  <!-- Sale -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        if ($(this).scrollTop()) {
          $('#backTop').fadeIn();
        } else {
          $('#backTop').fadeOut();

        }
      });
      $("#backTop").click(function() {
        $('html, body').animate({
          scrollTop: 0
        }, 1000);
      })
    });
  </script>
  <div class="class-helo">
    <div id="backTop">
      <i class="fas fa-chevron-up animate__animated animate__fadeInUp  animate__infinite"></i>
    </div>
  </div>