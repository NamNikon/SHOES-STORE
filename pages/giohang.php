<?php
    session_start();
?>

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

<body>

    <?php
    if(!isset($_SESSION['username']))
    {
        header('location:../login.php');
    }

    else{
        ?>
    <div class="container">

        <?php
    if(empty($_GET['id'])){
        ?>
        <div class="row">
            <div class="col-md-12" style="text-align: center">
                <img src="../jmg/GHrong.png" alt="chua-mua" />
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-2">
                <a href="../index.php"> <button class="btn btn-danger">Tiếp tục mua
                        hàng</button></a>
            </div>
            <div class="col-md-5"></div>
        </div>
        <?php
    }
        $idsp = intval($_GET['id']);

//        if($idsp <=0 ){
//            header('Location:index.php');
//        }
        if(!isset($_SESSION['cart']))
            $_SESSION['cart'] = [];
        if(!isset($_SESSION['cart'][$idsp]))
        {
            $_SESSION['cart'][$idsp] = [
                    'quality' => 1
            ];
            header('Location:showcart.php');
        }else
        {
            $_SESSION['cart'][$idsp]['quality'] ++;
            header('Location:showcart.php');
        }

    ?>
    </div>
    <?php
    }
    ?>
</body>