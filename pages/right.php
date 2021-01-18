<div class="container">

    <?php  if(isset($_REQUEST['hang_sx'])):?> <center>
        <h2 style="color:#fff;">Sản phẩm theo hang</h2>
    </center>
    <?php foreach($spTheoHang as $sanPham): ?>
    <div class="box">
        <a href="./?page=product&id=<?php echo $sanPham['ID']; ?>">
            <img src="jmg/<?php echo $sanPham['anh_dai_dien']; ?>" />
            <div class="pname"><?php echo $sanPham['ten_sp']; ?></div>
            <div class="pprice">Giá : <?php echo $sanPham['gia']; ?> đ</div>
            <div class="action">
                <div style="text-align: center"> Chi Tiet</div>
            </div>
        </a>
    </div>
    <?php endforeach ?>
    <?php endif ?>

    <?php if(isset($_REQUEST['loai_sp'])): ?>
        <h2 style="color:#fff; text-align: center">Sản phẩm theo loại</h2>
    <?php
        foreach($spTheoLoai as $sanPham): ?>
    <div class="box">
        <a href="./?page=product&id=<?php echo $sanPham['ID']; ?>">
            <img src="jmg/<?php echo $sanPham['anh_dai_dien']; ?>" />
            <div class="pname"><?php echo $sanPham['ten_sp']; ?></div>
            <div class="pprice">Giá : <?php echo $sanPham['gia']; ?> đ</div>
            <div class="action">
                <div style="text-align: center"> Chi Tiet</div>
            </div>
        </a>
    </div>
    <?php endforeach ?>
    <?php endif ?>

    <?php if(isset($spMoi)): ?>
        <h2 style="color:#fff; text-align: center">Sản phẩm mới</h2>
    <?php foreach($spMoi as $sanPham): ?>
    <div class="box">
        <a href="./?page=product&id=<?php echo $sanPham['ID']; ?>">
            <img src="jmg/<?php echo $sanPham['anh_dai_dien']; ?>" />
            <div class="pname"><?php echo $sanPham['ten_sp']; ?></div>
            <div class="pprice">Giá : <?php echo $sanPham['gia']; ?> đ</div>
            <div class="action">
                <div style="text-align: center"> Chi Tiet</div>
            </div>
        </a>
    </div>
    <?php endforeach ?>
    <?php endif ?>

    <?php if(isset($spBanChay) and !isset($spMoi)): ?>
    <h2 style="text-align: center; color:#fff;">Sản Phẩm Bán Chạy</h2>
    <?php foreach($spBanChay as $sanPham): ?>
    <div class="box">
        <a href="./?page=product&id=<?php echo $sanPham['ID']; ?>">
            <img src="jmg/<?php echo $sanPham['anh_dai_dien']; ?>" />
            <div class="pname"><?php echo $sanPham['ten_sp']; ?></div>
            <div class="pprice">Giá : <?php echo $sanPham['gia']; ?> đ</div>
            <div class="action">
                <div style="text-align: center"> Chi Tiet</div>
            </div>
        </a>
    </div>
    <?php endforeach ?>
    <?php endif ?>


</div>