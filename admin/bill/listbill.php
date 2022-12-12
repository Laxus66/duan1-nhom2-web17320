<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body>

<h3 style="margin-top: 10px;">Danh Sách Đơn Hàng</h3>
<form action="">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Mã đơn hàng </th>
                    <th>Tên khách hàng</th>
                    <th>Số lượng đơn hàng</th>
                    <th>Thời gian</th>
                    <th>Tổng đơn hàng</th>
                    <th>Trạng Thái</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listbill as $bill) {
                    extract($bill);
                    $status = get_ttdh($bill['bill_status']);
                    $pttt = get_pttt($bill['bill_pttt']);
                    $count = loadall_cart_count($bill['id']);
                    $detail = "index.php?act=chitietbill&id=" . $id;
                   ?>
                            <tr>
                                
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>PAD- <?php echo $id ?></td>
                                    <td><?php echo $bill_name ?></td>
                                    <td><?php echo $count ?></td>
                                    <td> <?php echo $ngaydathang ?></td>
                                    <td> <?php echo $total ?></td>
                                    <td> <?php echo $status ?></td>
                                    <td style="text-align: center; display: flex;">
                                        <a style="text-decoration: none; margin: 4px;" href="<?php echo $detail ?>">
                                            <input type="button" class="edit" value="Chi Tiết 📃">
                                        </a>
                                    </td>
                            </tr>   
                        
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="table-btn">
            <input type="button" value="Chọn Tất Cả">
            <input type="button" value="Bỏ Chọn Tất Cả">
            <input type="button" value="Xóa Các Mục Đã Chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"></a>
        </div>
        </form>
    </div>
    </div>
</body>

</html>