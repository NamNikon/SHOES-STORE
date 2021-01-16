<?php

$conn=new mysqli("localhost","root","","doan");


if(isset($_POST['dangki']))
  {
    $fullname = isset($_POST['ten']) ? $_POST['ten'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $mail     = isset($_POST['mail']) ? $_POST['mail'] : '';
    $diachi   = isset($_POST['diachi']) ? $_POST['diachi'] : '';
    $sdt      = isset($_POST['sdt']) ? $_POST['sdt'] : '';
    $repassword= isset($_POST['repassword']) ? $_POST['repassword'] : '';

    if($password=$repassword)
      {

        $sql = "SELECT *FROM taikhoan WHERE username=".$username;
        $result1 = mysqli_query($conn,$sql);
        $num1=mysqli_num_rows($result1);
        if($num1 >0)
          {
          echo "Tai khoan ton tai";
          }
        else
          {
            $password=md5('password');
            $sql2="INSERT INTO taikhoan (HoTen,username,password,Email,SDT,diachi) VALUES ('$fullname','$username','$password','$mail','$sdt','$diachi')";
            $result2=mysqli_query($conn,$sql2);
            if($result2)
              {
                echo "thanh cong";
              }
            else
              {
                echo "that bai";
              }
          }
      }
      else
      {
        echo "Password va repassword phai giong nhau";
      }
  }
?>