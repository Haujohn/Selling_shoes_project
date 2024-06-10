<?php 
    include '../lib/session.php';
    Session::checkSession();
    include '../classes/adminCategory.php'
?>
<?php
  $category = new adminCategory();
  if( isset($_GET['orderDate'])) {
    $order_id = $_GET['orderId'];
    $order_date = $_GET['orderDate'];
    $deliveredOrder = $category->deliverOrder($order_id, $order_date);
  }
  if(isset($_GET['deletedId'])) {
    $id = $_GET['deletedId'];
    $deliveredOrdercHECK = $category->deleteOrder($id);
  }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản lý đơn hàng</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Trang quản trị</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Trang chủ</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Quản lý
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Danh mục</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="categoryAdd.php">Thêm danh mục</a>
                        <a class="collapse-item" href="categoryAdmin.php">Quản lý danh mục</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Sản phẩm</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="productAdd.php">Thêm sản phẩm</a>
                        <a class="collapse-item" href="productAdmin.php">Quản lý sản phẩm</a>
                    </div>
                </div>
            </li>

           

           

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="orderAdmin.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Đơn hàng</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="blogAdmin.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Bài viết</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blogAddAdmin.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Thêm bài viết</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="userAdmin.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Quản lý TK người dùng</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reviewAdmin.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Quản lý đánh giá</span></a>
            </li>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper">
        <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

    <!-- Topbar Search -->
    <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..." aria-label="Search"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

    

        <!-- Nav Item - Messages -->


        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Hung Le</span>
                <img class="img-profile rounded-circle"
                    src="uploads/cd9a5e77cd.jpg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="http://localhost:120/TH/TH/Frontend/index.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Trang sản phẩm
                                </a>
            </div>
        </li>

    </ul>
<!-- Table -->
</nav>
    <div class="p-3">
        <h3 class="text-center font-bold">Quản lý đơn hàng</h3>
        <div>
        
            <?php
                $id = Session::get("userId");
                $productList = $category->getAllOrders($id);
                if($productList) {

            ?>  
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Ngày tạo đơn</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Trạng thái</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php
                    
                    
                    
                        while($result = $productList->fetch_assoc()) {

                    ?>
                    <tr>
                        <th scope="row"><?php echo $result['created_at'] ?></th>
                        <td><?php echo $result['product_name'] ?></td>
                        <td>
                            <img style="width: 50px; border-radius: 50%" src="uploads/<?php echo $result['image'] ?>" alt="">
                        </td>
                        <td><?php echo $result['quantity'] ?></td>
                        <td><?php echo $result['total_price']?>.000đ</td>
                        <td>
                            <?php
                                if($result['order_status'] == "Đang vận chuyển") {

                                
                             ?>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        ĐANG VẬN CHUYỂN
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="orderAdmin.php?orderId=<?php echo $result['id']?>&orderDate=<?php echo $result['created_at']?>">Đã vận chuyển</a>
                                        
                                    </div>
                                    </div>
                            <?php } else if($result['order_status'] == "Đã vận chuyển") { ?>
                                <button class="btn btn-success">ĐÃ VẬN CHUYỂN</button>
                            <?php } else { ?>
                                <button class="btn btn-danger">
                                    <a class="text-white text-decoration-none" href="?deletedId=<?php echo $result['id']?>">XÓA</a>
                                </button>

                                <?php } ?>
                        </td>
                    </tr>
                    <?php
                        }
                     ?>
                    
                </tbody>
            </table>
                        <?php } else {

                        ?>
                            <h5>Chưa có đơn hàng nào !</h5>
                        <?php }?>
        </div>
       
        
        
    </div>

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

  

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>