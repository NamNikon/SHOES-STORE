 <div class="container">
     <ul class="navbar-nav">
         <li class="nav-item">
             <form class="form-inline my-2 my-lg-0" action="" method="get">
                 <input type="text" class="form-control w-50" id="searchf" name="tim_kiem" placeholder="Search...">
                 &emsp;
                 <button class="btn btn-success my-2 my-sm-0" type="submit" id="searchbtn" value="Tìm kiếm">Tìm
                     Kiếm <i class="fas fa-search"></i></button>
             </form>
         </li>
     </ul>
     <h4 style="color: aliceblue">Tất Cả Sản Phẩm</h4>
     <?php if(isset($_REQUEST['tim_kiem'])): ?>
     <?php if(isset($thongBao)): ?>
     <h4><?php echo $thongBao;  ?></h4>
     <?php endif ?>
     <?php foreach($kqTimKiem as $sanPham): ?>
     <div class="box">
         <a href="./?page=product&id=<?php echo $sanPham['ID']; ?>">
             <img src="jmg/<?php echo $sanPham['anh_dai_dien']; ?>" />
             <div class="pname"><?php echo $sanPham['ten_sp']; ?></div>
             <div class="pprice">Giá : <?php echo $sanPham['gia']; ?> đ</div>
             <div class="action">
                 <center> Chi Tiet</center>
             </div>
         </a>
     </div>
     <?php endforeach ?>
     <?php else: ?>
     <?php foreach($tatCaSanPham as $sanPham): ?>
     <div class="box">
         <a href="./?page=product&id=<?php echo $sanPham['ID']; ?>">
             <img src="jmg/<?php echo $sanPham['anh_dai_dien']; ?>" />
             <div class="pname"><?php echo $sanPham['ten_sp']; ?></div>
             <div class="pprice">Giá : <?php echo $sanPham['gia']; ?> đ</div>
             <div class="action">
                 <center> Chi Tiet</center>
             </div>
         </a>
     </div>
     <?php endforeach ?>
     <?php endif ?>
 </div>