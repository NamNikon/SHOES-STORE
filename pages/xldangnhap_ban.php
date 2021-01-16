<?php
   $conn=new mysqli("localhost","root","","doan");

   if(isset($_POST['dangnhapban']))
   {
      $username = addslashes($_POST['username']);
      $password = addslashes($_POST['password']);

      if (!$username || !$password) 
         {
            echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
         }   
      $password = md5('pass_shop');
      
      $sql="SELECT use_shop, pass_shop FROM taikhoanban WHERE use_shop='$username'";
      $query = mysqli_query($conn,$sql);
      if (mysqli_num_rows($query) == 0) 
      {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
      }

      $row=mysqli_fetch_array($query);

      if($password!=$row['pass_shop'])
      {
         echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
         exit;
      }
      $_SESSION['username'] = $username;
      echo "Xin chào shop " . $username . ". Bạn đã đăng nhập thành công.";
      die();   
   }
?>