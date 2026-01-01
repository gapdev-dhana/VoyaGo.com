<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoyaGo Booking - FACILITIES</title>
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
        .pop:hover{
            border-top-color:var(--teal) !important;
            transform:scale(1.03);
            transition:all 0.3s;
        }
    </style>
</head>
<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-blod h-font text-center">OUR FACILITIES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        At VoyaGo Booking, we offer a range of facilities to ensure a comfortable and convenient stay. 
        Enjoy high-speed WiFi, air conditioning, and flat-screen TVs in every room. <br> Relax at our on-site spa, 
        stay warm with room heaters, and enjoy 24/7 hot water with our geyser system. Everything you need for a pleasant stay is right here.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/IMG_43553.svg" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>
                    Stay connected with high-speed wireless internet available throughout the property, ensuring you can work, stream, or browse with ease.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/IMG_49949.svg" width="40px">
                        <h5 class="m-0 ms-3">Air Conditioner</h5>
                    </div>
                    <p>
                    Enjoy a comfortable stay with our efficient air conditioning system that keeps your room cool and pleasant, no matter the weather outside.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/IMG_41622.svg" width="40px">
                        <h5 class="m-0 ms-3">Television</h5>
                    </div>
                    <p>
                    Unwind with a wide selection of channels and entertainment options on the flat-screen television provided in each room.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/IMG_47816.svg" width="40px">
                        <h5 class="m-0 ms-3">Spa</h5>
                    </div>
                    <p>
                    Relax and rejuvenate at our on-site spa, offering a variety of treatments and therapies to soothe your body and mind.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/IMG_96423.svg" width="40px">
                        <h5 class="m-0 ms-3">Room Heater</h5>
                    </div>
                    <p>
                    Keep warm during chilly nights with our room heater, ensuring a cozy and comfortable environment in your room.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="images/facilities/IMG_27079.svg" width="40px">
                        <h5 class="m-0 ms-3">Geyser</h5>
                    </div>
                    <p>
                    Hot water is available 24/7 with our efficient geyser system, ensuring a refreshing shower whenever you need it.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php require('inc/footer.php'); ?>

</body>
</html>