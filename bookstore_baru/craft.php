<?php include('header.php') ?>
<div class="filter-button hide-on-large-only" onclick="$('body').addClass('fixed-screen'); $('.filter-content').removeClass('hide-on-med-and-down');$('.filter-content .btn-cancel').show();$(this).hide();"> <i class="fa fa-filter"></i> Filter</div>



<main>
	<div class="main-img">
		<img src="assets/img/main_img.png">
		<div class="title">
			<h1>Detail Produk</h1>
			<p>Lorem ipsum dolor sit amet consectures</p>
		</div>
	</div>
	<div class="container">
		<nav>
			<div class="nav-wrapper">
				<ul id="nav-mobile" class="left .show-on-medium-and-down">
					<li class="list"><a href="sass.html"><i class="material-icons">format_list_bulleted</i></a></li>
					<li class="apps"><a href="sass.html"><i class="material-icons">apps</i></a></li>
					<li class="search"><a href="javascript:;" onclick="open_search()"><i class="material-icons">search</i></a></li>
					<li class="input-craft"><input placeholder="Placeholder" id="first_name" type="text" class="validate"></li>
				</ul>

				<select class="browser-default">
					<option value="" disabled selected>Show : 9</option>
					<option value="1">Option 1</option>
					<option value="2">Option 2</option>
					<option value="3">Option 3</option>
				</select>
			</div>
		</nav>
		<div class="row">
			<div class="grid-example col l3 grid-filter">
				<aside class="filter-content hide-on-med-and-down">
					<div class="left-aside">
						<div class="left-category">
							<p class="category"><a href="">Kategori</a></p>
							<p><a href="">Men(24)</a></p>
							<p><a href="">Women(34)</a></p>
							<p><a href="">Trousers(24)</a></p>
							<p><a href="">Jacket(12)</a></p>
							<p><a href="">T-Shirt(26)</a></p>
						</div>
						<div class="row">
							<div class="grid-example col l12 m3 s3 ">
								<div class="filter">
									<p>Harga</p>
									<form>
										<input id="input-harga" placeholder="dari" type="text" name="">
										<a>s/d</a>
										<input id="input-harga" placeholder="hingga" type="text" name="">
										<button type="submit" class="btn btn-warning full-width">Filter</button>
										<button type="button" id="button-cancel" class="btn-cancel full-width btn btn-default" style="display:none; margin-top:10px;" onclick="$('body').removeClass('fixed-screen'); $('.filter-content').addClass('hide-on-med-and-down');$('.filter-content .btn-cancel').hide();$('.filter-button').show();">Cancel</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</aside>
			</div>
			<content>
				<div class="grid-example col l9">
					<div class="row">
						<div class="grid-example col l4 m6 s6">
							<div class="img-product">
								<div class="thumbnail">
									<a href=""><img src="assets/img/kaos_pink.png"></a>	
								</div>
								<div class="content">
									<a href=""><h3>Kaos Lengan Panjang Pink
									Motif Vektor</h3></a>
									<a href=""><p>Rp 230.000</p></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="img-product">
								<div class="thumbnail">
									<a href=""><img src="assets/img/abu_abu.png"></a>	
								</div>
								<div class="content">
									<a href=""><h3>Kaos Dalam Abu Wanita</h3></a>
									<a href=""><p>Rp 230.000</p></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="img-product">
								<div class="thumbnail">
									<a href=""><img src="assets/img/putih.png"></a>	
								</div>
								<div class="content">
									<a href=""><h3>Kaos Dalam Putih Wanita</h3></a>
									<a href=""><p>Rp 230.000</p></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="img-product">
								<div class="thumbnail">
									<a href=""><img src="assets/img/coklat.png"></a>	
								</div>
								<div class="content">
									<a href=""><h3>Kaos Dalam Abu Wanita</h3></a>
									<a href=""><p>Rp 230.000</p></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="img-product">
								<div class="thumbnail">
									<a href=""><img src="assets/img/jaket_putih.png"></a>	
								</div>
								<div class="content">
									<a href=""><h3>Jaket Kulit Brown Wanita</h3></a>
									<a href=""><p>Rp 230.000</p></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="img-product">
								<div class="thumbnail">
									<a href=""><img src="assets/img/kaos_putih.png"></a>	
								</div>
								<div class="content">
									<a href=""><h3>Kaos Dalam Putih Wanita</h3></a>
									<a href=""><p>Rp 230.000</p></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="img-product">
								<div class="thumbnail">
									<a href=""><img src="assets/img/jaket_coklat.png"></a>	
								</div>
								<div class="content">
									<a href=""><h3>Jaket Kulit Brown Wanita</h3></a>
									<a href=""><p>Rp 230.000</p></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="img-product">
								<div class="thumbnail">
									<a href=""><img src="assets/img/jaket_hitam.png"></a>	
								</div>
								<div class="content">
									<a href=""><h3>Jaket Kulit Brown Wanita</h3></a>
									<a href=""><p>Rp 230.000</p></a>
								</div>
							</div>
						</div>
						<div class="grid-example col l4 m6 s6">
							<div class="img-product">
								<div class="thumbnail">
									<a href=""><img src="assets/img/coklat.png"></a>	
								</div>
								<div class="content">
									<a href=""><h3>Kaos Lengan Panjang Pink
									Motif Vektor</h3></a>
									<a href=""><p>Rp 230.000</p></a>
								</div>
							</div>
						</div>
					</div>
					<div class="page">
						<ul class="pagination">
							<li class="active"><a href="sass.html">1</a></li>
							<li class="second-active"><a href="sass.html">2</a></li>
							<li class="waves-effect"><a href="sass.html">3</a></li>
						</ul>
					</div>
				</div>
			</content>
		</div>
	</div>
</main>

<?php include('footer.php')?>
