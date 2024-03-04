<?php 
	session_start();
 	require'../../libs/function.php';
 	$id = $_GET['id'];
 	connect_db();
	global $conn;
	$sql = "SELECT * FROM product JOIN promotion ON product.ProductId = promotion.ProductId JOIN detail ON product.ProductId = detail.ProductId WHERE product.ProductId = '$id'";
	$query = mysqli_query($conn, $sql);	
	$product = mysqli_fetch_assoc($query);
 	disconnect_db();
 	if (empty($product)) {
 		header('location:../');
 	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $product['ProductName']; ?> | Trả góp 0%</title>
	<link href="../../img/icon/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="../../font/fontawesome-free-6.0.0-beta2-web/css/all.min.css">
</head>
<body>
	<header>
		<div class="wrap-main">
			<a href="../../" title="Về trang chủ Thegioididong.com" class="logo">
				<i class="icon-logo"></i>
			</a>
			<form id="search-site" action="#" method="get" accept-charset="utf-8" autocomplete="off">
				<input type="text" name="key" class="topinput" maxlength="50" placeholder="Bạn tìm gì..." id="search-keyword">
				<button class="btntop" type="submit">
					<i class="icon-topsearch"></i>
				</button>
			</form>
			<nav>
	            <a href="../" class="mobile" title="Điện thoại di động, smartphone">
	                <i class="icon-mobile"></i>Điện thoại
	            </a>
	            <a href="../../laptop/" class="laptop" title="Máy tính xách tay, Laptop">
	                <i class="icon-laptop"></i>Laptop
	            </a>
	            <a href="../../may-tinh-bang/" class="tablet" title="Máy tính bảng, tablet">
	                <i class="icon-tablet"></i>Tablet
	            </a>
	            <a href="../../phu-kien/" class="phukien" title="Phụ kiện điện thoại di động, phụ kiện tablet, phụ kiện lapto">
	                <i class="icon-phukien"></i>Phụ kiện
	            </a>
	            <a href="#" class="smartwatch" title="Đồng hồ">
	                <i class="icon-watch"></i>Đồng hồ
	            </a>
	            <a href="#" class="maydoitra" title="Máy cũ giá rẻ, máy đổi trả thegioididong">
	                <i class="icon-maydoitra"></i><span>Máy</span>Cũ giá rẻ
	            </a>

                <a href="#" class="news" title="24h công nghệ">
                    <i class="icon-news"></i>Công Nghệ
                </a>
                <a href="../../gio-hang" class="giohang" title="Giỏ hàng">
	                <i style="font-size:33px;width:30px;height: 15px;"class="fas fa-shopping-cart"></i> Giỏ hàng
					
	            </a>
	            <!-- <a href="../../login/" class="account" title="Đăng nhập">
	            	<i class="icon-account"></i> Đăng nhập
	            </a> -->
            </div>
        	</nav>
		</div>
	</header>
	<section>
		<div class="container">
			<ul class="category">
				<li><a href="../../">Trang chủ </a><span>›</span></li>
				<li><a href="../"><?php echo $product['GroupProduct']; ?></a><span>›</span></li>	
				<li><a href="../"><?php echo $product['Brand']; ?></a></li>	
			</ul>
			<h1>Điện thoại <?php if(isset($product['ProductName'])) echo $product['ProductName']; ?></h1>
			<div class="row"></div>
			<div class="product" id="product">
				<div class="image">
					<img src="<?php if(isset($product['ProductName'])) echo '../../'.$product['ProductImage'] ?>" width="400">	
				</div>
				<div class="price_sale">
					<div class="price">
						<strong><?php if($product['PricePromo']==0) echo number_format($product['PriceCurrent'],0,"","."); else echo number_format($product['PricePromo'],0,"",".") ?>₫</strong>
						<span class="hisprice"><?php if($product['PricePromo']!=0) echo number_format($product['PriceCurrent'],0,"",".").'₫'; ?></span>
						<label class="installment">Trả góp 0%</label>
					</div>
					<div class="mermory">
						<div class="default">Bạn đang xem phiên bản: <b></b></div>
					</div>
					<div class="area_promotion">
						<strong>Khuyến mãi</strong>
						<div class="infopromo">
							<span class="notnull"><?php echo $product['Promo1']; ?></span>
							<span class="notnull"><?php if($product['Promo2']!=null || $product['Promo2']!='') echo $product['Promo2']; ?></span>
							<span class="notnull"><?php if($product['Promo3']!=null || $product['Promo3']!='') echo $product['Promo3']; ?></span>
							<span class="notnull"><?php if($product['Promo4']!=null || $product['Promo4']!='') echo $product['Promo4'] ?></span>
							<span class="notnull"><?php if($product['Promo5']!=null || $product['Promo5']!='') echo $product['Promo5'] ?></span>
						</div>
						<div class="vipservice">
							<div>
								<b>Chọn thêm các dịch vụ<b style="color: #ff0011;"> miễn phí chỉ có ở TGDD</b></b>
							</div>
							<div class="ol">
								<label>
									<input type="checkbox" name="" value="" checked="checked">
									<span> Giao ngay từ cửa hàng gần bạn nhất</span>
								</label>
							</div>
							<div class="ol">
								<label>
									<input type="checkbox" name="" value="">
									<span> Chuyển danh bạ, dữ liệu qua máy mới</span>
								</label>
							</div>
							<div class="ol">
								<label>
									<input type="checkbox" name="" value="">
									<span> Mang thêm điện thoại khác để bạn xem</span>
								</label>
							</div>		
						</div>
					</div>
					<div class="area_order btn-buy">
						<a id="mua-ngay" href="buy.php?id=<?php echo $id; ?>" class="buy_now"><b>Mua ngay</b><span>Giao tận nơi hoặc nhận tại siêu thị</span></a>
						<a id="tra-gop" class="buy_repay " href=""><b>Mua trả góp 0%</b><span>Thủ tục đơn giản</span></a>
						<a class="buy_repay s " href=""><b>Trả góp  qua thẻ</b><span>Visa, Master, JCB</span></a>
					</div>
				</div>
				<div class="tableparameter">
					<h2>Thông số kỹ thuật</h2>
					<ul class="parameter">
						<li class="p217287">
							<span>Màn hình:</span><div><?php echo $product['Display']; ?></div>
						</li>
						<li>
							<span>Hệ điều hành:</span><div><a href=""><?php echo $product['OS']; ?></a></div>
						</li>
						<li>
							<span>Camera sau:</span><div><?php echo $product['RearCamera']; ?></div>
						</li>
						<li>
							<span>Camera trước:</span><div><?php echo $product['FrontCamera']; ?></div>
						</li>
						<li>
							<span>CPU:</span><div><a href=""><?php echo $product['CPU']; ?></a></div>
						</li>
						<li>
							<span>RAM:</span><div><?php echo $product['RAM']; ?></div>
						</li>
						<li>
							<span>Bộ nhớ trong:</span><div><?php echo $product['ROM']; ?></div>
						</li>
						<li>
							<span>Dung lượng pin:</span><div><?php echo $product['battery']; ?></div>
						</li>
					</ul>
					<button type="button" class="viewparameterfull">Xem thêm cấu hình chi tiết</button>
				</div>	
			</div>
		</div>
	</section>
	<footer>
		<div class="rowfoot1">
			<ul class="colfoot">
				<li><a href="" title="">Lịch sử mua hàng</a></li>
				<li><a href="" title="">Tìm hiểu về mua trả góp</a></li>
				<li><a href="" title="">Chính sách bảo hành</a></li>
				<li><a href="" title="">Chính sách đổi trả</a></li>
			</ul>
			<ul class="colfoot">
				<li><a href="" title="">Giới thiệu công ty</a></li>
				<li><a href="" title="">Tuyển dụng</a></li>
				<li><a href="" title="">Gửi góp ý, khiếu nại</a></li>
				<li><a href="" title="">Tìm siêu thị</a></li>
			</ul>
			<ul class="colfoot">
				<li><a href="" title="">Đại Học Cần Thơ</a></li>
				<li><a href="" title="">Khoa Phát Triển Nông Thôn</a></li>
				<li><a href="" title="">Công Nghệ Thông Tin</a></li>
				<li><a href="" title="">Lớp HG18V7A2 Khóa 44</a></li>
			</ul>
			<ul class="colfoot">
				<li>
					<p>Gọi mua hàng <a href="tel:18001060">1800.1060</a> (7:30 - 22:00)</p>
					<p>Gọi khiếu nại <a href="tel:18001060">1800.1060</a> (8:00 - 21:30)</p>
					<p>Gọi bảo hành <a href="tel:18001060">1800.1060</a> (8:00 - 21:30)</p>
					<p>Kỹ thuật &nbsp; &nbsp; &nbsp; &nbsp; <a href="tel:18001060">1800.1060</a> (7:30 - 22:00)</p>
				</li>
			</ul>
			
		</div>
		<div class="rowfoot2">
        <p>Đại Học Cần Thơ - Khoa Phát Triển Nông Thôn, Niên Luận Ngành CNTT Khóa 44 - SV: Nguyễn Hữu Khang lớp HG18V7A2</p>
    	</div>
	</footer>
	<script type="text/javascript" charset="utf-8" async defer>
		var notnull = document.querySelectorAll('.infopromo span')
		for (var i = 0; i < notnull.length; i++) {
			if(notnull[i].innerHTML.trim()==='') {
				notnull[i].classList.remove('notnull')
			}
		}
		$(document).ready(function($) {
			$('.infopromo .notnull').each(function() {
				if($(this).html()==="Tặng 2 suất mua Đồng hồ thời trang giảm 40% (không áp dụng thêm khuyến mãi khác)"){
					$(this).append(" <a href='#'>(click xem chi tiết)</a>")
				}
			});
		});
	</script>	
</body>
</html>
