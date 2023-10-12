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
			
			<!-- CONTACT -->
			<div class="constructify_tm_section">
				<div class="constructify_tm_main_title_holder">
					<div class="container">
						<div class="title_holder">
							<h3>Contact</h3>
						</div>
						<div class="builify_tm_breadcrumbs">
							<ul>
								<li><a href="<?= base_url('/') ?>">Home</a></li>
								<li class="shape"><span></span></li>
								<li><span>Contact</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="constructify_tm_section">
				<div class="container">
					<div class="constructify_tm_main_contact_wrap">
						<div class="office_list">
							<ul>
								<li>
									<div class="inner">
										<div class="image_wrap">
											<img src="<?= base_url("public/assets/img/contact/370x220.jpg") ?>" alt="" />
											<div class="image"></div>
										</div>
										<div class="definitions_wrap">
											<div class="office">
												<h3>Washington Office</h3>
												<div class="icon">
													<img class="svg" src="<?= base_url("public/assets/img/svg/location.svg") ?>" alt="" />
												</div>
											</div>
											<div class="short_info_wrap">
												<div class="row">
													<p>100-120 Ft.Drive NE, Washington, DC 20011</p>
												</div>
												<div class="row">
													<label>Phone:</label>
													<span>+1 202-415-7234</span>
												</div>
												<div class="row">
													<label>Email:</label>
													<span><a href="#">w.constructify@gmail.com</a></span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="inner">
										<div class="image_wrap">
											<img src="<?= base_url("public/assets/img/contact/370x220.jpg") ?>" alt="" />
											<div class="image"></div>
										</div>
										<div class="definitions_wrap">
											<div class="office">
												<h3>New York Office</h3>
												<div class="icon">
													<img class="svg" src="<?= base_url("public/assets/img/svg/location.svg") ?>" alt="" />
												</div>
											</div>
											<div class="short_info_wrap">
												<div class="row">
													<p>110-115 Ft.Consort NE, New-York, DC 20031</p>
												</div>
												<div class="row">
													<label>Phone:</label>
													<span>+1 272-436-4524</span>
												</div>
												<div class="row">
													<label>Email:</label>
													<span><a href="#">n.constructify@gmail.com</a></span>
												</div>
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="inner">
										<div class="image_wrap">
											<img src="<?= base_url("public/assets/img/contact/370x220.jpg") ?>" alt="" />
											<div class="image"></div>
										</div>
										<div class="definitions_wrap">
											<div class="office">
												<h3>Boston Office</h3>
												<div class="icon">
													<img class="svg" src="<?= base_url("public/assets/img/svg/location.svg") ?>" alt="" />
												</div>
											</div>
											<div class="short_info_wrap">
												<div class="row">
													<p>100-120 Ft.Albemarle NE, Boston, DC 20017</p>
												</div>
												<div class="row">
													<label>Phone:</label>
													<span>+1 252-925-7564</span>
												</div>
												<div class="row">
													<label>Email:</label>
													<span><a href="#">b.constructify@gmail.com</a></span>
												</div>
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="contact_text">
							<p>Constructify is a privately owned, internationally focussed engineering enterprise with world-class capabilities spanning the entire client value chain. We operate an integrated business model comprising the full range of engineering, construction and asset management services delivering single-source solutions for some of the world's most prestigious public and private organisations.</p>
						</div>
						<div class="constructify_tm_contact_wrap">
							<div class="get_in_touch">
								<h3>Get in Touch With Us</h3>
							</div>
							<div class="inner_wrap">
								<form action="/" method="post" class="contact_form" id="contact_form">
									<div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
									<div class="empty_notice"><span>Please Fill Required Fields</span></div>
									<div class="row">
										<label>Full Name<span></span></label>
										<input id="name" type="text" />
									</div>
									<div class="row">
										<label>Your E-mail<span></span></label>
										<input id="email" type="text" />
									</div>
									<div class="row">
										<label>Your Subject<span></span></label>
										<input id="subject" type="text" />
									</div>
									<div class="row">
										<label>Your Message<span></span></label>
										<textarea id="message"></textarea>
									</div>
									<div class="row">
										<a id="send_message" href="#">Send Message</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /CONTACT -->
			
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