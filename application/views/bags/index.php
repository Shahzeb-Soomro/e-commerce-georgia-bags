<!-- banner -->		<div class="banner">			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">				<ol class="carousel-indicators">					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>				</ol>				<div class="carousel-inner" role="listbox">					<div class="carousel-item active">					</div>					<div class="carousel-item item2">					</div>					<div class="carousel-item item3">					</div>					<div class="carousel-item item4">					</div>				</div>				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">					<span class="carousel-control-prev-icon" aria-hidden="true"></span>					<span class="sr-only">Previous</span>				</a>				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">					<span class="carousel-control-next-icon" aria-hidden="true"></span>					<span class="sr-only">Next</span>				</a>			</div>			<!--//banner -->		</div>	</div>	<!--//banner-sec-->	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">		<div class="container-fluid">			<div class="inner-sec-shop px-lg-4 px-3">				<h3 class="tittle-w3layouts my-lg-4 my-4">New Arrivals for you </h3>				<div class="row">					<!-- /womens -->                    <?php foreach($result as $value) {?>					<div class="col-md-3 product-men women_two">						<div class="product-googles-info googles">							<div class="men-pro-item">								<div class="men-thumb-item">									<img src="<?php echo base_url();?>/assets/images/uploads/<?php echo $value['product_image'];?>" class="img-fluid" alt="">									<div class="men-cart-pro">										<div class="inner-men-cart-pro">											<a href="<?php echo site_url('MainController/productDetails/'.$value['idproducts'])?>" class="link-product-add-cart">Quick View</a>										</div>									</div>									<span class="product-new-top">New</span>								</div>								<div class="item-info-product">									<div class="info-product-price">										<div class="grid_meta">											<div class="product_price">												<h4>													<a href="<?php                                                    echo site_url('MainController/productDetails/'.$value['idproducts'])?>"><?php echo $value['product_name'];?>                                                    </a>												</h4>												<div class="grid-price mt-2">													<span class="money "><?php echo $value['72_ntr'];?></span>												</div>											</div>											<ul class="stars">												<li>													<a href="#">														<i class="fa fa-star" aria-hidden="true"></i>													</a>												</li>												<li>													<a href="#">														<i class="fa fa-star" aria-hidden="true"></i>													</a>												</li>												<li>													<a href="#">														<i class="fa fa-star" aria-hidden="true"></i>													</a>												</li>												<li>													<a href="#">														<i class="fa fa-star" aria-hidden="true"></i>													</a>												</li>												<li>													<a href="#">														<i class="fa fa-star-half-o" aria-hidden="true"></i>													</a>												</li>											</ul>										</div>										<div class="googles single-item hvr-outline-out">											<form action="#" method="post">												<input type="hidden" name="cmd" value="_cart">												<input type="hidden" name="add" value="1">												<input type="hidden" name="googles_item" value="Farenheit">												<input type="hidden" name="amount" value="<?php echo $value['72_ntr'];?>">												<button type="submit" class="googles-cart pgoogles-cart">													<i class="fas fa-cart-plus"></i>												</button>																							</form>										</div>									</div>									<div class="clearfix"></div>								</div>							</div>						</div>					</div>				<?php }?>                </div>				<!-- //womens -->				<!-- /mens -->				<div class="row mt-lg-3 mt-0">				</div>				<!--//row-->				<!--/slide-->				<div class="slider-img mid-sec">        		</div>                <!--/meddle-->                <div class="row">                    <div class="col-md-12 middle-slider my-4">                        <div class="middle-text-info ">                            <h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Summer Flash sale</h3>                            <div class="simply-countdown-custom" id="simply-countdown-custom"></div>                        </div>                    </div>                </div>                <!--//meddle-->                <!-- /grids -->                <h3 class="tittle-w3layouts text-center my-lg-4 my-4">Our Trademarks</h3>                <div class="bottom-sub-grid-content py-lg-5 py-3">                    <div class="row">                        <div class="col-lg-4 bottom-sub-grid text-center">                            <div class="bt-icon">                                <span class="far fa-hand-paper"></span>                            </div>                            <h4 class="sub-tittle-w3layouts my-lg-4 my-3">Satisfaction Guaranteed</h4>                            <p>We Proudly announce to be the largest source for canvas tote bags, aprons and Towels in the industry.</p>                            <p>                                <a href="" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>                            </p>                        </div>                        <!-- /.col-lg-4 -->                        <div class="col-lg-4 bottom-sub-grid text-center">                            <div class="bt-icon">                                <span class="fas fa-rocket"></span>                            </div>                            <h4 class="sub-tittle-w3layouts my-lg-4 my-3">Fast Shipping</h4>                            <p>We do offer 24 hours production time or less on rush orders.                                Quality, Consistency, lowest Price & On Time Delivery is our trademark. </p>                            <p>                                <a href="" class="btn btn-sm animated-button gibson-three mt-4" >Shop Now</a>                            </p>                        </div>                        <!-- /.col-lg-4 -->                        <div class="col-lg-4 bottom-sub-grid text-center">                            <div class="bt-icon">                                <span class="fas fa-dollar-sign"></span>                            </div>                            <h4 class="sub-tittle-w3layouts my-lg-4 my-3">Competitive Prices</h4>                            <p>We offer blank merchandise and can also embellish for you at a very competitive price</p>                            <p>                                <a href="" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>                            </p>                        </div>                        <!-- /.col-lg-4 -->                    </div>                </div>                <!-- //grids -->				<!-- //grids -->				<!-- /clients-sec -->                <div class="testimonials p-lg-5 p-3 mt-4">                    <div class="row last-section">                        <div class="col-lg-3 footer-top-w3layouts-grid-sec">                            <div class="mail-grid-icon text-center">                                <i class="fas fa-gift"></i>                            </div>                            <div class="mail-grid-text-info">                                <h3>Quick Service</h3>                                <p>Having Our own in house Printing press gives us the edge to provide Excellent Prices and quick service.</p>                            </div>                        </div>                        <div class="col-lg-3 footer-top-w3layouts-grid-sec">                            <div class="mail-grid-icon text-center">                                <i class="fas fa-shield-alt"></i>                            </div>                            <div class="mail-grid-text-info">                                <h3>Availability of Stock</h3>                                <p>We have millions of pieces of different products in stock in our warehouse at all times.                                </p>                            </div>                        </div>                        <div class="col-lg-3 footer-top-w3layouts-grid-sec">                            <div class="mail-grid-icon text-center">                                <i class="fas fa-dollar-sign"></i>                            </div>                            <div class="mail-grid-text-info">                                <h3>In House Production</h3>                                <p>We offer screen printing, embroidery, heat transfer, digital printing and much more with proof that its in                                    house.</p>                            </div>                        </div>                        <div class="col-lg-3 footer-top-w3layouts-grid-sec">                            <div class="mail-grid-icon text-center">                                <i class="fas fa-truck"></i>                            </div>                            <div class="mail-grid-text-info">                                <h3>On Time Delivery</h3>                                <p>                                    Quality, Consistency, lowest Price & On Time Delivery is our trademark. </p>                            </div>                        </div>                    </div>                </div>                <!-- //clients-sec -->			</div>		</div>	</section>	<!-- about --><!--footer --><footer class="py-lg-5 py-3">    <div class="container-fluid px-lg-5 px-3">        <div class="row footer-top-w3layouts">            <div class="col-lg-3 footer-grid-w3ls">                <div class="footer-title">                    <h3>About Us</h3>                </div>                <div class="footer-text">                    <p>ASP PROMOS was established in 2010 and is your best source for Bags, Towels, Aprons,                        Blankets & Bandanas. We manufacture,                        wholesale and distribute our own brand and many other brands                        from the industry. We are your one stop                        shop for textile products at guaranteed lowest price than                        anyone else in the industry, we can bet on it.                    </p>                    <ul class="footer-social text-left mt-lg-4 mt-3">                        <li class="mx-2">                            <a href="#">                                <span class="fab fa-facebook-f"></span>                            </a>                        </li>                        <li class="mx-2">                            <a href="#">                                <span class="fab fa-twitter"></span>                            </a>                        </li>                        <li class="mx-2">                            <a href="#">                                <span class="fab fa-google-plus-g"></span>                            </a>                        </li>                        <li class="mx-2">                            <a href="#">                                <span class="fab fa-linkedin-in"></span>                            </a>                        </li>                        <li class="mx-2">                            <a href="#">                                <span class="fas fa-rss"></span>                            </a>                        </li>                        <li class="mx-2">                            <a href="#">                                <span class="fab fa-vk"></span>                            </a>                        </li>                    </ul>                </div>            </div>            <div class="col-lg-3 footer-grid-w3ls">                <div class="footer-title">                    <h3>Get in touch</h3>                </div>                <div class="contact-info">                    <h4>Location :</h4>                    <p>5238 Royal Woods Pkwy Suite # 140,                        Tucker, GA 30084</p>                    <div class="phone">                        <h4>Contact :</h4>                        <p>Office : +1 470 395 5185                        </p>                        <p>Head Office : +1 678 861 3665</p>                        <p>Manager Productions : +1 770 256 1962</p>                        <p>Email Inquiry :                            <a href="mailto:admin@ga-bags.com">admin@ga-bags.com</a>                        </p>                        <p>Email Manager :                            <a href="mailto:rahiledhi786@gmail.com">rahiledhi786@gmail.com</a>                        </p>                    </div>                </div>            </div>            <div class="col-lg-3 footer-grid-w3ls">                <div class="footer-title">                    <h3>Quick Links</h3>                </div>                <ul class="links">                    <li>                        <a href="<?php echo site_url('MainController/index')?>">Home</a>                    </li>                    <li>                        <a href="<?php echo site_url('MainController/getAboutUsPage')?>">About</a>                    </li>                    <li>                        <a href="<?php echo site_url('MainController/getContactUsPage')?>">Contact Us</a>                    </li>                </ul>            </div>            <div class="col-lg-3 footer-grid-w3ls">                <div class="footer-title">                    <h3>Sign up for your offers</h3>                </div>                <div class="footer-text">                    <p>By subscribing to our mailing list you will always get latest news and updates from us.</p>                    <form action="#" method="post">                        <input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">                        <button class="btn1">                            <i class="far fa-envelope" aria-hidden="true"></i>                        </button>                        <div class="clearfix"> </div>                    </form>                </div>            </div>        </div>        <div class="copyright-w3layouts mt-4">            <p class="copy-right text-center ">&copy; 2019 Georgia Bags. All Rights Reserved | Developed by                <a href="mailto:shahzaibsoomro@gmail.com">shahzaibsoomro@gmail.com</a>            </p>        </div>    </div></footer><!-- //footer -->	<!-- //footer -->	<!--jQuery-->	<script src="<?php echo base_url();?>/assets/js/jquery-2.2.3.min.js"></script>	<!-- newsletter modal -->	<!-- Modal -->	<!-- Modal --><!--	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">		<div class="modal-dialog" role="document">			<div class="modal-content">				<div class="modal-header">					<button type="button" class="close" data-dismiss="modal" aria-label="Close">						<span aria-hidden="true">&times;</span>					</button>				</div>				<div class="modal-body text-center p-5 mx-auto mw-100">					<h6>Join our newsletter and get</h6>					<h3>50% Off for your first Pair of Eye wear</h3>					<div class="login newsletter">						<form action="#" method="post">							<div class="form-group">								<label class="mb-2">Email address</label>								<input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="" required="">							</div>							<button type="submit" class="btn btn-primary submit mb-4">Get 50% Off</button>						</form>						<p class="text-center">							<a href="#">No thanks I want to pay full Price</a>						</p>					</div>				</div>			</div>		</div>	</div>	<script>		$(document).ready(function () {			$("#myModal").modal();		});	</script>-->	<!-- // modal -->	<!--search jQuery-->	<script src="<?php echo base_url();?>/assets/js/modernizr-2.6.2.min.js"></script>	<script src="<?php echo base_url();?>/assets/js/classie-search.js"></script>	<script src="<?php echo base_url();?>/assets/js/demo1-search.js"></script>	<!--//search jQuery-->	<!-- cart-js -->	<script src="<?php echo base_url();?>/assets/js/minicart.js"></script>	<script>		googles.render();		googles.cart.on('googles_checkout', function (evt) {			var items, len, i;			if (this.subtotal() > 0) {				items = this.items();				for (i = 0, len = items.length; i < len; i++) {}			}		});	</script>	<!-- //cart-js -->	<script>		$(document).ready(function () {			$(".button-log a").click(function () {				$(".overlay-login").fadeToggle(200);				$(this).toggleClass('btn-open').toggleClass('btn-close');			});		});		$('.overlay-close1').on('click', function () {			$(".overlay-login").fadeToggle(200);			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');			open = false;		});	</script>	<!-- carousel -->	<!-- Count-down -->	<script src="<?php echo base_url();?>/assets/js/simplyCountdown.js"></script>	<link href="<?php echo base_url();?>/assets/css/simplyCountdown.css" rel='stylesheet' type='text/css' />	<script>		var d = new Date();		simplyCountdown('simply-countdown-custom', {			year: d.getFullYear(),			month: d.getMonth() + 2,			day: 25		});	</script>	<!--// Count-down -->	<script src="<?php echo base_url();?>/assets/js/owl.carousel.js"></script>	<script>		$(document).ready(function () {			$('.owl-carousel').owlCarousel({				loop: true,				margin: 10,				responsiveClass: true,				responsive: {					0: {						items: 1,						nav: true					},					600: {						items: 2,						nav: false					},					900: {						items: 3,						nav: false					},					1000: {						items: 4,						nav: true,						loop: false,						margin: 20					}				}			})		})	</script>	<!-- //end-smooth-scrolling -->	<!-- dropdown nav -->	<script>		$(document).ready(function () {			$(".dropdown").hover(				function () {					$('.dropdown-menu', this).stop(true, true).slideDown("fast");					$(this).toggleClass('open');				},				function () {					$('.dropdown-menu', this).stop(true, true).slideUp("fast");					$(this).toggleClass('open');				}			);		});	</script>	<!-- //dropdown nav -->  <script src="<?php echo base_url();?>/assets/js/move-top.js"></script>    <script src="<?php echo base_url();?>/assets/js/easing.js"></script>    <script>        jQuery(document).ready(function($) {            $(".scroll").click(function(event) {                event.preventDefault();                $('html,body').animate({                    scrollTop: $(this.hash).offset().top                }, 900);            });        });    </script>    <script>        $(document).ready(function() {            /*            						var defaults = {            							  containerID: 'toTop', // fading element id            							containerHoverID: 'toTopHover', // fading element hover id            							scrollSpeed: 1200,            							easingType: 'linear'             						 };            						*/            $().UItoTop({                easingType: 'easeOutQuart'            });        });    </script>    <!--// end-smoth-scrolling -->	<script src="<?php echo base_url();?>/assets/js/bootstrap.js"></script>	<!-- js file --></body></html>