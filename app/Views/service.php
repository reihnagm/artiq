<?= view('layouts/head', [ "title" => $title ]); ?>

<!-- WRAPPER ALL -->
<div class="constructify_tm_wrapper_all" data-border="none">

	<div class="constructify_tm_animate_menu"></div>
	<div class="constructify_tm_short_contact_content"></div>
	<div class="constructify_tm_short_contact_triangle"></div>
	<div class="constructify_tm_overlay_window"></div>
	
	<!-- BORDER -->
	<div class="constructify_tm_top_border pattern_border"></div>
	<div class="constructify_tm_left_border pattern_border"></div>
	<div class="constructify_tm_right_border pattern_border"></div>
	<!-- /BORDER -->

	<div class="wrapper_inner">
	
		<!-- LEFTPART -->
		
		<?= view('layouts/leftpart'); ?>

		<!-- /LEFTPART -->
		
		<!-- RIGHTPART -->
		<div class="main_rightpart">
			
			<?= view('layouts/mobilemenu'); ?>
			
			<!-- SERVICES -->
			<div class="constructify_tm_section">
				<div class="constructify_tm_main_title_holder">
					<div class="container">
						<div class="title_holder">
							<h3>Our Services</h3>
						</div>
						<div class="builify_tm_breadcrumbs">
							<ul>
								<li><a href="<?= base_url('/') ?>">Home</a></li>
								<li class="shape"><span></span></li>
								<li><span>Our Services</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="constructify_tm_section">
				<div class="container">
					<div class="constructify_tm_services_list_wrap">
						<ul class="masonry">
							<li class="item">
								<div class="inner">
									<div class="service_image">
										<img src="<?= base_url("public/assets/img/services/510x380.jpg") ?>" alt="" />
										<a href="service-single.html"><div class="image"></div></a>
									</div>
									<div class="list_definitions_wrap">
										<div class="titles">
											<div class="title_holder">
												<h3><a href="service-single.html">New Construction</a></h3>
											</div>
											<div class="definition">
												<p>It's the details that count. Because when they are given a backseat, they inevitably move up front and can overtake the...</p>
											</div>
										</div>
										<div class="read_more_wrap">
											<div class="read_more_in">
												<a href="<?= base_url("service") ?>">Read More</a>
											</div>
										</div>
										<span class="shape_triangle"></span>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="constructify_tm_section">
				<div class="container">
					<div class="constructify_tm_pagination">
						<ul>
							<li><span>Prev</span></li>
							<li class="active"><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /SERVICES -->
			
			<!-- FOOTER -->
			<footer class="constructify_tm_footer_wrap">
				<div class="constructify_tm_universal_parallax_wrap">
					<div class="main_bg">
						<div class="overlay_image footer jarallax" data-speed="0"></div>
						<div class="overlay_video"></div>								
						<div class="overlay_color footer"></div>
					</div>
					<div class="main_content footer">
						<div class="constructify_tm_subscribe_wrap">
							<div class="container">
								<div class="inner_wrap">
									<div class="left_wrap">
										<div class="book">
											<img class="svg" src="<?= base_url("public/assets/img/svg/open-book.svg") ?>" alt="" />
										</div>
										<div class="text">
											<p>Newsletter<span></span> get updates with latest topics</p>
										</div>
									</div>
									<div class="right_wrap">
										<input class="email" type="email" placeholder="Your e-mail address">
										<input class="button" type="button" value="subscribe">
									</div>
								</div>
							</div>
						</div>
						<div class="constructify_tm_footer_wrap">
							<div class="container">
								<div class="constructify_tm_list_wrap footer" data-column="3" data-space="40">
									<ul class="constructify_list">
										<li>
											<div class="inner">
												<div class="footer_section_title">
													<h3>About Company</h3>
												</div>
												<div class="definition">
													<p>We are an award winning construction company focused on user-driven outcomes. We strive to create meaningful connections for users through considered.</p>
												</div>
											</div>
										</li>
										<li>
											<div class="inner">
												<div class="footer_section_title">
													<h3>Business Hours</h3>
												</div>
												<div class="inner_list">
													<ul>
														<li>
															<div class="wrap">
																<span class="left">Monday-Friday:</span>
																<span class="right">9am to 5pm</span>
															</div>
														</li>
														<li>
															<div class="wrap">
																<span class="left">Saturday:</span>
																<span class="right">10am to 3pm</span>
															</div>
														</li>
														<li>
															<div class="wrap">
																<span class="left">Sunday:</span>
																<span class="right">Closed</span>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li>
											<div class="inner">
												<div class="footer_section_title">
													<h3>Helpful Links</h3>
												</div>
												<div class="helpful_links">
													<div class="inner_list">
														<ul>
															<li><a href="#">Our services</a></li>
															<li><a href="#">Diclaimer</a></li>
															<li><a href="#">Showcase</a></li>
															<li><a href="#">Privacy Policy</a></li>
															<li><a href="#">Affliates</a></li>
														</ul>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom_wrap">
					<div class="container">
						<div class="links_wrap">
							<ul>
								<li><a href="#">Services</a></li>
								<li><a href="#">Affliates</a></li>
								<li><a href="#">Disclaimer</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Career</a></li>
							</ul>
						</div>
						<div class="copyright">
							<p>&copy; 2023 <a class="constructify" href="#">ARTIQ Solutions</a>. All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- /FOOTER -->
			
		</div>
		<!-- /RIGHTPART -->
		
	</div>

	<!-- BORDER -->
	<div class="constructify_tm_bottom_border pattern_border"></div>
	<!-- /BORDER -->
	
	<!-- TO TOP -->
	 <a class="constructify_tm_totop" href="#">
		 <span class="shape"></span>
		 <span class="name">To Top</span>
	 </a>
	<!-- /TO TOP -->
	
</div>
<!-- / WRAPPER ALL -->

<?= view('layouts/scripts'); ?>