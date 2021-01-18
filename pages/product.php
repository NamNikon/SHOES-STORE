<?php
$db = getDbConnect();
$id = $_REQUEST['id'];
$sanPham = $db->query("SELECT * FROM san_pham WHERE id = " . $id)->fetch();

?>
<div class="row">
    <div class="col-md-3" id="menu-left">
        <?php
        include "menu.php";
        ?>
    </div>
    <div class="col-md-9">
        <div id="right">
            <div id="chitietsp">
                <div id="chitietleft">
                    <img src="./jmg/<?php echo $sanPham['anh_dai_dien'] ?>">
                </div>
                <div id="chitietright">
                    <div>
                        <span class="label">Tên Sản Phẩm:</span>
                        <span class="productname"><?php echo $sanPham['ten_sp'] ?></span>
                    </div>
                    <div>
                        <span class="label">Giá:</span>
                        <span class="price"><?php echo $sanPham['gia'] ?>đ</span>
                    </div>
                    <div>
                        <span class="label">Hãng Sản Xuất:</span>
                        <span class="factory"><?php echo $sanPham['hang_sx'] ?></span>
                    </div>
                    <div>
                        <span class="label">Loại Sản Phẩm:</span>
                        <span class="data"><?php echo $sanPham['loai_sp'] ?></span>
                    </div>
                    <div>
                        <span class="label">Số Lượng :</span>
                        <span class="data"><?php echo $sanPham['so_luong'] ?> chiếc</span>
                    </div>
                    <div>
                        <span class="label">Số Lượt Xem:</span>
                        <span class="data"><?php echo $sanPham['luot_xem']  ?> lượt</span>
                    </div>
                    <div>
                        <span class="label">Ngày đăng :</span>
                        <span
                            class="data"><?php $dinh_dang_moi = date("d-m-Y", strtotime($sanPham['ngay_dang']));echo $dinh_dang_moi ?></span>
                    </div>

                    <div class="giohang" id="cart">
                        <a href="pages/giohang.php?id=<?php echo $sanPham['ID'];
                        ?>"><button class="btn btn-primary">Thêm
                                vào giỏ hàng <i class="fas fa-shopping-cart"></i></button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    &emsp;
    <div class="row">
        <div class="col-md-12">
            <?php
            include "content.php";
            ?>
        </div>
    </div>
