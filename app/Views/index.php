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
			
			<!-- HERO -->
			<div class="constructify_tm_hero_header_wrap">
				<div class="carousel_wrap">
					<ul class="owl-carousel">
						<li class="item">
							<div class="image"></div>
						</li>
						<li class="item">
							<div class="image"></div>
						</li>
						<li class="item">
							<div class="image"></div>
						</li>
						<li class="item">
							<div class="image"></div>
						</li>
						<li class="item">
							<div class="image"></div>
						</li>
						<li class="item">
							<div class="image"></div>
						</li>
					</ul>
				</div>
				<div class="carousel_nav">
					<div class="custom_nav">
						<a href="#" class="prev"></a>
						<a href="#" class="next"></a>
					</div>
				</div>
				<div class="overlay_color"></div>
				<div class="container hero">
					<div class="hero_text_wrap">
						<div class="title">
							<h3><span>ARTIQ<strong> Solutions</strong></span></h3>
						</div>
						<div class="text">
							<p>At ARTIQ Solutions, our dedication is to elevate the standards of professionalism, provide lightning-fast responsiveness, present truly unique solutions, offer competitive pricing, bring passionate and qualified experts, seamlessly blend designs, and deliver the pinnacle of workmanship quality.</p>
						</div>
						<div class="buttons_wrap">
							<a class="discover" href="#">Talk To Our Expert</a>
							<div class="watch">
								<span class="play"></span>
								<span class="text">Watch Video</span>
								<a class="full_link popup-youtube" href="https://www.youtube.com/watch?v=se4yc09w7Ic"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /HERO -->
			
			<!-- HIGHLIGHTS -->
			<div class="constructify_tm_section">
				<div class="constructify_tm_highlights_wrap">
				  <div class="container">
					<div class="inner_wrap">
					  <ul class="logo_list">
						<li>
						  <a href="#" class="logo" data-text="Your Website Name">
							<img src="<?= base_url("public/assets/img/clients/dsi.png") ?>" alt="Partner Logo 1">
							<div class="text_overlay">Partner 1</div>
						  </a>
						</li>
						<li>
						  <a href="#" class="logo" data-text="Your Website Name">
							<img src="<?= base_url("public/assets/img/clients/dsi.png") ?>" alt="Partner Logo 2">
							<div class="text_overlay">Partner 2</div>
						  </a>
						</li>
						<li>
						  <a href="#" class="logo" data-text="Your Website Name">
							<img src="<?= base_url("public/assets/img/clients/dsi.png") ?>" alt="Partner Logo 3">
							<div class="text_overlay">Partner 3</div>
						  </a>
						</li>
						<li>
							<a href="#" class="logo" data-text="Your Website Name">
							  <img src="<?= base_url("public/assets/img/clients/dsi.png") ?>" alt="Partner Logo 3">
							  <div class="text_overlay">Partner 4</div>
							</a>
						</li>
					  </ul>
					</div>
				  </div>
				</div>
			  </div>
			<!-- /HIGHLIGHTS -->
			
			<!-- HOME ABOUT -->
			<div class="constructify_tm_section">
				<div class="container">
					<div class="constructify_tm_universal_wrap">
						<div class="leftbox about">
							<div class="constructify_tm_title_holder">
								<h3><span>We are <strong>ARTIQ Solutions</strong></span></h3>
							</div>
							<div class="text">
								<p>We are ARTIQ Solutions, an innovative design company integrating interior design, architecture, and technology. Based in Jakarta, we dedicate ourselves to crafting captivating spaces and advanced technology.</p>
								<p>In interior design and architecture, we blend aesthetics and functionality to create unique spaces tailored to styles and needs. In the technology domain, we design and develop stunning websites and applications.</p>
								<p>Our commitment is to provide professional services with prompt responsiveness, customized solutions, and top-notch quality. Let's bring your vision to life with ARTIQ Solutions.</p>
							</div>
							<div class="sign">
								<img src="<?= base_url("public/assets/img/sign/sign.png") ?>" alt="" />
							</div>
							<div class="name_holder">
								<h3>Zamal</h3>
								<span>Chief Executive</span>
							</div>
						</div>
						<div class="rightbox">
							<div class="about_wrap">
								<div class="image_holder parallax" data-relative-input="true">
									<img src="<?= base_url("public/assets/img/animate/500x560.jpg") ?>" alt="" >
									<div class="main_image layer" data-depth="0.2"></div>
									<div class="image_border layer" data-depth="0.25">
										<img src="<?= base_url("public/assets/img/animate/500x560.jpg") ?>" alt="" />
										<div class="border"></div>
									</div>
									<div class="pattern layer" data-depth="0.28">
										<img src="<?= base_url("public/assets/img/animate/500x560.jpg") ?>" alt="" />
										<div class="in"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /HOME ABOUT -->
			
			<!-- HOME SERVICES-->
			<div class="constructify_tm_section">
				<div class="container">
					<div class="constructify_tm_title_holder services_home">
						<h3><span>Our <strong>Solutions</strong></span></h3>
					</div>
					<div class="constructify_tm_services_wrap">
						<ul class="constructify_tm_miniboxes">
							<li>
								<div class="inner constructify_tm_minibox">
									<div class="overlay"></div>
									<h3>Information Technology</h3>
									<p>We are an app & web development studio where we provide digital business solution based on web and mobile application.</p>
									<span class="arrow"><img class="svg" src="<?= base_url("public/assets/img/svg/arrow-right.svg") ?>" alt="" /></span>
									<span class="shape">
										<img class="svg" src="<?= base_url("public/assets/img/svg/learning.svg") ?>" alt="" />
										<span></span>
									</span>
									<a class="service_link" href="<?= base_url("/service") ?>"></a>
								</div>
							</li>
							<li>
								<div class="inner constructify_tm_minibox">
									<div class="overlay"></div>
									<h3>Design Interior</h3>
									<p>We create spaces that reflect your style and uniqueness, blending functionality and aesthetics in every design.</p>
									<span class="arrow"><img class="svg" src="<?= base_url("public/assets/img/svg/arrow-right.svg") ?>" alt="" /></span>
									<span class="shape">
										<img class="svg" src="<?= base_url("public/assets/img/svg/service-drawing.svg") ?>" alt="" />
										<span></span>
									</span>
									<a class="service_link" href="<?= base_url("/service") ?>"></a>
								</div>
							</li>
							<li>
								<div class="inner constructify_tm_minibox">
									<div class="overlay"></div>
									<h3>Architecture</h3>
									<p>We are a cutting-edge architecture studio dedicated to crafting innovative and transformative spaces.</p>
									<span class="arrow"><img class="svg" src="<?= base_url("public/assets/img/svg/arrow-right.svg") ?>" alt="" /></span>
									<span class="shape">
										<img class="svg" src="<?= base_url("public/assets/img/svg/service-tower-crane.svg") ?>" alt="" />
										<span></span>
									</span>
									<a class="service_link" href="<?= base_url("/service") ?>"></a>
								</div>
							</li>
						</ul>
					</div>
					<div class="constructify_tm_service_subtext">
						<p>Let's bring your interior design dreams to life with us, integrating technology to enhance functionality and aesthetics in every space.</p>
					</div>
					<div class="constructify_tm_all_item_link">
						<a href="<?= base_url("our-services") ?>">
							<span class="text">View All Services</span>
							<span class="arrow"><img class="svg" src="<?= base_url("public/assets/img/svg/arrow-right.svg") ?>"" alt="" /></span>
						</a>
					</div>
				</div>
			</div>
			<!-- /HOME SERVICES-->
			
			<!-- OUR RESPONSIBILITY -->
			<div class="constructify_tm_section">
				<div class="constructify_tm_responsibility_text_wrap">
					<div class="container">
						<div class="inner_wrap">
							<div class="left">
								<h3>We will Make Your Dream Come True</h3>
								<p>We are focused on sustainable business that delivers the best possible project results</p>
							</div>
							<div class="right">
								<div class="constructify_tm_button_wrap">
									<a href="#">Our Responsibility</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="constructify_tm_section">
				<div class="constructify_tm_main_responsibility_wrap">
					<div class="constructify_tm_universal_parallax_wrap">
						<div class="main_bg">
							<div class="overlay_image responsibility jarallax" data-speed="0"></div>
							<div class="overlay_video"></div>								
							<div class="overlay_color responsibility"></div>
						</div>
						<div class="main_content responsibility">
							<div class="container">
								<div class="content_inner_wrap">
									<div class="constructify_tm_experience_box">
										<div class="top">
											<p>World's Leading Building Corporation</p>
										</div>
										<div class="bottom">
											<div class="number">
												<span>47</span>
											</div>
											<div class="definition">
												<p>Years of experience</p>
											</div>
										</div>
									</div>
									<div class="experience_list">
										<ul>
											<li><span>Unrivalled workmanship</span></li>
											<li><span>Professional and Qualified</span></li>
											<li><span>Competitive prices</span></li>
											<li><span>Performance Measures</span></li>
											<li><span>Environmental Sensitivity</span></li>
											<li><span>Core Placement</span></li>
											<li><span>Communication skills</span></li>
											<li><span>Responsive and Respectful</span></li>
											<li><span>Personalised solutions</span></li>
											<li><span>Functional Objectives</span></li>
											<li><span>Integrated Design</span></li>
											<li><span>Urban Context</span></li>
											<li><span>Critical thinking</span></li>
											<li><span>Problem solving</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /OUR RESPONSIBILITY -->
			
			<!-- HOME PROJECTS -->
			<div class="constructify_tm_section">
				<div class="container">
					<div class="constructify_tm_home_project_wrap fn_w_sminiboxes">
						<div class="leftbox fn_w_sminibox">
							<div class="constructify_fn_sticky_section">
								<div class="constructify_tm_title_holder">
									<h3><span>Our latest <strong>Projects</strong></span></h3>
								</div>
								<div class="subtitle">
									<p>To provide exceptional services to the insurance industry and thier clients, the property owner. We are committed to providing the highest level of professionalism, service response, and quality workmanship.</p>
								</div>
								<div class="constructify_tm_all_item_link project">
									<a href="project.html">
										<span class="text">View All Projects</span>
										<span class="arrow"><img class="svg" src="<?= base_url("public/assets/img/svg/arrow-right.svg") ?>" alt="" /></span>
									</a>
								</div>
							</div>
						</div>
						<div class="rightbox fn_w_sminibox">
							<div class="constructify_fn_sticky_section">
								<ul>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/slider/1a.jpg") ?>" alt="" />
												<div class="image"></div>
												<div class="overlay_color"></div>
												<span class="plus"></span>
												<div class="title_holder">
													<h3>Matao Grand Hotel</h3>
													<div class="constructify_tm_view_more_wrap">
														<a href="#">
															<span class="text">View More</span>
															<span class="arrow"><img class="svg" src="<?= base_url("public/assets/img/svg/arrow-right.svg") ?>" alt="" /></span>
														</a>
													</div>
												</div>
												<a class="link" href="project-single.html"></a>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/slider/2a.jpg") ?>" alt="" />
												<div class="image"></div>
												<div class="overlay_color"></div>
												<span class="plus"></span>
												<div class="title_holder">
													<h3>Odeon Tower</h3>
													<div class="constructify_tm_view_more_wrap">
														<a href="#">
															<span class="text">View More</span>
															<span class="arrow"><img class="svg" src="<?= base_url("public/assets/img/svg/arrow-right.svg") ?>" alt="" /></span>
														</a>
													</div>
												</div>
												<a class="link" href="project-single.html"></a>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/slider/3a.jpg") ?>" alt="" />
												<div class="image"></div>
												<div class="overlay_color"></div>
												<span class="plus"></span>
												<div class="title_holder">
													<h3>Chaban-Delmas Bridge</h3>
													<div class="constructify_tm_view_more_wrap">
														<a href="#">
															<span class="text">View More</span>
															<span class="arrow"><img class="svg" src="<?= base_url("public/assets/img/svg/arrow-right.svg") ?>" alt="" /></span>
														</a>
													</div>
												</div>
												<a class="link" href="project-single.html"></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /HOME PROJECTS -->
			
			<!-- HOME REQUEST -->
			<div class="constructify_tm_section">
				<div class="container">
					<div class="constructify_tm_request_wrap">
						<div class="inner_wrap">
							<div class="text_wrap">
								<p>Don't hesitate and let's get started! Contact us for a free quote on your next home improvement project.</p>
							</div>
							<div class="constructify_tm_button_wrap yellow">
								<a href="contact.html">Request An Estimate</a>
							</div>
							<div class="toll_free">
								<span>Toll Free: 1-800-987-6543</span>
							</div>
							<div class="image_wrap">
								<span></span>
								<img src="<?= base_url("public/assets/img/estimate/support.png") ?>" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /HOME REQUEST -->
			
			<!-- HOME Clients -->
			<div class="constructify_tm_section">
				<div class="constructify_tm_home_blog_wrap">
				  <div class="container">
					<div class="constructify_tm_title_holder home_blog">
					  <h3><span>Our <strong>Client</strong></span></h3>
					</div>
					<div class="inner_wrap">
					  <div class="list_wrap">
						<ul class="logo_list">
						  <li>
							<a href="#" class="logo">
							  <img src="<?= base_url("public/assets/img/clients/dsi.png") ?>" alt="Client Logo 1">
							  <div class="text_overlay">Your Website Name</div>
							</a>
						  </li>
						  <li>
							<a href="#" class="logo">
							  <img src="<?= base_url("public/assets/img/clients/dsi.png") ?>" alt="Client Logo 2">
							  <div class="text_overlay">Your Website Name</div>
							</a>
						  </li>
						  <li>
							<a href="#" class="logo">
							  <img src="<?= base_url("public/assets/img/clients/dsi.png") ?>" alt="Client Logo 3">
							  <div class="text_overlay">Your Website Name</div>
							</a>
						  </li>
						  <li>
							<a href="#" class="logo">
							  <img src="<?= base_url("public/assets/img/clients/dsi.png") ?>" alt="Client Logo 4">
							  <div class="text_overlay">Your Website Name</div>
							</a>
						  </li>
						</ul>
					  </div>
					</div>
					<div class="inner_wrap">
						<div class="list_wrap">
						  <ul class="logo_list">
							<li>
							  <a href="#" class="logo">
								<img src="<?= base_url("public/assets/img/clients/dsi.png") ?>" alt="Client Logo 1">
								<div class="text_overlay">Your Website Name</div>
							  </a>
							</li>
							<li>
							  <a href="#" class="logo">
								<img src="<?= base_url("public/assets/img/clients/dsi.png") ?>" alt="Client Logo 2">
								<div class="text_overlay">Your Website Name</div>
							  </a>
							</li>
							<li>
							  <a href="#" class="logo">
								<img src="<?= base_url("public/assets/img/clients/dsi.png") ?>" alt="Client Logo 3">
								<div class="text_overlay">Your Website Name</div>
							  </a>
							</li>
							<li>
							  <a href="#" class="logo">
								<img src="<?= base_url("public/assets/img/clients/dsi.png") ?>" alt="Client Logo 4">
								<div class="text_overlay">Your Website Name</div>
							  </a>
							</li>
						  </ul>
						</div>
					  </div>
				  </div>
				</div>
			</div>
			  
			  
			<!-- /HOME BLOG -->
			
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