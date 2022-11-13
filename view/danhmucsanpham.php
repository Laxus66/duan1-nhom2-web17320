
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Main/css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Document</title>
    <style>
        #banner {
            background: url(../Images/banner/banner1.jpg);
            width: 100%;
            min-height: 350px;
            background-size: cover;
            margin: 0 auto;
            margin-top: 5px;
        }
        h1 {
            font-size: 45px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['madanhmuc'])) {
        $madm = $_GET['madanhmuc'];
    }
    ?>

    <?php include "header.php" ?>

    <div class="wrapper">
        <div id="banner">
            <div class="text_banner">
                <h1>Danh mục sản phẩm</h1>
            </div>
        </div>

        <!---Hiển thị danh mục -->
        <div class="food-menu">
            <button class="button_name"><a href="index.php?act=sanpham">Tất cả</a></button>
            <?php
                $dsdm = loadall_dm();
                foreach ($dsdm as $key => $value) {
            ?>
                <button class="button_name"><a href="index.php?act=danhmucsanpham&madanhmuc=<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></button>
            <?php
            }
            ?>
        </div>

       
        <?php
        
        ?>
            <h2>Sản phẩm tìm kiếm được</h2>
            <div class="food-list">
                <?php
                $dsproduct = loadAll_sanpham("",$madm);
                //var_dump($dsproduct);
                foreach ($dsproduct as $key => $value) {

                ?>
                    <div class="food-item">
                        <a href="<?php echo $value['id'] ?>">
                            <img src="../Images/sanpham/sanphamok/<?php echo $value['image'] ?>" alt="">
                        </a>

                        <span class="name"><a href="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></a></span><br>
                        <span class="price"><a href="<?php echo $value['id'] ?>"><?php echo $value['price'] ?></a></span><br>
                        <div class="product-box-btn">
                            <button class="add"><i class="fa-solid fa-cart-shopping"></i> Add to cart</button>
                        </div>
                    </div>
                <?php

                }
                ?>
                </div>

            </div>

    </div>
    
   
</body>

</html>