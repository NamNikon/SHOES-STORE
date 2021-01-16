<?php
   $conn=new mysqli("localhost","root","","doan");

   if(isset($_POST['dangnhap']))
   {
      $username = addslashes($_POST['username']);
      $password = addslashes($_POST['password']);

      $password = md5('password');
      
      $sql="SELECT username, password FROM taikhoan WHERE username='$username'";
      $query = mysqli_query($conn,$sql);
      if (mysqli_num_rows($query) == 0) 
      {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
      }

      $row=mysqli_fetch_array($query);

      if($password!=$row['password'])
      {
         echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
         exit;
      }
      $_SESSION['username'] = $username;
      echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công.";
      die();   
   }
?>