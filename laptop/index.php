<?php 
	require '../libs/function.php';
	connect_db();
	global $conn;
	$sql = "SELECT count(ProductId) AS total FROM product WHERE GroupProduct = 'Laptop' ";
	$query = mysqli_query($conn, $sql);
	if($query){
		$row = mysqli_fetch_assoc($query);
	}
	$total_records = $row['total'];
	$group = "Laptop";
	$data = group_product($group,8);
	disconnect_db();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laptop | Máy tính xách tay Giá rẻ, Trả góp 0%</title>
	<link href="../img/icon/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<script src="../js/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="../font/fontawesome-free-6.0.0-beta2-web/css/all.min.css">
</head>

<body>
	<header>
		<div class="wrap-main">
			<a href="../" title="Về trang chủ Thegioididong.com" class="logo">
				<i class="icon-logo"></i>
			</a>
			<form id="search-site" action="#" method="get" accept-charset="utf-8" autocomplete="off">
				<input type="text" name="key" class="topinput" maxlength="50" placeholder="Bạn tìm gì..." id="search-keyword">
				<button class="btntop" type="submit">
					<i class="icon-topsearch"></i>
				</button>
			</form>
			<nav>
	            <a href="../dtdd" class="mobile" title="Điện thoại di động, smartphone">
	                <i class="icon-mobile"></i>Điện thoại
	            </a>
	            <a href="" class="laptop actmenu" title="Máy tính xách tay, Laptop">
	                <i class="icon-laptop"></i>Laptop
	            </a>
	            <a href="../may-tinh-bang" class="tablet" title="Máy tính bảng, tablet">
	                <i class="icon-tablet"></i>Tablet
	            </a>
	            <a href="#" class="phukien" title="Phụ kiện điện thoại di động, phụ kiện tablet, phụ kiện lapto">
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
				<a href="../gio-hang" class="giohang" title="Giỏ hàng">
	                <i style="font-size:33px;width:30px;height: 15px;"class="fas fa-shopping-cart"></i> Giỏ hàng
					
	            </a>
	            <!-- <a href="../login/" class="account" title="Đăng nhập">
	            	<i class="icon-account"></i> Đăng nhập
	            </a> -->
            </div>
        	</nav>
		</div>
	</header>
	<section>
		<div class="left">
			<img src="../img/banner/800-170-800x170-75.png">
		</div>
		<div class="right">
			<img src="../img/banner/390-80copy-390x80.png" alt="">
			<img src="../img/banner/390-80-390x80-2.png" alt="">
		</div>
		<div class="clr"></div>
		<div class="filter">
			<div class="brand">
				<a href="#">
					<img src="../img/brand/Macbook44-b_41.png">
				</a>
				<a href="#">
					<img src="../img/brand/Asus44-b_35.jpg">
				</a>
				<a href="#">
					<img src="../img/brand/HP-Compaq44-b_36.jpg">
				</a>
				<a href="#">
					<img src="../img/brand/Lenovo44-b_36.jpg">
				</a>
				<a href="#">
					<img src="../img/brand/Acer44-b_37.jpg">
				</a>
				<a href="l#">
					<img src="../img/brand/Dell44-b_34.jpg">
				</a>
				<a href="#">
					<img src="../img/brand/Huawei42-b_30.jpg">
				</a>
			</div>
		</div>
		<h1 class="h1">Danh mục laptop</h1>
		
		<ul class="homeproduct laptop">
			<?php foreach ($data as $item) { ?>
			<li class="item">
				<a href="detail/?id=<?php echo $item['ProductId'] ?>">
					<img src="../<?php echo $item['ProductImage'];?>" >
					<h3><?php echo $item['ProductName']; ?></h3>
					<div class="price">
						<strong><?php if($item['PricePromo']==0) echo number_format($item['PriceCurrent'],0,"","."); else echo number_format($item['PricePromo'],0,"","."); ?>₫</strong>
						<span><?php  if($item['PricePromo']!=0) echo number_format($item['PriceCurrent'],0,"",".") .'₫'; ?></span>
					</div>
					<div class="promo"><?php echo $item['Promo1'] ?></div>
					<?php if($item['PricePromo'] != 0){ ?>
					<label class="discount">GIẢM <?php echo floor((($item['PriceCurrent']-$item['PricePromo'])/$item['PriceCurrent'])*100).'%';?> </label>
					<?php } ?>
				</a>
			</li>
			<?php } ?>
		</ul>
		<a class="viewmore">Xem thêm <span><?php echo $total_records-8; ?></span> laptop</a>
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
        <p> Đại Học Cần Thơ - Khoa Phát Triển Nông Thôn, Niên Luận Ngành CNTT Khóa 44 - SV: Nguyễn Hữu Khang lớp HG18V7A2 </p>
    	</div>
	</footer>
	<script type="text/javascript">
		var current = 1;
		var group = "Laptop";
		var limit = 8;
		$(document).ready(function() {
			$('.viewmore').click(function(event) {
				total = $('span',this).html()
				total-=8
				$('span',this).html(total)
				if($('span',this).html()<=0){
					$(this).css('display','none')
				}
				current+=1;
				$.get('../pagination.php',{i:current,group:group,limit:limit},function(data){
					$('.homeproduct').append(data)
				})
			});

		});
	</script>
</body>
</html>