<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VoyaGo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="assets/css/section_hero.css">
  <link rel="stylesheet" href="assets/css/header.css">

  <style>
    .mySwiper4 {
    width: 100%;
    padding-top: 50px;
    padding-bottom: 50px;
    }

    .mySwiper4 .swiper-slide {
    background-position: center;
    background-size: cover;
    width: 500px;
    height: 500px;
    border-radius: 10px;
    }

    .mySwiper4 .swiper-slide p {
    color: white;
    font-size: 40px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    }

    .ftco-section {
    padding: 3em 0;
}

.no-gutters {
    margin-right: 0;
    margin-left: 0;
}

.no-gutters > .col-md-7,
.no-gutters > .col-md-5 {
    padding-right: 0;
    padding-left: 0;
}

.img {
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 400px; /* Adjust the height as needed */
    position: relative;
}

.img-1 {
    margin-right: 1rem;
}

.img-2 {
    margin-left: 1rem;
}

@media (min-width: 768px) {
    .img {
        height: 500px; /* Adjust for larger screens */
    }
}
.bookbtn{
    background-color: #007bff;
    border-color: #007bff !important;
    color: #fff; /* Text color */
    transition: 0.15s;
}
.bookbtn:hover{
    background-color: #fff;
    color: #007bff;
}

  </style>
</head>
<body>
    <!--header-->
    <header id="header" class="header fixed-top">

        <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">VoyaGo@gmail.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+9432 2257 667</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">
            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="voyago.php" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">VoyaGo.LK</h1>
                <span>.</span>
                </a>

                <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#" class="active">Home<br></a></li>
                    <li><a href="#about">About</a></li>
                    <li class="dropdown"><a href="#destination"><span>Destination</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Sigiriya Rock Fortress</a></li>
                        <!--<li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Sigiriya</a></li>
                            <li><a href="#">World's End Nuwara Eliya</a></li>
                            <li><a href="#">Yala National Park</a></li>
                            <li><a href="#">Galle Face Green</a></li>
                            <li><a href="#">Sinharaja Forest Reserve</a></li>
                        </ul>
                        </li>-->
                        <li><a href="#">Ella</a></li>
                        <li><a href="#">Kandy</a></li>
                        <li><a href="#">Galle Fort</a></li>
                        <li><a href="#">Yala National Park</a></li>
                        <li><a href="#">Nuwara Eliya</a></li>
                        <li><a href="#">Polonnaruwa</a></li>
                        <li><a href="#">Mirissa</a></li>
                        <li><a href="#">Colombo</a></li>
                        <li><a href="#">Adam&#39;s Peak (Sri Pada)</a></li>

                    </ul>
                    </li>
                    <li><a href="voyago_booking/index.php">Booking</a></li>
                    <li><a href="voyago_shop/index.html">Shop</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>
            </div>
        </div>
    </header>

    <main class="hero">
        <section class="videocart">
            <div class="conttainer-fluid px-lg-4">
                <video autoplay loop muted playsinline class="vdo">
                    <source src="assets/images/header_video (online-video-cutter.com).mp4" type="video/mp4">
                </video>
            </div>
            
            <div class="container-fluid head_title col-lg-6 col-md-12" style="position: absolute;">
                <div class="head_tit" style="display: flex; flex-direction: column; align-items: center; justify-content: center; background-color: rgba(0, 0, 0, 0); padding: 20px; border-radius: 10px;">
                    <h1 class="head_title1" style="font-weight: bold;">Welcome to VoyaGo.LK </h1>
                    <p class="head_title2" style="font-weight: 400;">
                        "Your gateway to the world's best travel experiences.
                        Whether you're exploring exotic destinations, shopping for travel essentials,
                        or booking the perfect hotel, VoyaGo.LK is here to make your journey unforgettable."
                    </p>
                    <div class="button_2">
                        <button type="button" class="btn btn btn-outline-success mx-3 get_start_button px-3">Get Started</button>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn-watch-video d-flex align-items-center mx-3" style="border-color: white;">
                            <i class="bi bi-play-circle watch_button"></i><span style="margin-left: 5px; color: white;" class="watch_video1">Watch Video</span>
                        </a>
                    </div>
                </div>
            </div>
            
        
            <div class="icon-boxes position-relative">
                <div class="container position-relative">
                <div class="row gy-4">
    
                    <div class="col-xl-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Explore Destinations</a></h4>
                        </div>
                    </div><!--End Icon Box -->
    
                    <div class="col-xl-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-shop-window"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Shop for Travel Essentials</a></h4>
                        </div>
                    </div><!--End Icon Box -->
    
                    <div class="col-xl-4 col-md-6">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-house-check-fill"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Book Your Perfect Hotel</a></h4>
                        </div>
                    </div><!--End Icon Box -->
    
                </div>
                </div>
            </div>
    
        </section>
        
        <!-- About us -->
        <section id="about" class="about-us A01-about ">
            <div class="title-start col-md-4 col-md-offset-4 mx-auto text-center">
                <br />
                <h1 class="mt-5 pt-4 mb-2 text-center fw-bold h-font">About Us</h1>
                <div class="h-line bg-dark"></div>
                <p class="sub-text mt-3">Know our great story</p>
            </div>
            <div class="container mx-auto A02-about" style="margin-top: 70px;">
                <div class="row about-first">
                    <div class="col-md-4 text-center">
                        <div class="content-block">
                            <i class="bi bi-people-fill" style="font-size: 40px;"></i>
                            <h5>Wide Customer Base</h5>
                            <p style="font-size: 16px;">We have served travelers from all over the world, ensuring memorable experiences for every journey.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="content-block">
                            <i class="bi bi-rocket-takeoff-fill" style="font-size: 40px;"></i>
                            <h5>Innovative Travel Solutions</h5>
                            <p style="font-size: 16px;">Our travel packages are designed to provide you with a seamless and enjoyable experience, wherever you go.</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center" >
                        <div class="content-block">
                            <i class="bi bi-trophy-fill" style="font-size: 40px;"></i>
                            <h5>Award-Winning Services</h5>
                            <p style="font-size: 16px;">Recognized globally, our travel services have won numerous awards for excellence in customer satisfaction.</p>
                        </div>
                    </div>
                </div>
                <div class="row about-part" style="margin-top: 70px;">
                    <div class="col-md-8">
                        <h5>About Us</h5>
                        <p style="font-size: 16px;">We are dedicated to making your travel dreams come true. With years of experience in the travel industry, we provide personalized and professional services to ensure you have the best experience possible. Our team is passionate about exploring new destinations and sharing those adventures with you.</p>
                        <p style="font-size: 16px;">Our mission is to offer exceptional travel experiences that cater to your interests and preferences. Whether you are looking for a relaxing beach vacation, an adventurous mountain trek, or a cultural city tour, we have the perfect package for you. Let us help you create memories that will last a lifetime.</p>
                    </div>
                    <div class="col-md-4">
                        <p style="font-size: 16px;">Customer Satisfaction</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                        </div>
                        <br />
                        <p style="font-size: 16px;">Travel Packages</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">85%</div>
                        </div>
                        <br />
                    </div>
                </div>
            </div>
        </section>

        
        <!--destination cards-->
        <section id="destination">
        <p class="text-center mt-5 ">Explore Now</p>
        <h2 class="text-center fw-bold h-font" >Discover Our Top Destinations</h2>
        <div class="h-line bg-dark mb-5" style="width: 250px;"></div>
        <section style="margin-bottom: 30px;">
            <div class="container">
                <div class="swiper mySwiper4">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide" style="background-image: url(assets/images/destinations/ella.jpg);">
                        <p>Ella</p>
                      </div>
                      <div class="swiper-slide" style="background-image: url(assets/images/destinations/kandy.jpg);">
                        <p>Kandy</p>
                      </div>
                      <div class="swiper-slide" style="background-image: url(assets/images/destinations/sigiriya.jpg);">
                        <p>Sigiriya Rock</p>
                      </div>
                      <div class="swiper-slide" style="background-image: url(assets/images/destinations/galle-fort.jpg);">
                        <p>Galle Fort</p>
                      </div>
                      <div class="swiper-slide" style="background-image: url(assets/images/destinations/yala.jpg);">
                        <p>Yala</p>
                      </div>
                      <div class="swiper-slide" style="background-image: url(assets/images/destinations/Nuwara-Eliya.jpg);">
                        <p>Nuwala Eliya</p>
                      </div>
                      <div class="swiper-slide" style="background-image: url(assets/images/destinations/polonnaruwa.jpg);">
                        <p>Polonnaruwa</p>
                      </div>
                      <div class="swiper-slide" style="background-image: url(assets/images/destinations/colombo-night.jpg);">
                        <p>Colombo</p>
                      </div>
                      <div class="swiper-slide" style="background-image: url(assets/images/destinations/mirissa.jpg);">
                        <p>Mirissa</p>
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none ">Explore More >>></a>
                </div>
            </div>
        </section>
        </section>
        

        <!--Hotel Booking-->
        <section class="ftco-section ftco-wrap-about ftco-no-pt ftco-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-7 order-md-last d-flex">
						<div class="img img-1 mr-md-2 ftco-animate" style="background-image: url(assets/images/about-1.jpg);"></div>
						<div class="img img-2 ml-md-2 ftco-animate" style="background-image: url(assets/images/about-2.jpg);"></div>
					</div>
					<div class="col-md-5 wrap-about pb-md-3 ftco-animate pr-md-5 pb-md-5 pt-md-4 px-4">
                        <div class="heading-section mb-4 my-5 my-md-0">
                            <span class="subheading" style="color: #21cc7a; font-weight: 600;">About VoyaGo Booking</span>
                            <h2 class="mb-4" style="font-weight: 600;">VoyaGo Booking: Your Trusted Partner in Travel Around the Globe</h2>
                        </div>
                        <p style="color:rgba(0, 0, 0, 0.6);">Whether you're planning a luxurious getaway or a quick weekend escape, VoyaGo offers the best booking experience tailored to your needs. Discover the world with us and make every trip memorable.</p>
                        <p><a href="#" class="btn btn-secondary rounded bookbtn" onclick="loadBookingPage()">Book Your Hotel Now</a></p>
					</div>
				</div>
			</div>
		</section>
        
        <!--shop card-->
        <p class="text-center mt-5 ">TRENDING NOW</p>
        <h2 class="text-center fw-bold h-font" >Shop Our Most Popular Products</h2>
        <div class="h-line bg-dark mb-5" style="width: 250px;"></div>
        
        <div class="container " id="mySwiper2">
            <div class="swiper mySwiper2">
                <div class="swiper-wrapper mb-5">
                    <div class="swiper-slide rounded" style="background-image: url(assets/images/shop-silde/img1.jpg); height: 490px;">
                        <div class="slider-text mt-5 mx-5">
                            <h2 class=" col-lg-6 mb-4 fw-bold">Equip Your Adventures with Top Travel Gadgets</h2>
                            <h4 class="col-lg-6 mb-4">Discover the latest hiking tools and travel gadgets to make your journey more exciting and hassle-free.</h4>
                            <div class="col-lg-6 mt-5">
                                <a href="#" class="btn btn-md btn-outline-dark rounded-25px fw-bold shadow-none ">Explore Now >>></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide rounded" style="background-image: url(assets/images/shop-silde/img3.jpg); height: 490px;">
                        <div class="slider-text mt-5 mx-5" style="color: rgb(33, 34, 34);">
                            <h2 class="col-lg-6 mb-4 fw-bold">Step Up Your Sneaker Game</h2>
                            <h4 class="col-lg-6 mb-4">Browse the latest styles and step into summer with confidence and style.</h4>
                            <div class="col-lg-6 mt-5">
                                <a href="#" class="btn btn-md btn-outline-dark rounded-25px fw-bold shadow-none ">Shop Casual Shoes >>></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide rounded" style="background-image: url(assets/images/shop-silde/img2.jpg); height: 490px;">
                        <div class="slider-text mt-5 mx-5">
                            <h2 class="col-lg-6 mb-4 fw-bold">Collect the Best Cards</h2>
                            <h4 class="col-lg-6 mb-4">Find rare and valuable cards to add to your collection or trade with others.</h4>
                            <div class="col-lg-6 mt-5">
                                <a href="#" class="btn btn-md btn-outline-dark rounded-25px fw-bold shadow-none ">Explore Now >>></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        <!--testimonials-->
        <h2 class="mt-5 pt-4 mb-2 text-center fw-bold h-font">TESTIMONIALS</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3 mb-5">See why our guests love staying at VoyaGo.LK. Their experiences reflect our dedication to comfort, quality, and outstanding service.</p>
        <div class="container mb-5">
            <!-- Swiper -->
            <div class="swiper swiper-testimonials">
                <div class="swiper-wrapper mb-5">

                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <i class="bi bi-star-fill " style="font-size: 25px;"></i>
                            <h6 class="m-0 ms-2">Emily R.</h6>
                        </div>
                        <p>
                            "I’m so glad I found VoyaGo.LK . The booking process was incredibly simple, and I loved how easy it was to find the perfect hotel. The descriptions were accurate, and the customer service was fantastic. I’ll definitely be using this site for all my future travels!"
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <i class="bi bi-star-fill" style="font-size: 25px;"></i>
                            <h6 class="m-0 ms-2">David M.</h6>
                        </div>
                        <p>
                            "Booking through VoyaGo.LK was a breeze. The site is well-designed and offers a great range of options. The hotel I chose exceeded my expectations, and everything was exactly as promised. I’m very impressed with the service!"
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <i class="bi bi-star-fill" style="font-size: 25px;"></i>
                            <h6 class="m-0 ms-2">Jessica L.</h6>
                        </div>
                        <p>
                            "Fantastic experience! VoyaGo.LK made it so easy to find and book the perfect hotel. The interface is clean and intuitive, and the prices were unbeatable. I highly recommend this site to anyone looking for a smooth booking experience."
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <i class="bi bi-star-fill" style="font-size: 25px;"></i>
                            <h6 class="m-0 ms-2"> Michael T.</h6>
                        </div>
                        <p>
                            VoyaGo.LK is my go-to for hotel bookings. The entire process is straightforward, and the selection is amazing. I found a great deal on a hotel that matched exactly what I was looking for. The site is reliable, and the customer service is top-notch!"
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </div>
                    </div>

                </div>
        
                <div class="swiper-pagination"></div>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none ">Know More >>></a>
            </div>
        </div>

        <!--Contact us section-->
        <div class="my-5 px-4 pt-5" id="contact">
            <h2 class="fw-blod h-font text-center fw-bold ">CONTACT US</h2>
            <div class="h-line bg-dark"></div>
            <p class="text-center mt-3">
            We're here to help! Whether you have questions, need assistance, or want to make a reservation, feel free to reach out to us. <br>
            Our team is available 24/7 to ensure your experience at VoyaGo.LK is seamless and enjoyable. 
            We look forward to hearing from you!
            </p>
        </div>
        
        <div class="container mb-4">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-5 px-4 ">
                    <div class="rounded shadow p-4 cont_bg ">

                        <h5 class="fw-bold">Address</h5> 
                        <a href="https://maps.app.goo.gl/M9rbxUW9fJZSW3VS9" target="_blank" class="d-inline-block text-decoration-none text-white mb-2">
                            <i class="bi bi-geo-alt-fill m-2"></i>12/A, VoyaGo Hotel, Gall Road, Colombo 7, Sri Lanka.
                        </a> 

                        <h5 class="mt-4 fw-bold">Call us</h5>
                        <a href="tel: +9477 224 3456 " class="d-inline-block mb-2 text-decoration-none text-white"><i class="bi bi-telephone-fill m-2"></i>+9432 2257 667</a>
                        <br>
                        <a href="tel: +9477 224 3458 " class="d-inline-block text-decoration-none text-white"><i class="bi bi-telephone-fill m-2"></i>+9432 2257 668</a> 
                        <h5 class="mt-4 fw-bold">Email</h5>
                        <a href="mailto: VoyaGo.Booking@gmail.com" class="d-inline-block text-decoration-none text-white"><i class="bi bi-envelope-fill m-2"></i>VoyaGo@gmail.com</a>  
                        
                        <h5 class="mt-4 fw-bold">Follow us</h5>
                        <a href="#" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bi bi-twitter me-1 m-2"></i>
                        <br>
                        <a href="#" class="d-inline-block text-dark fs-5 me-2">
                            <i class="bi bi-facebook me-1 m-2"></i>
                        </a>
                        <a href="#" class="d-inline-block text-dark fs-5 ">
                            <i class="bi bi-instagram me-1 m-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6  px-4">
                    <div class="bg-white rounded shadow p-4 ">
                        <form>
                            <h5>Send a message</h5>
                            <div class="mt-3">
                                <label class="from-label" style="font-weight:500;">Name</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="from-label" style="font-weight:500;">Email</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="from-label" style="font-weight:500;">Subject</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="mt-3">
                                <label class="from-label" style="font-weight:500;">Message</label>
                                <textarea class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
                            </div>
                            <button  type="submit" class="btn text-white custom-bg mt-3">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>    

    <!--footer-->
    <footer id="footer" class="footer accent-background">

        <div class="container footer-top">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
              <a href="index.html" class="logo d-flex align-items-center">
                <span class="sitename">VoyaGo.LK</span>
              </a>
              <p>
                 Explore our website to find your perfect trip and begin planning your next great adventure today. 
                 Let Wanderlust Adventures take you on a journey you'l never forget.
              </p>
              <div class="social-links d-flex mt-4">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
    
            <div class="col-lg-2 col-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Destination</a></li>
                <li><a href="#">Booking</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
    
            <div class="col-lg-2 col-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><a href="#">Hotel Reservations</a></li>
                <li><a href="#">Travel Insurance</a></li>
                <li><a href="#">Guided Tours</a></li>
                <li><a href="#">Car Rentals</a></li>
                <li><a href="#">24/7 Customer Support</a></li>
              </ul>
            </div>
    
            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
              <h4>Contact Us</h4>
              <p class="mt-4"><strong>Phone:</strong> <span>+9432 2257 667</span></p>
              <p><strong>Phone:</strong> <span>+9432 2257 668</span></p>
              <p class="mt-3"><strong>Email:</strong> <span>VoyaGo@gmail.com</span></p>
              <p class="mt-3"><strong>Address:</strong> <span>12/A, VoyaGo Hotel, Gall Road, Colombo 7, Sri Lanka.</span></p>
            </div>
    
          </div>
        </div>
    
        <div class="container copyright text-center mt-4">
          <p>© <span>Copyright</span> <strong class="px-1 sitename">VoyaGo.LK</strong> <span>All Rights Reserved</span></p>
          <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">VoyaGoMade</a>
          </div>
        </div>
    
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="assets/js/header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>    
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop:true,
            autoplay:{
                delay:3500,
                disableOnInteraction: false,
            }
        });

        var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView:"3",
        loop: true,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        breakpoints:{
            320:{
                slidesPerView:1,
            },
            640:{
                slidesPerView:1,
            },
            768:{
                slidesPerView:2,
            },
            1024:{
                slidesPerView:3,
            }
        }
        });

        var swiper = new Swiper(".mySwiper2", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        });

        var swiper = new Swiper(".mySwiper3", {
            effect: "cards",
            grabCursor: true,
        });

        var swiper = new Swiper(".mySwiper4", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</body>
</html>