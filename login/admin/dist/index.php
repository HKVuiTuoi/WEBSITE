<?php session_start();
    require'../../../libs/function.php';
    $orders = info_orders();
    $product = show_all();
    disconnect_db();
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Trang Admin thế giới di động</title>
        <link href="../../../img/icon/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <style type="text/css">.table td{vertical-align: middle;}</style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Xin chào admin</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <!-- <a class="dropdown-item" href="#">Cài đặt</a>
                        <a class="dropdown-item" href="#">Hoạt động đăng nhập</a>
                        <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="../../index.php">Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Trang chủ</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Bảng điều kiển
                            </a>
                            <!-- <div class="sb-sidenav-menu-heading">Giao diện</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Bố trí
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Bảng điều hướng</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="register.php">Create Account</a>
                                            <a class="nav-link" href="password.php">Change Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div> -->
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="charts.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Biểu đồ
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Sản phẩm
                            </a>
                            <a class="nav-link" href="orders.php">
                                <div class="sb-nav-link-icon" style="display: flex">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 4h14v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4zm7-2.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
                                    </svg>
                                </div>
                               Đơn hàng
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Đăng nhập bởi:</div> <?php echo $_SESSION['username']; ?> 
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Bảng Điều Khiển</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Bảng điều kiển</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Danh sách sản phẩm
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div style="margin-bottom: 15px;">
                                        <a class="btn btn-success" href="add-product.php" class="add">Thêm sản phẩm</a>
                                    </div>
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Hình sản phẩm</th>
                                                <th>Giá giảm (nếu có)</th>
                                                <th>Giá sản phẩm</th>
                                                <th>Nhãn hiệu</th>
                                                <th>Số lượng</th>
                                                <th>Loại sản phẩm</th>
                                                <th>Chỉnh sửa</th>
                                            </tr>
                                        </thead>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name Product</th>
                                                <th>Image Product</th>
                                                <th>Promotion Price (if available)</th>
                                                <th>Original Price </th>
                                                <th>Brand</th>
                                                <th>Quantity</th>
                                                <th>Group</th>
                                                <th>Tool</th>
                                            </tr>
                                        </tfoot> -->
                                        <tbody>
                                            <tr>
                                                <?php
                                                    foreach ($product as $item) {?>
                                                <td><?php echo $item['ProductId']; ?></td>
                                                <td class="name"><?php echo $item['ProductName']; ?></td>
                                                <td><img src="<?php echo '../../../'.$item['ProductImage']; ?>" height="100"></td>
                                                <td class="price"><?php echo number_format($item['PricePromo']); ?>đ</td>
                                                <td class="price old"><?php echo number_format($item['PriceCurrent']); ?>đ</td>
                                                <td class="brand"><?php echo $item['Brand']; ?></td>
                                                <td><?php echo $item['Quantity']; ?></td>
                                                <td class="group"><?php echo $item['GroupProduct']; ?></td>
                                                <td>
                                                    <a class="btn btn-primary" href="edit-product.php?id=<?php echo $item['ProductId'];?>">Sửa</a>
                                                    <a class="btn btn-danger" href="../delete-product.php?id=<?php echo $item['ProductId'];?>" onclick="return confirm('Xóa sản phẩm ?')">Xóa</a>
                                                </td>
                                            </tr>
                                                <?php } ?>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                       Biều Đồ Khu Vực
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Biểu Đồ Thanh
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Danh sách đơn hàng
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Khách Hàng</th>
                                                <th>Phái</th>
                                                <th>Số ĐT</th>
                                                <th>Địa Chỉ </th>
                                                <th>Ngày Đặt </th>
                                                <th>Trạng Thái</th>
                                                <th>Đơn Hàng</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="data-notnull">
                                                <?php
                                                    foreach ($orders as $data) {?>
                                                <td class="CustomID"><?php echo $data['CustomID']; ?></td>
                                                <td><?php echo $data['FullName']; ?></td>
                                                <td><?php echo $data['Gender']; ?></td>
                                                <td>0<?php echo $data['PhoneNumber']; ?></td>
                                                <td><?php echo $data['Address'] ?></td>
                                                <td><?php echo $data['CreateTime']; ?></td>
                                                <td><?php if($data['Status']==0){ echo "<div class='text-danger'>Chưa giao hàng</div>";}else echo "<div class='text-success'>Đã giao hàng</div>"; ?></td>
                                                <td><a href="info_orders.php?id=<?php echo $data['CustomID']; ?>">Thông Tin Đơn Hàng</a></td>
                                            </tr>
                                                <?php } ?>
                                            <tr>
                                                <td valign="top" colspan="10" class="dataTables_empty" style="text-align: center;">Không Có Dữ Liệu Trong Bảng</td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Phát triển bởi &copy; Nguyễn Hữu Khang CNTT HG18V7A2 </div>
                            <div>
                                <a href="#">Chính sách riêng tư</a>
                                &middot;
                                <a href="#">Điều kiển &amp; Phát triển</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function() {
                $('.dataTables_empty').css('display', 'none');
                if ($('.CustomID').text()=='') {
                    $('.dataTables_empty').css('display', 'block'); 
                }
                
            });
        </script>
    </body>
</html>
