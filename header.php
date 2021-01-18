<?php
   session_start();
?>
<div class="row">
    <div class="col-md-3" id="logo">
        <a href="index.php"><img src="jmg/logo.png" /></a>
    </div>
    <div class="col-md-9">
        <div class="row" style="padding-top: 60px;">
            <div class="col-md-8">
                <img id="title" src="jmg/title.png" />
            </div>

            <div class="col-md-4">
                <nav class="navbar navbar-expand-sm">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <?php
                        if(isset($_SESSION['username']))
                        {
                            $username = $_SESSION['username'];
                           ?>
                            <button class="btn btn-info" id="user" ><i
                                        class="fas fa-user"></i> <?php
                                        echo $username ?> || <a
                                        href="pages/logout.php" style="color: #fff"> Thoát </a>
                            </button>
                                <?php
                        }
                        else{ ?>
                            <a href="login.php">
                                <button class="btn btn-primary">Đăng nhập <i class="fas fa-user"></i></button>
                            </a>
                                                        <?php
                        } ?>
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