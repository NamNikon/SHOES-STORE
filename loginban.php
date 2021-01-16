<?php
    include  "pages/xldangki_ban.php";
    include  "pages/xldangnhap_ban.php";
    
?>
<html>
    <head>
        <title>DropShop-Đăng Nhập Bán Hàng</title>
        <link rel="stylesheet" href="css/login.css">
        
    </head>
    <body background="jmg/dow.jpg">
        
       
        <div class="hero">
        	<div class="form-box">
                <center><h2>Bán hàng cùng Drop</h2></center>
                <div class="button-box">
                <div id="btn"></div>
                    <button type="button" class="login" onclick="login()">Đăng nhập</button>
                    <button type="button" class="login" onclick="dangki()">Đăng ký</button>
                </div>
                <div class="social-icons">
                <img src="jmg/fb.png">
                <img src="jmg/gp.png">
                <img src="jmg/tw.png">
                </div>
                <form id="login" class="input-gr" method="POST" action="/doan/loginban.php">
                    <input type="text" class="input-fi" name="username" placeholder="Username Shop" required>
                    <input type="password" class="input-fi" name="password" placeholder="Password Shop" required>
                    <button type="submit" name="dangnhapban" class="submit-btn">Đăng nhập</button>
                </form>
                <form id="dangki" class="input-gr" method="POST" action="">
                    <input type="text" class="input-fi" name="ten" placeholder="Tên Shop*" required>
                    <input type="text" class="input-fi" name="username" placeholder="Username Shop *" required>
                    <input type="password" class="input-fi" name="password" placeholder="Password Shop *" required>
                    <input type="password" class="input-fi" name="repassword" placeholder="Repassword *" required>
                    <input type="text" class="input-fi" name="mail" placeholder="Email Shop *" required>
                    <input type="text" class="input-fi" name="diachi" placeholder="Địa chỉ Shop *" required>
                    <input type="text" class="input-fi" name="sdt" placeholder="Số điện thoại Shop *" required>
                    <button type="submit" name="dangkiban"  class="submit-btn">Đăng ký</button>
                </form>

            </div>
        </div>
        <script>
            var x= document.getElementById("login");
            var y= document.getElementById("dangki");
            var z= document.getElementById("btn");

            function dangki()
            {
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="110px";
            }
            function login(){
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0";
            }
        </script>
    </body>
</html>