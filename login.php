<?php
    include  "pages/xldangki.php";
    include  "pages/xldangnhap.php";
?>
<html>

<head>
    <title>DropShop-Đăng Nhập</title>
    <link rel="stylesheet" href="css/login.css">

</head>

<body>
    <div class="hero">
        <div class="form-box">
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
            <form id="login" class="input-gr" method="POST" action="/doan/login.php">
                <input type="text" class="input-fi" name="username" placeholder="Username" required>
                <input type="password" class="input-fi" name="password" placeholder="Password" required>
                <button type="submit" name="dangnhap" class="submit-btn">Đăng nhập</button>
            </form>
            <form id="dangki" class="input-gr" method="POST" action="/doan/login.php">
                <input type="text" class="input-fi" name="ten" placeholder="Họ Tên Bạn *" required>
                <input type="text" class="input-fi" name="username" placeholder="Username *" required>

                <input type="password" class="input-fi" name="password" placeholder="Password *" required>
                <input type="password" class="input-fi" name="repassword" placeholder="Repassword *" required>
                <input type="text" class="input-fi" name="mail" placeholder="Email *" required>
                <input type="text" class="input-fi" name="diachi" placeholder="Địa chỉ *" required>
                <input type="text" class="input-fi" name="sdt" placeholder="Số điện thoại *" required
                    onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                <button type="submit" name="dangki" class="submit-btn">Đăng ký</button>
            </form>
        </div>
    </div>

    <script>
    var x = document.getElementById("login");
    var y = document.getElementById("dangki");
    var z = document.getElementById("btn");

    function dangki() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }

    function login() {
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
    }
    </script>
</body>

</html>