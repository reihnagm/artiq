<div class="main_leftpart">
    <div class="menubar_wrap">
        <div class="logo_wrap">
            <a href="<?= base_url("/") ?>"><img src="<?= base_url("public/assets/img/Dekstop.png") ?>" alt="" /></a>
            <span class="shape"></span>
        </div>
        <div class="nav_wrap scrollable">
            <ul>
                <li>
                    <a href="<?= base_url('/') ?>">Homepage</a>
                </li>
                <li class="has_children">
                    <a href="<?= base_url('/portfolio') ?>">Portfolio</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="<?= base_url('/portfolio') ?>">Information Technology</a></li>
                            <li><a href="<?= base_url('/portfolio') ?>">Design Interior</a></li>
                            <li><a href="<?= base_url('/portfolio') ?>">Architecture</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="<?= base_url('/our-services') ?>">Our Services</a>
                </li>
                <li><a href="<?= base_url('/about-us') ?>">About Us</a></li>
                <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
            </ul>
        </div>
        <div class="search_wrap">
            <div class="tagline_word">
                <p><span>/</span> Architecture, Interior Design, Technology, Innovation, & Quality</p>
            </div>
        </div>
    </div>
    <div class="short_info_wrap">
        <div class="top_shape"></div>
        <div class="pattern"></div>
        <div class="content">
            <div class="short_contact_wrap">
                <ul>
                    <li>
                        <a href="#"><img class="svg" src="<?= base_url("public/assets/img/svg/home.svg") ?>" alt="" /></a>
                        <div class="content_wrap">
                            <div class="inner_wrap">
                                <div class="address_image">
                                    <img src="<?= base_url("public/assets/img/contact/1.jpg") ?>" alt="" />
                                </div>
                                <div class="main_def">
                                    <h3>Head Office in New York</h3>
                                    <p>775 New York Ave, Brooklyn, NY 11203</p>
                                    <p><label>Phone:</label><span>+1 202-415-7234</span></p>
                                    <p><label>Email:</label><a href="#">constructify@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#"><img class="svg" src="<?= base_url("public/assets/img/svg/black-message.svg") ?>" alt="" /></a>
                        <div class="content_wrap">
                            <div class="inner_wrap">
                                <div class="contact_wrap">
                                    <h3>Request a Quote</h3>
                                    <p>Looking for a quality and affordable builder for your next project?</p>
                                    <div class="input_list_wrap">
                                        <form action="/" method="post" class="contact_form" id="contact_form">
                                            <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                                            <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                            <div class="input_row">
                                                <input id="name" type="text" placeholder="Your Name" />
                                            </div>
                                            <div class="input_row">
                                                <input id="email" type="text" placeholder="E-mail Address" />
                                            </div>
                                            <div class="input_row">
                                                <input id="subject" type="text" placeholder="Main Subject" />
                                            </div>
                                            <div class="input_row">
                                                <textarea id="message" placeholder="Message"></textarea>
                                            </div>
                                            <div class="constructify_tm_button">
                                                <a id="send_message" href="#">Send Message</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#"><img class="svg" src="<?= base_url("public/assets/img/svg/old_phone.svg") ?>" alt="" /></a>
                        <div class="content_wrap">
                            <div class="inner_wrap">
                                <div class="phone_wrap">
                                    <div class="image_holder">
                                        <img src="<?= base_url("public/assets/img/clients/2.jpg") ?>" alt="" />
                                    </div>
                                    <h3>Toll Free</h3>
                                    <p>1-800-987-6543</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#"><img class="svg" src="<?= base_url("public/assets/img/svg/clock.svg") ?>" alt="" /></a>
                        <div class="content_wrap">
                            <div class="inner_wrap">
                                <div class="working_hours_wrap">
                                    <h3>Working Hours</h3>
                                    <p class="subtitle">We are happy to meet you during our working hours. Please make an appointment.</p>
                                    <div class="hour_list">
                                        <ul>
                                            <li>
                                                <span class="left">Monday-Friday:</span>
                                                <span class="right">9am to 5pm</span>
                                            </li>
                                            <li>
                                                <span class="left">Saturday:</span>
                                                <span class="right">10am to 3pm</span>
                                            </li>
                                            <li>
                                                <span class="left">Sunday:</span>
                                                <span class="right">Closed</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="short_contact_closer">
                    <a href="#"><img class="svg" src="<?= base_url("public/assets/img/svg/close1.svg") ?>" alt="" /></a>
                </div>
            </div>
            <div class="social_wrap">
                <ul>
                    <li><a href="#"><i class="xcon-facebook"></i></a></li>
                    <li><a href="#"><i class="xcon-twitter"></i></a></li>
                    <li><a href="#"><i class="xcon-instagram"></i></a></li>
                    <li><a href="#"><i class="xcon-pinterest"></i></a></li>
                    <li><a href="#"><i class="xcon-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>