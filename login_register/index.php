<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoyaGo Booking - HOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
   <style>
        .avilability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }
        @media screen and (max-width: 575px){
            .avilability-form{
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>
<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <!-- carousel -->
    <div class="conttainer-fluid px-lg-4 mt-4 ">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-100 d-block" >
                </div> 
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-100 d-block">
                </div> 
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-100 d-block" >
                </div> 
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-100 d-block" >
                </div> 
                <div class="swiper-slide">
                    <img src="images/carousel/5.png" class="w-100 d-block" >
                </div> 
                <div class="swiper-slide">
                    <img src="images/carousel/6.png" class="w-100 d-block" >
                </div>  
            </div>
        </div>
    </div>

    <!-- check avilability form -->
    <div class="container avilability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end mb-3 ">
                        <div class="col-lg-3 mb-3">
                            <label class="from-label" style="font-weight:500;">Check In</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3 ">
                            <label class="from-label" style="font-weight:500;">Check out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3 ">
                            <label class="from-label" style="font-weight:500;">Adult</label>
                            <select class="form-select shadow-none"  >
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3 ">
                            <label class="from-label" style="font-weight:500;">Children</label>
                            <select class="form-select shadow-none" >
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--our rooms-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
    
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top" >
    
                    <div class="card-body">
                      <h5 >Deluxe City View Room</h5>
                      <h6 class="mb-4">$110 per night</h6>
                      <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            3 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            2 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            4 sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            High-Speed WiFi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            Smart TV
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            Mini Bar
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            Central Heating
                        </span>
                      </div>
                      <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            6 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            3 Children
                        </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </span>
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                      </div>
                    </div>
    
                </div>
    
            </div>
            <div class="col-lg-4 col-md-6 my-3">
    
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/2.png" class="card-img-top" >
    
                    <div class="card-body">
                      <h5 >Cozy Garden Suite</h5>
                      <h6 class="mb-4">$70 per night</h6>
                      <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        1 Master Bedroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        1 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        1 Terrace
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        2 Sofas
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        Complimentary Breakfast
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        Netflix Access
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        Air Conditioning
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        Coffee Maker
                        </span>
                      </div>
                      <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            2 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            2 Children
                        </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                      </div>
                    </div>
    
                </div>
    
            </div>
            <div class="col-lg-4 col-md-6 my-3">
    
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/8.png" class="card-img-top" >
    
                    <div class="card-body">
                      <h5 >Luxury Family Room</h5>
                      <h6 class="mb-4">$200 per night</h6>
                      <div class="features mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            4 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            3 Bathroom
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            2 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            5 sofa
                        </span>
                      </div>
                      <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        Private Pool
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        Home Theater System
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        Fully Equipped Kitchen
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                        Fireplace
                        </span>
                      </div>
                      <div class="guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            8 Adults
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap ">
                            5 Children
                        </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                      </div>
                    </div>
    
                </div>
    
            </div>
    
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!--our Facilities-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container mt-5">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-0">
            <div class="col-lg-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_27079.svg" width="80px">
                <h5 class="mt-3">Geyser</h5>
            </div>
            <div class="col-lg-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_96423.svg" width="80px">
                <h5 class="mt-3">Room Heater</h5>
            </div>
            <div class="col-lg-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_47816.svg" width="80px">
                <h5 class="mt-3">Spa</h5>
            </div>
            <div class="col-lg-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_41622.svg" width="80px">
                <h5 class="mt-3">Television</h5>
            </div>
            <div class="col-lg-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/IMG_49949.svg" width="80px">
                <h5 class="mt-3">Air Conditioner</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>

    <!--testimonials-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
    <div class="container">
        <!-- Swiper -->
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Emily R.</h6>
                    </div>
                    <p>
                        "I’m so glad I found VoyaGo Booking. The booking process was incredibly simple, and I loved how easy it was to find the perfect hotel. The descriptions were accurate, and the customer service was fantastic. I’ll definitely be using this site for all my future travels!"
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
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">David M.</h6>
                    </div>
                    <p>
                        "Booking through VoyaGo Booking was a breeze. The site is well-designed and offers a great range of options. The hotel I chose exceeded my expectations, and everything was exactly as promised. I’m very impressed with the service!"
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
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2">Jessica L.</h6>
                    </div>
                    <p>
                        "Fantastic experience! VoyaGo Booking made it so easy to find and book the perfect hotel. The interface is clean and intuitive, and the prices were unbeatable. I highly recommend this site to anyone looking for a smooth booking experience."
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
                        <img src="images/facilities/star.svg" width="30px">
                        <h6 class="m-0 ms-2"> Michael T.</h6>
                    </div>
                    <p>
                        VoyaGo Booking is my go-to for hotel bookings. The entire process is straightforward, and the selection is amazing. I found a great deal on a hotel that matched exactly what I was looking for. The site is reliable, and the customer service is top-notch!"
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
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
    </div>

    <!--reach us-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 md-lg-0 mb-3 bg-white rounded">
                <iframe height="320px" class="w-100 rounded"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.6321540222!2d79.77380428561065!3d6.921831561089554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1723965289823!5m2!1sen!2slk"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel: +9477 224 3456 " class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+9477 224 3456</a>
                    <br>
                    <a href="tel: +9477 224 3458 " class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+9477 224 3458</a>            
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i>Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i>Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block ">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i>Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>

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
    </script>
  
</body>
</html>