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
			
			<!-- PROJECTS SINGLE -->
			<div class="constructify_tm_section">
				<div class="constructify_tm_justified_wrap gallery_zoom">
					<a class="zoom" href="<?= base_url("public/assets/img/slider/8.jpg") ?>" ">
						<img src="<?= base_url("public/assets/img/slider/8.jpg") ?>" alt="" />
						<span class="overlay"></span>
						<span class="shape"><span></span></span>
					</a>
					<a class="zoom" href="<?= base_url("public/assets/img/slider/9.jpg") ?>">
						<img src="<?= base_url("public/assets/img/slider/9.jpg") ?>"  alt="" />
						<span class="overlay"></span>
						<span class="shape"><span></span></span>
					</a>
				</div>
			</div>
			<div class="constructify_tm_section">
				<div class="container">
					<div class="constructify_tm_justified_content">
						<div class="leftpart">
							<div class="title_holder">
								<h3>Matao Grand Hotel</h3>
							</div>
							<div class="definition">
								<p>Following the Great Belt (1988 – 1996) and the Øresund (1995 – 2000), VINCI Construction will be helping to build a third immersed tunnel between Denmark and the continent, the Femern Link, over the next several years. VINCI Construction Grands Projets, lead company in the first two tunnel works packages, is a member of the Femern Link Contractors joint venture entrusted by the Danish government with the design-build contract for the new structure, which will be the world’s longest immersed road and rail tunnel. The joint venture will be in charge of the immersed tunnel works packages, the plant that will produce the precast tunnel segments, and the access ramps and bridges. The total value of the three contracts is €3.4 billion.</p>
								<p class="bold">A bridge connecting two Nordic countries in 10 minutes</p>
								<p>The 18-km Femern Tunnel will connect the Danish Lolland-Falster and German Schleswig-Holstein regions, enabling cars to travel between the two countries in 10 minutes and trains in 7 minutes, instead of one hour by ferry or via a 160-km detour through the Danish Jutland region. When completed, the tunnel will support increased trade and tourism in Northern Europe. The undersea link between the two countries will eliminate the weather issues affecting ferry transport and the need to reserve ferry passage.</p>
							</div>
							<div class="constructify_tm_share_wrap">
								<label>Share:</label>
								<ul>
									<li><a href="#"><i class="xcon-facebook"></i></a></li>
									<li><a href="#"><i class="xcon-twitter"></i></a></li>
									<li><a href="#"><i class="xcon-instagram"></i></a></li>
								</ul>
							</div>
							<div class="constructify_tm_project_video">
								<span>
									<img class="svg" src="<?= base_url("public/assets/img/svg/play.svg") ?>" alt="" />
								</span>
								<a class="project_time" href="#">View Project Time Lapse</a>
								<a class="project_video_button popup-youtube" href="https://www.youtube.com/watch?v=se4yc09w7Ic"></a>
							</div>
						</div>
						<div class="rightpart">
							<div class="infobox">
								<ul>
									<li>
										<label>Value</label>
										<span>€3,400,000,000</span>
									</li>
									<li>
										<label>Client</label>
										<span>Germany and Denmark Governments</span>
									</li>
									<li>
										<label>Architect</label>
										<span>Vinci Company</span>
									</li>
									<li>
										<label>Location</label>
										<span>Germany-Denmark</span>
									</li>
									<li>
										<label>Completion Date</label>
										<span>02.05.2005</span>
									</li>
									<li>
										<label>Square Footage</label>
										<span>18-km</span>
									</li>
								</ul>
								<div class="first_square"></div>
								<div class="second_square"></div>
							</div>
						</div>
					</div>
					<div class="constructify_tm_pagination">
						<ul>
							<li><span>Prev</span></li>
							<li class="active"><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /PROJECTS SINGLE -->
			
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