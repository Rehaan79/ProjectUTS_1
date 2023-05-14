<?php require_once "atas.php" ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/ksicon.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>KENZO STORE</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Produk</a>
								<ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="produk.php">Detail Produk Kami</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->
	<style>
    .container {
      width: 800px;
      margin: 0 auto;
    }
    
    .product-description {
      margin-bottom: 20px;
    }
    
    .product-description h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }
    
    .product-description p {
      font-size: 16px;
      line-height: 1.5;
    }
  </style>

    					<!-- single product -->
                        <div class="col-lg-3 col-md-6">
						<div class="single-product">
							<img class="img-fluid" src="img/product/p1.jpg" alt="">
							<div class="product-details">
								
								<h6>NEW! ADIDAS y1 </h6>
								<div class="price">
									<h6>Rp.250.000</h6>
									<h6 class="l-through">Rp.350.000</h6>
								</div>
								<div class="container">
    <div class="product-description">
		<br>
    <p>(+) Original Adidas Product Guarantee</p>
	<p>(+) Selalu Mengutamakan Kualitas</p>
	<p>(+) Kami tidak menjual barang riject yang tidak layak jual</p>
	<p>(+) Garansi size jika kekecilan atau kebesaran bisa tukar dengan ketentuan dan persyaratan berlaku</p>
	<p>(+) Sameday Service, Hari ini order hari ini kirim</p>
    </div>
	</div>
								<div class="prd-bottom">
									<a href="" class="social-info">
										<a href="adidasy1.php">
										<p class="hover-text"><a href="form_pemesanan.php">Pesan Sekarang</p>
									</a>
									</a>
									</a>
								</div>
							</div>
						</div>
					</div>
					
                    <?php require_once "bawah.php" ?>