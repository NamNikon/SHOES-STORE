<?php
session_start();
require_once '../ketnoi.php';
$db = getDbConnect();

$list_id = array_keys($_SESSION['cart']);

$list_id = implode(',',$list_id);


$gh = $db->query("SELECT * FROM san_pham WHERE id IN ($list_id)")->fetchAll();

?>

<html>

<head>
    <title>Drop Shop</title>

    <link rel="stylesheet" type="text/css" href="../css/fontawesome.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="../js/script.js"></script>
    <link rel="icon" href="../jmg/icon.ico">
</head>
<body background="../bg.jpg">
<div class="container">
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Danh sách sản phẩm đã
                chọn </label>
            <table class="table table-striped">
                <thead>
                <th scope="col">Ảnh sản phẩm</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá sản phẩm</th>
                <th scope="col">Số lượng sản phẩm</th>
                <th scope="col"></th>
                </thead>
                <tbody>
                <?php foreach($gh as $item1): ?>
                <tr>
                    <td><img src="../jmg/<?php echo $item1['anh_dai_dien'];
                    ?>" width="100", height="100 "
                        /></td>
                    <td><?php echo $item1['ten_sp'] ?></td>
                    <td><?php echo $item1['gia'] ?></td>
                    <td>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="giamSL">-</button>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="soluong"><?php echo
                                            $_SESSION['cart'][$item1['ID']]['quality']
                                            ?></div>
                                    </div>

                                    <div class="col-md-6">
                                        <button class="tangSL">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7"></div>
                        </div>
                    </td>
                    <td><button class="btn btn-warning"
                                id="xoaSP">Xóa</button></td>
                </tr>
                <?php endforeach ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-4"><h3>Thành Tiền: </h3></div>
                <div class="col-md-2"><button class="btn
                btn-success">Thanh Toán</button> </div>
            </div>
        </div>
    </form>
</div>
</body>