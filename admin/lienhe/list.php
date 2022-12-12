
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="borderlist">

    <h3 style="margin-top: 10px;">Danh Sách Liên Hệ</h3>


        <form action="" method="POST">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Title</th>
                        <th>Note</th>
                        <th><i class="fa-solid fa-gear"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    foreach ($listcontact as $contact) {
                        extract($contact);
                        $suatk = "index.php?act=suacontact&id=".$id;
                        $xoacontact = "index.php?act=xoacontact&id=" . $id;
                       ?>
                                            <tr>
                                            <td><input type="checkbox" name="" id=""></td>
                                            <td><?php echo $id ?> </td>
                                            <td><?php echo $user ?> </td>
                                            <td><?php echo $email ?> </td>
                                            <td><?php echo $title ?> </td>
                                            <td><?php echo $content ?> </td>
                                            <td style="text-align: center;">
                                                <a style="text-decoration: none;" href="<?php echo $suatk ?>">
                                                    <input type="button" class="edit" value="Sửa">
                                                </a>
                                                <a style="text-decoration: none;" href="<?php echo $xoacontact ?>">
                                                    <input onclick="return confirm('Bạn có chắc chắn muốn xóa nó không')" type="button" class="delete" value="Xóa">
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
            </div>
        </form>
    </div>
    </div>
   
</body>

</html>