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

<h3 style="margin-top: 10px;">Danh Sách Tin Tức</h3>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Mã Bài Viết</th>
                    <th>Tiêu Đề</th>
                    <th>ảnh</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listblog as $bl) {
                    extract($bl);
                    // $suadm = "index.php?act=suadm&id=" . $id_cate;
                    // $xoadm = "index.php?act=xoadm&id=" . $id_cate;
                    $hinhpath = "../public/img" . $img;
                    if (is_file($hinhpath)) {
                        $img = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $img = "No photo";
                    }
                   ?>
                            <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td> <?php echo $id_blog ?></td>
                                    <td><?php echo $title ?></td>
                                    <td><?php echo $img ?></td>
                                    <td style="text-align: center;">
                                        <a style="text-decoration: none;" href="<?php echo $suadm ?>">
                                            <input type="button" class="edit" value="Sửa">
                                        </a>
                                        <a style="text-decoration: none;" href="<?php echo $xoadm ?>" >
                                            <input onclick="return confirm('Bạn có chắc chắn muốn xóa không')" type="button" class="delete" value="Xóa">
                                            
                                        </a>

                                    </td>
                            </tr>   
                        ;
                <?php
                }
                ?>
            </tbody>
        </table>
        <div class="table-btn">
            <input type="button" value="Chọn Tất Cả">
            <input type="button" value="Bỏ Chọn Tất Cả">
            <input type="button" value="Xóa Các Mục Đã Chọn">
            <a href="index.php?act=addblog"><input type="button" value="Nhập Thêm"></a>
        </div>
        </form>
    </div>
    </div>
</body>

</html>