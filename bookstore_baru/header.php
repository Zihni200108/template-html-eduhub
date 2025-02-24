<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Asap&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="assets/css/style.css"  media="screen,projection"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="assets/slick-master/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/slick-master/slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title></title>
</head>
<body>
	<section class="search-container">
		<div class="container">
			<form action="/search" method="post">
				<div class="row">
					<div class="col s10">
						<input type="search" name="s" class="form-control" placeholder="Cari Ketik Disini...">
					</div>
					<div class="col s2">
						<button type="submit" class="btn"><i class="material-icons">search</i></button>
					</div>
				</div>
			</form>
		</div>
	</section>
	<header>
		<div class="header-top"> 
			<div class="container">
				<div class="row">
					<div class="col l9 m8 s9">
						<div class="header-logo">
							<img src="assets/img/group-6.png">
						</div>
						<ul class="sidenav" id="mobile-nav">
							<li><a class="home" href="sass.html">HOME</a></li>
							<li><a href="badges.html">PRODUK</a></li>
							<li><a href="collapsible.html">BLOG</a></li>
							<li><a href="#"><i class="material-icons">shopping_cart</i></a></li>
							<li><a href="sass.html" class="login">Login</a></li>
							<li><a href="badges.html" class="daftar">Daftar</a></li>
						</ul>
						<nav class="nav-in-header">
							<a href="#" class="sidenav-trigger" data-target="mobile-nav">
								<i class="material-icons">menu</i>
							</a>
							<ul class="hide-on-med-and-down" id="nav-mobile">
								<li><a class="home" href="sass.html">HOME</a></li>
								<li><a href="badges.html">PRODUK</a></li>
								<li></li>
								<li><a href="collapsible.html">CONTACT</a></li>
							</ul>
						</nav>	
					</div>
					<div class="col l3 m4 s3">
						
						<div class="hide-on-med-and-down right-header">
							<a href="sass.html" class="login">Login</a>
							<a href="badges.html" class="daftar">Daftar</a>
							<div class="shop-icon">
								<a class="hide-on-med-and-down" href="#"><i class="material-icons">shopping_cart</i></a>
							</div>

						</div>
					</div>
				</div>
			</div> 
		</div> 
	</header>
	<script type="text/javascript" src="assets/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>       
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script type="text/javascript" src="assets/slick-master/slick/slick.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
			$('.sidenav').sidenav();
		});
		$(document).ready(function(){
			$('.carousel.carousel-slider').carousel({
				fullWidth: true
			});
		});
		function open_search(){
			$('.search-container').animate({
				top: 0
			}, 300);
			$('header').animate({
				marginTop: '56px'
			}, 300);
			$('header nav.nav-desktop').animate({
				top: '56px'
			}, 300);
			$('.search-container input').focus();

		}

		$(document).ready(function(){

			$('.alert button').click(function(){
				$(this).parent().remove();
			})

			$('.search-container input').on('blur',function(){
				$('.search-container').animate({
					top: '-56px'
				}, 200);
				$('header').animate({
					marginTop: 0
				}, 200);
				$('header nav.nav-desktop').animate({
					top: 0
				}, 300);
			});


			var didScroll;
			var lastScrollTop = 0;
			var delta = 5;
			var navbarHeight = $('header').height();

			$(window).scroll(function(event){
				didScroll = true;
			});

			setInterval(function() {
				if (didScroll) {
					hasScrolled();
					didScroll = false;
				}
			}, 250);

			function hasScrolled() {
				var st = $(this).scrollTop();

            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
            	return;

            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > navbarHeight){
                // Scroll Down
                $('.nav-desktop').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                	$('.nav-desktop').removeClass('nav-up').addClass('nav-down');
                }
            }

            lastScrollTop = st;
        }

    })
		$(document).ready(function(){
			$('.sidenav').sidenav();
		}); 
		$(document).ready(function(){
			$('.slider-nav').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				fade: true,
				asNavFor: '.slider-for'
			});
			$('.slider-for').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				asNavFor: '.slider-nav',
				dots: false,
				arrows: false,
				centerMode: true,
				focusOnSelect: true,
				vertical:true
			});
		}); 
		$(document).ready(function(){
			$('img.zoom-able')
			.wrap('<span style=""></span>')
			.css('display', 'block')
			.parent()
			.zoom();
		});
	</script>
