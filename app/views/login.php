
<?php
    session_start();
    
    if (isset($_SESSION['user_id'])) {
      header("Location: home.php");
    }
?>
<?php  require_once('inc/head.php'); ?> 
<title>Đăng nhập</title>
<?php
require_once '../models/loginModel.php';
require_once '../DB.php';

if(isset($_POST['LoginAction'])){
      
      $email=$_POST['email'];
      $password=$_POST['password'];
      $result=adminCheckLogin($email,$password);
      if($result){
            $current_admin = mysqli_fetch_assoc($result);
            $_SESSION['admin_name'] = $current_admin['fullName'];
            $_SESSION['admin_id'] = $current_admin['id'];
            header("Location: management.php?user_id=".$current_admin['id']);
      }else{
            $message="Tài khoản hoặc mật khẩu không chính xác!";
      }
}


?>

</head>
<body>

<style>

</style>
<div class="container d-flex justify-content-center align-items-center h-10 w-300 my-container" style="margin-top: 200px">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title text-center mb-4">Đăng nhập</h2>
      <?php 
        if(isset($message)){
          echo '<div class="alert alert-danger">'.$message.'</div>';
        }
      ?>
      <form action="" method="post">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Mật khẩu</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block m-4" name="LoginAction">Đăng nhập</button>
      </form>
    </div>
  </div>
</div>


</body>
</html>


