<?php

include_once('ketnoi.php');
$db = getDbConnect();
$tatCaSanPham = $db->query("SELECT * FROM san_pham")->fetchAll();

if(isset($_REQUEST['loai_sp'])) { 
    $idLoaiSP = $_REQUEST['loai_sp'];
    
    $spTheoLoai = $db->query("SELECT * FROM san_pham WHERE loai_sp = $idLoaiSP")->fetchAll();
} else if(isset($_REQUEST['hang_sx'])) {
    $idHangSX=$_REQUEST['hang_sx'];

    $spTheoHang=$db->query("SELECT *FROM san_pham WHERE hang_sx=$idHangSX ") ->fetchAll();
} else {
    $spBanChay = $db->query("SELECT * FROM san_pham ORDER BY luot_xem DESC LIMIT 10")->fetchAll();
}

if(isset($_REQUEST['tim_kiem'])) { 
    $timKiem = $_REQUEST['tim_kiem'];
    // echo $timKiem; exit;


    $kqTimKiem = $db->prepare("SELECT * FROM san_pham WHERE ten_sp LIKE :timKiem");
    $kqTimKiem->bindValue(':timKiem', '%'.$timKiem.'%');
    $kqTimKiem->execute();
    
    if($kqTimKiem->rowCount() <= 0) {
        $thongBao = 'Không tìm thấy sản phẩm nào!';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_POST['sapxep'] == 'MoiNhat') {
        $spMoi = $db->query("SELECT * FROM san_pham ORDER BY ngay_dang DESC LIMIT 10")->fetchAll();
    }else if($_POST['sapxep'] == 'BanChay') {
        $spBanChay = $db->query("SELECT * FROM san_pham ORDER BY luot_xem DESC LIMIT 10")->fetchAll();
    }
}
?>

<html>

<head>
    <title>Drop Shop</title>

    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
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
    <script src="js/script.js"></script>
    <link rel="icon" href="jmg/icon.ico">
</head>

<body>
    <div class="container">

        <header>
            <?php
                    include "header.php";
                    include "pages/banner.php";
                ?>

        </header>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9">
                <h2>
                    <div class="form-group">
                        <form action="/doan/" method="post">
                            <select class="form-control w-50" name="sapxep" style="float: left; margin-top: 5px;">
                                <option value="BanChay">Sản Phẩm Bán Chạy Nhất</option>
                                <option value=" MoiNhat">Sản Phẩm Mới Nhất</option>
                            </select>
                            &emsp;
                            <button class="btn btn-danger" type="submit">Filter <i class="fas fa-filter"></i></button>
                        </form>
                    </div>
                </h2>
            </div>
        </div>

        <main>
            <?php
                $page = isset($_GET['page']) ? $_GET['page'] : '';
                if (empty($page)) {
                    include (__DIR__ . '/pages/home.php');
                }
                elseif (file_exists(__DIR__ . '/pages/'. $page . '.php')) {
                    include (__DIR__ . '/pages/'. $page .'.php');
                }
                else {
                    include (__DIR__ . '/pages/404.php');
                }
            ?>
        </main>
        &nbsp;
        <footer>
            <div class="row">
                <div class="col-md-8">
                    <h4 style="color:#fff"><i class="fas fa-building"></i> Công Ty Thời Trang Phụ Kiện DropShop</h4>
                    <h4 style="color:#fff"><i class="fas fa-home"></i> Hội sở chính: 227 Nguyen Van Cu,Phuong 5, Quan 5,
                        TP.HCM</h4>
                    <h4 style="color:#fff"><i class="far fa-envelope"></i> Email:<a
                            href="mailto: lienheDropShop@gmail.com">
                            lienheDropShop@gmail.com</a></h4>
                    <h4 style="color:#fff"><i class="fab fa-facebook-square"></i> FaceBook:<a
                            href="https://www.facebook.com/DropShop.vn/">
                            DropShop</a></h4>
                </div>
                <div class="col-md-2">
                    <img src="jmg/appstore.png" style="cursor: pointer" />
                </div>
                <div class="col-md-2">
                    <img src="jmg/ggplay.png" style="cursor: pointer" />
                </div>
            </div>
        </footer>
    </div>
</body>

</html>