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

			<!-- ABOUT -->
			<div class="constructify_tm_section">
				<div class="constructify_tm_main_title_holder">
					<div class="container">
						<div class="title_holder">
							<h3>About Us</h3>
						</div>
						<div class="builify_tm_breadcrumbs">
							<ul>
								<li><a href="<?= base_url("/") ?>">Home</a></li>
								<li class="shape"><span></span></li>
								<li><span>About Us</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="constructify_tm_section">
				<div class="constructify_tm_about_wrap">
					<div class="container">
						<div class="subtitle">
							<p>We are ARTIQ Solutions, an innovative design company integrating interior design, architecture, and technology. Based in Jakarta, we dedicate ourselves to crafting captivating spaces and advanced technology.</p>
								<p>In interior design and architecture, we blend aesthetics and functionality to create unique spaces tailored to styles and needs. In the technology domain, we design and develop stunning websites and applications.</p>
								<p>Our commitment is to provide professional services with prompt responsiveness, customized solutions, and top-notch quality. Let's bring your vision to life with ARTIQ Solutions.</p>
						</div>
						<div class="about_service_list">
							<h3>Performance Excellence</h3>
							<p>ARTIQ Solutions is dedicated to delivering excellence in every aspect of the services we offer. We set high standards across our operations, striving to achieve our vision of becoming a leading design solution provider that brings outstanding value to our clients.</p>
						</div>
					</div>
					<div class="constructify_tm_about_counter_wrap">
						<div class="container">
							<div class="inner_counter">
								<div class="leftbox">
									<div class="constructify_tm_counter_wrap" data-col="4" data-delay="300">
										<ul class="constructify_tm_counter_list">
											<li>
												<div class="inner">
													<h3><span><span class="constructify_tm_counter" data-from="0" data-to="3572" data-speed="3000">0</span></span></h3>
													<span>Projects Completed</span>
												</div>
											</li>
											<li>
												<div class="inner">
													<h3><span><span class="constructify_tm_counter" data-from="0" data-to="300" data-speed="3000">0</span>K</span></h3>
													<span>Company Clients</span>
												</div>
											</li>
											<li>
												<div class="inner">
													<h3><span><span class="constructify_tm_counter" data-from="0" data-to="2348" data-speed="3000">0</span></span></h3>
													<span>Professional Workers</span>
												</div>
											</li>
											<li>
												<div class="inner">
													<h3><span><span class="constructify_tm_counter" data-from="0" data-to="120" data-speed="3000">0</span>+</span></h3>
													<span>Company Awards</span>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="rightbox">
									<div class="inner_rightbox">
										<span class="top_title">Why Choose</span>
										<h3 class="title">ARTIQ Solutions?</h3>
										<p class="top_title">Cutting-Edge Innovation:</p>
										<p class="text">We always stay abreast of the latest advancements in design and technology to infuse innovative elements into every project.</p>
										<p class="top_title">Client Focus:</p>
										<p class="text">The desires and satisfaction of our clients are our top priority, and we consistently listen and understand their needs.</p>
										<p class="top_title">Uncompromising Quality:</p>
										<p class="text">We prioritize quality in every detail, ensuring a satisfying and captivating end result.</p>
										<p class="top_title">Multidisciplinary Expertise:</p>
										<p class="text">We boast a team of multidisciplinary experts with diverse skills to address every aspect of a project.</p>
										</div>
									<div class="counter_png"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="about_service_list client">
							<h3>Client Focus</h3>
							<p>Our approach is rooted in a strong focus on fully understanding the needs and vision of our clients. We prioritize effective communication and close collaboration with clients, ensuring that every design we produce aligns with their desires and reflects their unique identity.</p>
						</div>
					</div>
					<div class="container">
						<div class="about_service_list">
							<h3>Responsible Behaviour</h3>
							<p>We take responsibility for acting ethically and responsibly in all our actions. We prioritize safety, the environment, and the well-being of the community in our operations. We strive to lead positive change in our industry by adopting environmentally friendly construction methods and practicing high ethical standards.</p>
						</div>
					</div>
					
					<div class="constructify_tm_section">
						<div class="container">
							<h3>Our Team</h3>
							<div class="constructify_tm_about_team_wrap">
								<ul>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/about/250x190.jpg") ?>" alt="" />
												<div class="image"></div>
											</div>
											<div class="main_definitions">
												<h3>Bro Zamal</h3>
												<span>CEO</span>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/about/250x190.jpg") ?>" alt="" />
												<div class="image"></div>
											</div>
											<div class="main_definitions">
												<h3>Bro Eko</h3>
												<span>CEO</span>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/about/250x190.jpg") ?>" alt="" />
												<div class="image"></div>
											</div>
											<div class="main_definitions">
												<h3>Bro Anjar</h3>
												<span>CEO</span>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/about/250x190.jpg") ?>" alt="" />
												<div class="image"></div>
											</div>
											<div class="main_definitions">
												<h3>Bro Dhanu</h3>
												<span>Civil and Architectural</span>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/about/250x190.jpg") ?>" alt="" />
												<div class="image"></div>
											</div>
											<div class="main_definitions">
												<h3>Bro Kamdi</h3>
												<span>Business Development</span>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/about/250x190.jpg") ?>" alt="" />
												<div class="image"></div>
											</div>
											<div class="main_definitions">
												<h3>Bro Andi</h3>
												<span>Business Development</span>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/about/250x190.jpg") ?>" alt="" />
												<div class="image"></div>
											</div>
											<div class="main_definitions">
												<h3>Bro Cahya</h3>
												<span>Sr Engineeering Network</span>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/about/250x190.jpg") ?>" alt="" />
												<div class="image"></div>
											</div>
											<div class="main_definitions">
												<h3>Bro Agam</h3>
												<span>Sr Fullstack Web & Mobile Developer</span>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/about/250x190.jpg") ?>" alt="" />
												<div class="image"></div>
											</div>
											<div class="main_definitions">
												<h3>Bro Azil</h3>
												<span>Sr Fullstack Web & Mobile Developer</span>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/about/250x190.jpg") ?>" alt="" />
												<div class="image"></div>
											</div>
											<div class="main_definitions">
												<h3>Bro Wily</h3>
												<span>Sr Cyber Security Engineer</span>
											</div>
										</div>
									</li>
									<li>
										<div class="inner">
											<div class="image_wrap">
												<img src="<?= base_url("public/assets/img/about/250x190.jpg") ?>" alt="" />
												<div class="image"></div>
											</div>
											<div class="main_definitions">
												<h3>Bro Marcel</h3>
												<span>UI/UX Designer</span>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /ABOUT -->
			
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