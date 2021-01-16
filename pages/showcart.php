<?php session_start();
if(empty($_SESSION['cart'])){

    header('Location:index.php');

    $list_id = array_keys($_SESSION['cart']);

    $list_id = implode(',',$list_id);

    $sql = "SELECT * FROM san_pham WHERE id IN ($list_id)";
}
?>