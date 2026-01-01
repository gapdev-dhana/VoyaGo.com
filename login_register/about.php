<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoyaGo Booking - ABOUT</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php require('inc/links.php'); ?>
    <style>
        :root{
            --teal:#2ec1ac;
            --teal_hover:#279e8c;
        }
        *{
            font-family: "Poppins", sans-serif;
        }
        .h-font{
            font-family: "Merienda", cursive;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }
        .custom-bg{
            background-color:var(--teal);
            border: 1px solid var(--teal);
        }
        .custom-bg:hover{
            background-color:var(--teal_hover);
            border-color:var(--teal_hover) ;
        }
        
       .h-line{
            width: 150px;
            margin: 0 auto;
            height: 1.7px;
        }
        .box{
            border-top-color: var(--teal) !important;
        }
        
    </style>
</head>
<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-blod h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        Welcome to VoyaGo Booking, where comfort meets exceptional service. 
        We are dedicated to providing a memorable stay, offering top-notch amenities and a warm,<br> 
        welcoming atmosphere. Whether you're here for business or leisure, our goal is to ensure that you feel right at home. 
        Experience the best in hospitality with us!
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">Message from Our CEO, Alexander Collins.</h3>
                <p>
                "At Voyago Booking, we believe that travel is not just about the 
                destination—it's about the entire experience. Our team is dedicated to providing excellent service and top-notch 
                accommodations to ensure that every trip is memorable. We are constantly 
                innovating and expanding our offerings to meet the evolving needs of travelers. Thank you for choosing 
                Voyago Booking as your travel partner."
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/about.jpg" class="w-100">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/hotel.svg" width="70px">
                    <h4 class="mt-3">100+ ROOMS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/customers.svg" width="70px">
                    <h4 class="mt-3">500+ CUSTOMERS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/rating.svg" width="70px">
                    <h4 class="mt-3">150+ REVIEWS</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="images/about/staff.svg" width="70px">
                    <h4 class="mt-3">200+ STAFFS</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 fw-bold h-font text-center">MANAGEMENT TEAM</h3>

    <div class="container px-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/staff/staff1.jpg" class="w-100">
                    <h5 class="mt-2">James Thompson – General Manager</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/staff/staff3.jpg" class="w-100">
                    <h5 class="mt-2">Olivia Bennett – Director of Operations</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/staff/staff2.jpg" class="w-100">
                    <h5 class="mt-2">Michael Carter – Head of Marketing</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/staff/staff5.jpg" class="w-100">
                    <h5 class="mt-2">Sophia Reynolds – Guest Relations Manager</h5>
                </div>
                <div class="swiper-slide bg-white text-center overflow-hidden rounded">
                    <img src="images/staff/staff4.jpg" class="w-100">
                    <h5 class="mt-2">Daniel Foster – Chief Financial Officer</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween:40,
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
                slidesPerView:3,
            },
            1024:{
                slidesPerView:4,
            }
        }
        });
    </script>

</body>
</html>