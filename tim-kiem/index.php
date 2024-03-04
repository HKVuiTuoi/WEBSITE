<?php  require '../libs/function.php';
	$keyword = $_GET['key'];
	global $conn;
	connect_db();
	$sql = "SELECT * FROM product JOIN promotion ON product.ProductId = promotion.ProductId WHERE INSTR(ProductName,'$keyword')>0 OR INSTR(GroupProduct,'$keyword')>0";
	$query = mysqli_query($conn, $sql);
	$result = array();
	if($query) {
		while($row = mysqli_fetch_assoc($query)){
			$result[] = $row;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kết quả tìm kiếm</title>
	<link href="../img/icon/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<script src="../js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="./font/fontawesome-free-6.0.0-beta2-web/css/all.min.css">
</head>
<body>
	<header>
		<div class="wrap-main">
			<a href="../" title="Về trang chủ Thegioididong.com" class="logo">
				<i class="icon-logo"></i>
			</a>
			<form id="search-site" action="tim-kiem/" method="get" accept-charset="utf-8" autocomplete="off">
				<input type="text" name="key" class="topinput" maxlength="50" placeholder="Bạn tìm gì..." id="search-keyword">
				<button class="btntop" type="submit">
					<i class="icon-topsearch"></i>
				</button>
				<ul class="wrap-suggestion">
				</ul>
			</form>
			<nav>
	            <a href="../dtdd/" class="mobile" title="Điện thoại di động, smartphone">
	                <i class="icon-mobile"></i>Điện thoại
	            </a>
	            <a href="../laptop/" class="laptop" title="Máy tính xách tay, Laptop">
	                <i class="icon-laptop"></i>Laptop
	            </a>
	            <a href="../may-tinh-bang/" class="tablet" title="Máy tính bảng, tablet">
	                <i class="icon-tablet"></i>Tablet
	            </a>
	            <a href="phukien/" class="phukien" title="Phụ kiện điện thoại di động, phụ kiện tablet, phụ kiện lapto">
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
				<a href="gio-hang" class="giohang" title="Giỏ hàng">
	                <i style="font-size:33px;width:30px;height: 15px;"class="fas fa-shopping-cart"></i> Giỏ hàng
					
	            </a>
	            <!-- <a href="login/" class="account" title="Đăng nhập">
	            	<i class="icon-account"></i> Đăng nhập
	            </a> -->
            </div>
        	</nav>
		</div>
	</header>
	<section>
		<div class="tit">
			<h2>Kết quả tìm kiếm:</h2>
		</div>
		<ul class="listsearch homeproduct">
			<?php foreach ($result as $value) { ?>
			<li class="item">
				<a href="laptop/detail/?id=<?php echo $value['ProductId'] ?>">
					<img src="../<?php echo $value['ProductImage'];?>" >
					<h3><?php echo $value['ProductName']; ?></h3>
					<div class="price">
						<strong><?php if($value['PricePromo']==0) echo number_format($value['PriceCurrent'],0,"","."); else echo number_format($value['PricePromo'],0,"","."); ?>₫</strong>
						<span><?php  if($value['PricePromo']!=0) echo number_format($value['PriceCurrent'],0,"",".") .'₫'; ?></span>
					</div>
					<div class="promo"><?php echo $value['Promo1'] ?></div>
					<?php if($value['PricePromo'] != 0){ ?>
					<label class="discount">GIẢM <?php echo floor((($value['PriceCurrent']-$value['PricePromo'])/$value['PriceCurrent'])*100).'%';?> </label>
					<?php } ?>
				</a>
			</li>
			<?php } ?>
		</ul>
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
	<script type="text/javascript">
		$('ul.wrap-suggestion').css('display','none')
	</script>
</body>
</html>