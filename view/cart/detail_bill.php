<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../../Main/css/style.css"> -->
</head>

<body>
    <div class="detail_bill">
        <div class="deatail_bill_box">
            <h4 class="details_bill_box_title">Mã Người Đặt</h4>
            <p>Name</p>
        </div>
        <div class="deatail_bill_box">
            <h4 class="details_bill_box_title">Thông Tin Đặt Hàng</h4>
            <div class="details_bill_box_buy">
                <div class="box_left">
                    <p>Người Đặt Hàng</p>
                    <p>Địa Chỉ</p>
                    <p>Email
                    <p>
                    <p>Số Điện Thoại</p>
                    <p>Ngày Đặt Hàng</p>
                </div>
                <div class="box-right">
                    <input type="text" value="#" disabled>
                    <input type="text" value="#" disabled>
                    <input type="text" value="#" disabled>
                    <input type="text" value="#" disabled>
                    <input type="text" value="#" disabled>
                </div>
            </div>
        </div>
        <div class="deatail_bill_box">
            <h4 class="details_bill_box_title">Phương Thức Thanh Toán</h4>
            <input type="text" value="Trả Khi Nhận Hàng" disabled style="border: none; outline: none;">
        </div>
        <div class="deatail_bill_box">
            <h4 class="details_bill_box_title">Sản Phẩm Đã Chọn</h4>
            <table>
                <thead>
                    <tr>
                        <th>Mã Mặt Hàng</th>
                        <th>Hình Ảnh</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Số Lượng</th>
                        <th>Thành Tiền</th>
                        <th>Trạng Thái</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                        <td>Test</td>
                    </tr>
                </tbody>
            </table>
            <button>Trở Lại</button>
        </div>

    </div>
    <style>
        .detail_bill {
            --main-color: #0f9d58;
            width: 70vw;
            border-radius: 12px;
            margin: 0 auto;
            padding: 10px 30px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            /* background-image: linear-gradient(to top,#355c7d, #6c5b7b, #c06c84); */
            /* background-image: linear-gradient(to right, #aa4b6b, #6b6b83, #3b8d99); */
            /* color: #fff; */
        }

        .deatail_bill_box {
            min-height: 50px;
            /* padding: 0px 10px; */
        }

        .details_bill_box_title {
            background-color: var(--main-color);
            padding: 10px;
            border-radius: 10px;
            color: #fff;
        }

        .details_bill_box_buy {
            display: flex;
        }

        .details_bill_box_buy .box_left {
            width: 40%;
        }

        .details_bill_box_buy .box-right {
            display: grid;
            width: 60%;
        }

        .details_bill_box_buy .box-right input[type=text] {
            margin: 4px 0px;
            border: none;
            outline: none;
            width: 100%;
        }

        .deatail_bill_box table {
            /* width: 80vw; */
            /* margin: 0 auto; */
            width: 100%;
            border-collapse: collapse;
            border: 1px solid var(--main-color);
            text-align: center;
        }

        .deatail_bill_box table thead {
            background-color: var(--main-color);
            padding: 10px;
            color: #fff;
        }

        .deatail_bill_box table td,
        th,
        tr {
            min-width: 80px;
            /* color: var(--main-color); */
            padding: 10px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
        }

        button {
            border: none;
            padding: 10px;
            border-radius: 8px;
            background-color: var(--main-color);
            color: #fff;
            min-width: 100px;
            margin: 8px;
        }
    </style>
</body>

</html>