<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">

<title>UI KIT - Marketplace and Ecommerce html template</title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<!-- jQuery -->
<script src="/js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

<!-- plugin: fancybox  -->
<script src="/plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
<link href="/plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

<!-- plugin: owl carousel  -->
<link href="/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
<script src="/plugins/owlcarousel/owl.carousel.min.js"></script>

<!-- custom style -->
<link href="/css/ui.css" rel="stylesheet" type="text/css"/>
<link href="/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<!-- custom javascript -->
<script src="/js/script.js" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>

</head>
<body>
@section('header')
    @show

<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg padding-top-sm">
<div class="container">

<div class="row row-sm">
	<aside class="col-md-3">
<div class="card">
<header class="card-header bg-secondary white">
	<i class="icon-menu"></i> Categories
</header>
	<ul class="menu-category">
		<li> <a href="#">Food &amp Beverage </a></li>
		<li> <a href="#">Home Equipments </a></li>
		<li> <a href="#">Machinery Items </a></li>
		<li> <a href="#">Toys & Hobbies  </a></li>
		<li> <a href="#">Consumer Electronics  </a></li>
		<li> <a href="#">Beauty & Personal Care  </a></li>
		<li class="has-submenu"> <a href="#">More category  <i class="icon-arrow-right pull-right"></i></a>
			<ul class="submenu">
				<li> <a href="#">Food &amp Beverage </a></li>
				<li> <a href="#">Home Equipments </a></li>
				<li> <a href="#">Machinery Items </a></li>
				<li> <a href="#">Toys & Hobbies  </a></li>
				<li> <a href="#">Consumer Electronics  </a></li>
				<li> <a href="#">Home & Garden  </a></li>
				<li> <a href="#">Beauty & Personal Care  </a></li>
			</ul>
		</li>
	</ul>
</div> <!-- card.// -->
	</aside> <!-- col.// -->
	<div class="col-md-6">
<div class="card">
	<div class="card-body">
<!-- ================= main slide ================= -->
@yield('cuerpo')
<!-- ============== main slidesow .end // ============= -->
	</div> <!-- card-body .// -->
</div> <!-- card.// -->
	</div> <!-- col.// -->
	<aside class="col-md-3">

<div class="card bg-white h-100 d-flex flex-column">
  <div class="p-3 flex-grow-1"> <p>Some item group</p> <a href="#" class="btn btn-sm btn-primary round">View more</a></div>
  <div class="p-3 bg flex-grow-1"> <p>Some item group </p><a href="#" class="btn btn-sm btn-primary round">View more</a></div>
  <div class="p-3 flex-grow-1"> <p>Some item group</p> <a href="#" class="btn btn-sm btn-primary round">View more</a></div>
</div>

	</aside>
</div>
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION MAIN END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y bg">
<div class="container">

<div class="card mb-3">
	<div class="card-body">

<header class="section-heading">
<h3 class="title-section">Main section is here</h3>
</header>

<article>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


</article>
	</div> <!-- card-body .// -->
</div> <!-- card.// -->

<div class="card">
	<div class="card-body">

<article>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><br><br><br>
</article>
	</div> <!-- card-body .// -->
</div> <!-- card.// -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg2">
	<div class="container">
		<section class="footer-bottom row">
			<div class="col-sm-6"> 
				<p> Made with <3 <br>  by Vosidiy M.</p>
			</div>
			<div class="col-sm-6">
				<p class="text-sm-right">
Copyright &copy 2018 <br>
<a href="http://bootstrap-ecommerce.com">Bootstrap-ecommerce UI kit</a>
				</p>
			</div>
		</section> <!-- //footer-top -->
	</div><!-- //container -->
</footer>
<!-- ========================= FOOTER END // ========================= -->


</body>
</html>