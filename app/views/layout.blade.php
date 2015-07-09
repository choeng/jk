<!DOCTYPE html>
<html>
<head>
	<title>{{isset($pageTitle) ? $pageTitle : 'Home'}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{HTML::style('assets/reset.css')}}
	{{HTML::style('assets/custom/custom-bootstrap.css')}}
	{{HTML::style('assets/plugins/animated-headline/style.css')}}
	{{HTML::style('assets/plugins/fixed-background/style.css')}}
	{{HTML::style('assets/plugins/thumbnail-grid/component.css')}}
	<style type="text/css">
		body{
			padding-top: 50px;
		}
		.navbar.trans {
			background-color: transparent;
			background: transparent;
			border-color: transparent;
		}
		/*@media(min-width: 768px){
		.navbar-brand.centered{
			float: none;
			position: relative;
			display: block;
			left: 50%;
			margin: 20px auto;
			text-align: center;
			width: 100%;
		}
	}*/
	/*This should be around line 4713 in your bootstrap.css */
		/*.navbar-collapse.collapse.trans {
			text-align: center;
			height: auto !important;
		}*/
		/*This should be around line 4866 in your bootstrap.css */
		/*.navbar-nav.trans {
			display:inline-block;
			float: none;
			margin: 0;
		}*/
	</style>
	{{HTML::script('assets/modernizr.js')}}
</head>
<body>
	<header class="navbar navbar-fixed-top navbar-default">
		<nav class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>	
				<a class="navbar-brand" href="/">
					<img src="/assets/images/Jogja_Istimewa.svg" alt="logo-jogja">
				</a>
			</div>
			<div class="navbar-collapse collapse navbar-responsive-collapse">
				<ul class="nav navbar-nav trans">
					<li><a href="/acara-dan-atraksi">Acara dan Atraksi</a></li>
					<li class="dropdown">
						<a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Akomodasi <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="/akomodasi/hotel">Hotel</a></li>
							<li><a href="/akomodasi/restoran">Restoran</a></li>
							<li><a href="/akomodasi/transportasi">Transportasi</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Destinasi <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="/destinasi/bangunan-cagar-budaya">Bangunan Cagar Budaya</a></li>
							<li><a href="/destinasi/kampung-wisata">Kampung Wisata</a></li>
							<li><a href="/destinasi/landmark">Landmark</a></li>
							<li><a href="/destinasi/museum">Museum</a></li>
							<li><a href="/destinasi/night-life">Night Life</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	@yield('content')
	{{HTML::script('assets/jquery-2.1.3.min.js')}}
	{{HTML::script('assets/bootstrap/js/bootstrap.min.js')}}
	{{HTML::script('assets/plugins/animated-headline/main.js')}}
	{{HTML::script('assets/plugins/thumbnail-grid/grid.js')}}
	<script type="text/javascript">
		$(function() {
			Grid.init();
		});
// 		// media query event handler
// 		if (matchMedia) {
// 			var mq = window.matchMedia("(min-width: 768px)");
// 			mq.addListener(WidthChange);
// 			WidthChange(mq);
// 		}
//  	// media query change
// function WidthChange(mq) {
// 	if (mq.matches) {
// 		// window width is at least 500px
// 		$('#no-trans').hide();
// 		$('#trans').show();
// 	}
// 	else {
// 		// window width is less than 500px
// 		$('#no-trans').show();
// 		$('#trans').hide();
// 	}
// }
</script>
</body>
</html>