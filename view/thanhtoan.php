<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Main/css/thanhtoan.css">
</head>

<body>
<form class="diaChiGiaoHang" method="POST" action="index.php?act=billconfirm">
    <div class="cart">
        <!-- <div class="cart-box"> -->
        <div class="cart-left">
            <h3 class="cart-title">Thanh Toán</h3>
            <table>
                <thead>

                    <tr>
                        <th>Hình Ảnh</th>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Lựa chọn</th>
                    </tr>
                </thead>
                <?php
                          
                          $tong=0;
                          $i=0;
                            foreach ( $_SESSION['mycart'] as $cart) {
                                $img = $img_path.$cart[2];
                                $ttien = $cart[3]*$cart[4];
                                $tong+=$ttien;
                                $xoacart='<a href="index.php?act=deletecart&id='.$i.'"><input type="button" value="xóa">';
                                 echo '
                                 <tr>
                                 <th><img style="width:100px"; src="'.$img.'"></th>
                                 <th>'.$cart[1].'</th>
                                 <th>'.$cart[3].'</th>
                                 <th>'.$cart[4].'</th>
                                 <th>'.$ttien.'</th>
                                 <th>'.$xoacart.'</th>
                                </tr>
                                ';
                                $i+=1;
                            }
                            echo '
                            <tr>
                            <th>Tổng Tiền</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>'.$tong.'</th>
                            <th></th>
                           </tr>
                            ';
                           
                          ?>
            </table>
            <div class="cart-right-box">
                <h3 class="cart-sum">Phiếu giảm giá</h3>
                <ul>
                    <li><input type="text" placeholder="Nhập mã giảm giá.."></li>
                    <button>Áp Dụng</button>
                </ul>
            </div>
        </div>
                           <?php
                                   if(isset($_SESSION['name'])){
                                    $name=$_SESSION['name']['name'];
                                    $address = $_SESSION['name']['address'];
                                    $email=$_SESSION['name']['email'];
                                    $tel=$_SESSION['name']['tel'];
                                   }else{
                                    $name="";
                                    $address="";
                                    $tel="";
                                    $email="";
                                   }
                              ?>
        <div class="cart-right">
            <h3 class="cart-title">Thông Tin Đơn Hàng</h3>

           
                <h3 class="cart-sum">Địa Chỉ Thanh Toán</h3>
                <div class="diaChiGiaoHang-box">
                    <label for="">Tên</label>
                    <input type="text" name="name" value="<?=$name?>" required placeholder="Tên của bạn..">
                </div>
                <div class="diaChiGiaoHang-box">
                    <label for="">Địa chỉ</label>
                    <input type="text" required name="address" value="<?=$address?>" placeholder="Địa chỉ của bạn..">
                </div>
                <div class="diaChiGiaoHang-box">
                    <label for="">Email</label>
                    <input type="text" name="email" value="<?=$email?>" required placeholder="Email của bạn..">
                </div>
                <div class="diaChiGiaoHang-box">
                    <label for="">Số điện thoại</label>
                    <input type="text" name="tel" value="<?=$tel?>" required placeholder="Số điện thoại..">
                </div>
              
                <div class="diaChiGiaoHang-box">
                    <label for="">Dự tính thời gian giao hàng: </label>
                    <input type="text" value="Nội thành: 1-2 ngày; Các tỉnh khác từ 3-5 ngày" disabled>
                </div>

                <!-- <button style="background-color: var(--main-color);">Cập Nhật</button> -->
       
            <div class="money-sum">
              
                    <h4 style="margin-top: 10px;">Hình Thức Thanh Toán</h4>
                    <input type="radio" id="home" name="pttt" value="1" checked>
                    <label for="home">Trả Khi Nhận Hàng</label><br>
                    <input type="radio" id="credit" name="pttt" value="2">
                    <label style="opacity: .7;" for="credit">Credit( Đang phát triển)</label><br>
                    <input type="radio" id="momo" name="pttt" value="3">
                    <label style="opacity: .7;" for="momo">Momo( Đang phát triển)</label>
                    <h3 class="cart-sum sum">Tổng Tiền: <b> </b></h3>
                    <h3 class="cart-sum">Tổng tiền sau khi giảm giá: <b> </b></h3>
                    <input type="hidden" name="name_hh" value="<?php echo $cart[1]?>">
                    <input type="hidden" name="soluong_hh" value="<?php echo $cart[4]?>">
                    <input type="text" name="date" value="<?php $date = date('Y-m-d H:i:s'); echo $date ?>" hidden>
                
                   <?php
                            if(isset($_SESSION['name'])){
                                extract($_SESSION['name']);
                                ?>
                                
                                <input type="submit" name="thanhtoan" value="Thanh Toán">
                            <?php
                            }else{
                                ?> 
                                       <input type="submit" name="thanhtoan" onclick="show()" value="Thanh Toán">
                             <?php   
                            }
                        ?>
              
            </div>
        </div>
        <!-- </div> -->
    </div>
    </div>
    </form>
</body>

</html>