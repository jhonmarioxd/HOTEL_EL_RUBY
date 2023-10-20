<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel El Ruby</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/global-header.css" />
    <link rel="stylesheet" href="./assets/css/global-footer.css" />
    <link rel="stylesheet" href="./assets/css/accesibility.css">
    <link rel="stylesheet" href="./assets/css/contact-page.css" />
    <link rel="shortcut icon" href="./assets/img/favicon.webp" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>

<body class="scroll-bar">
    <header>
        <div class="header-container">
            <nav class="header-nav-bar">
                <div class="header-nav-logo">
                    <a href="index.html">
                        <img src="https://res.cloudinary.com/joshuafolorunsho/image/upload/v1591615159/star_hotels_logo.png" alt="star hotels logo">
                    </a>
                </div>
                <ul class="header-nav-lists">
                    <li class="header-nav-list">
                        <a class="header-nav-link" href="index.html">Hogar</a>
                    </li>
                    <li class="header-nav-list">
                        <a class="header-nav-link" href="rooms-and-suites.html">habitaciones y suites</a
							>
						</li>
						<li class="header-nav-list">
							<a class="header-nav-link" href="facilities.html">Instalaciones</a>
                    </li>
                    <li class="header-nav-list">
                        <a class="header-nav-link header-active" href="contact-page.php">Contactos</a
							>
						</li>
						<li class="header-nav-list">
							<a class="header-btn header-btn-custom" href="https://timbu.com/search?query=hotel">Reservar</a>
                    </li>
                </ul>

                <div class="header-hamburger-icon">
                    <div class="header-hamburger-line-1"></div>
                    <div class="header-hamburger-line-2"></div>
                    <div class="header-hamburger-line-3"></div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <!-- Header part contain Title page and descriptoion -->
            <div class="header">
                <h2>Contactos</h2>
                <hr/>
                <p>
                    Intersted in striking a partnership or do you have any complaint or feedback? Fill the form below
                </p>
            </div>

            <!-- End of header Part -->

            <!-- Main part contain form and informatoion contactus -->
            <div class="main">
                <div class="contact">
                    <!-- Form start here -->
                    <div class="contact-form">
                        <form action="#">
                            <div class="contact-detail">
                                <label class="hide" for="name">Enter your name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" />
                                <label class="hide" for="email">Enter your email address</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" name="email" />
                            </div>
                            <label class="hide" for="message">message</label>
                            <textarea class="form-control" rows="5" id="comment" placeholder="Message" style="resize: none; width: 100%;" name="message"></textarea>

                            <button type="submit" class="btn">SEND MESSAGE</button>
                        </form>
                    </div>
                    <!-- Form finish here -->

                    <!-- Contact Us start here -->
                    <div class="contact-us">
                        <h3>Contact Us</h3>

                        <span><i
									style="font-size: 1.5rem;"
									class="fa fa-map-marker"
									aria-hidden="true"
								></i
								>23, Fola osibo, Lekki&nbsp;phase&nbsp;1</span
							>
							<span
								><i
									style="font-size: 1.5rem;"
									class="fa fa-phone"
									aria-hidden="true"
								></i
								>08185956620</span
							>
							<span
								><i
									style="font-size: 1.5rem;"
									class="fa fa-envelope-o"
									aria-hidden="true"
								></i
								>Support@starhotels.com</span
							>
						</div>
						<!-- Contact Us Finish here -->
					</div>
				</div>
			</div>
		</main>

		<footer class="footer">
            <div class="footer-container">
                <nav class="footer-nav">
                    <div class="footer-description">
                        <h3 class="footer-description-title">HOTEL El RUBY</h3>
                        <p>La Hospitalidad y Comodidad son nuestra prioridad</p>
                    </div>
                    <div class="footer-contact-us">
                        <h3 class="footer-description-title">Contactos</h3>
                        <p class="footer-description-detail">
                            <img src="./assets/img/map-pin.svg" class="footer-description-icon" alt="star hotel location">
    
                            <span>Vereda, La Victoria, Villavieja, Huila</span></p>
                        <p class="footer-description-detail">
                            <img src="./assets/img/phone.svg" class="footer-description-icon" alt="star hotels phone number">
                            <span>
                         3133756050</span></p>
                        <p class="footer-description-detail">
                            <img src="./assets/img/mail.svg" class="footer-description-icon" alt="star hotels email">
                            <span>support@starhotels.com</span> </p>
                    </div>
                    <div class="footer-follow-us">
                        <h3 class="footer-description-title">Redes sociales</h3>
                        <ul class="footer-follow-us-lists">
                            <li class="follow-us-list">
                                <a href="https://www.facebook.com/profile.php?id=100063503445941">
                                    <img src="./assets/img/facebook.svg" alt="hoel el ruby facebook">
                                </a>
                            </li>
                            <li class="follow-us-list">
                                <a href="https://www.instagram.com/hotelelruby/">
                                    <img src="./assets/img/instagram.svg" alt="hotel el ruby instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mapa-hotel">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.9857066976315!2d-75.17364042412567!3d3.3536404518597136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3bedf61aa8128d%3A0xbe812cff07c2bf92!2sHostal%20El%20Ruby!5e0!3m2!1ses!2sco!4v1683844836157!5m2!1ses!2sco"
                            style="box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.658); border-radius: 50px; box-shadow: 100px;" allowfullscreen=" " loading="lazy " referrerpolicy="no-referrer-when-downgrade "></iframe>
                    </div>
                </nav>
            </div>
        </footer>
                <script src="assets/js/toggleHamburger.js"></script>
</body>

</html>