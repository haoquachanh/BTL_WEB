<div class="d-flex flex-column p-3 text-white bg-dark" style="width: 220px; position: fixed; height:100%; top:0; left: 0;">

<div class="sidebar bg-dark text-white">
  <h4 style="margin-left: 40px; margin-top: 20px ; margin-bottom:20px">Quản lý</h4>
  <hr>
  <ul class="nav flex-column">
    <li class="nav-item">
      <a href="../views/management.php?user_id=<?=$_SESSION['admin_id']?>" class="nav-link text-white" aria-current="page">Thông tin tài khoản</a>
    </li>
    <li class="nav-item">
      <a href="../controllers/managementController.php?action=manageComments" class="nav-link text-white">Bình luận & đánh giá</a>
    </li>
    <li class="nav-item">
      <a href="../controllers/managementController.php?action=manageProducts" class="nav-link text-white">Sản phẩm</a>
    </li>
    <li class="nav-item">
      <a href="../controllers/managementController.php?action=manageMembers" class="nav-link text-white">Thành viên</a>
    </li>
  </ul>
  <hr style="margin-top: 360px;">
  <a href="../views/logout.php" class="btn btn-danger" style="margin-left: 40px">Đăng xuất</a>
</div>

  </div>



  