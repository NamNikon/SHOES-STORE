<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-5"></div>
    <div class="col-md-2"></div>
    <div class="col-md-2"></div>
</div>

<?php

if(!isset($_SESSION['username']))
{
    echo "<script>alert('Bạn phải đăng nhập trước khi thực hiện chức năng này '); location.href='/doan/index.php'</script>";
}

else{
    session_start();
    if(empty($_POST['id']))
    {
        header('location:index.php');
    }

    $id = intval($_POST['id']);

    if($id <= 0){
        header('location:index.php');
    }

    if(!isset($_SESSION['cart']))
        $_SESSION['cart'] = [];

    if(!isset($_SESSION['cart'][$id]))
    {
        $_SESSION['cart'][$id] = 1;
    }
    else{
        $_SESSION['cart'][$id] ++;
    }
    header('Location:showcart.php');
}

?>