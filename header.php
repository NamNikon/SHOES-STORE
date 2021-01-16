<?php

    session_start();
?>
<div class="row">
    <div class="col-md-3" id="logo">
        <a href="index.php"><img src="jmg/logo.png" /></a>
    </div>
    <div class="col-md-9" id="title">
        <div class="row" style="padding-top: 60px;">
            <div class="col-md-8">
                <img src="jmg/title.png" />
            </div>

            <div class="col-md-4">
                <nav class="navbar navbar-expand-sm">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="login.php">
                                <button class="btn btn-primary">Đăng nhập <i class="fas fa-user"></i></button>
                            </a>
                        </li>
                        <li class="nav-item">
                            &emsp;
                        </li>
                        <li class="nav-item">
                            <a href="pages/giohang.php">
                                <button class="btn btn-warning">Giỏ hàng <i class="fas fa-shopping-cart"></i></button>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>