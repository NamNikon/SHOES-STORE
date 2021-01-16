<?php 

$db=getDbConnect();

$dsLoaiSP = $db->query("SELECT * FROM loai_san_pham")->fetchAll();

$dsHangSX = $db->query("SELECT * FROM hang_san_xuat")->fetchAll();


?>
<h3 class="text-center">Sản Phẩm</h3>
<ul class="nav flex-column text-center">
    <?php foreach ($dsLoaiSP as $loaiSP): ?>
    <li class="nav-item">
        <a class="nav-link" style="color: #fff" href="?loai_sp=<?php echo $loaiSP['id']?>"><?php
            echo $loaiSP['ten_loai_sp']; ?></a>
    </li>
    <?php endforeach ?>
</ul>

<h3 class="text-center">Hãng Sản Xuất</h3>
<ul class="nav flex-column text-center">
    <?php foreach ($dsHangSX as $hangSX): ?>
    <li class="nav-item">
        <a class="nav-link" style="color: #fff" href="?hang_sx=<?php echo $hangSX['id']?>"><?php
            echo $hangSX['hang_sx']; ?></a>
    </li>
    <?php endforeach ?>
</ul>