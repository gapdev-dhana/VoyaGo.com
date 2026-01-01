<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoyaGo Booking - ROOMS</title>
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
    </style>
</head>
<body class="bg-light">
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-blod h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        At VoyaGo Booking, we offer a unique blend of comfort, luxury, and exceptional service.<br> 
        Each of our hotels is designed to provide a relaxing and memorable stay, with stylish rooms, 
        modern amenities, <br> and a welcoming atmosphere. Whether you're traveling for business or leisure, 
        we ensure that every detail is perfect for your stay.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-item-stretch">
                    <h4 class="mt-2">FILTERS</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size:18px;">CHECK AVAILABILITY</h5>
                            <label class="from-label">Check In</label>
                            <input type="date" class="form-control shadow-none mb-3">
                            <label class="from-label" >Check Out</label>
                            <input type="date" class="form-control shadow-none ">
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size:18px;">FACILITIES</h5>
                            <div class="mb-2">
                                <input type="checkbox" id="f1" class="form-check-input  shadow-none me-1">
                                <label class="from-check-label" for="f1" >one</label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" id="f2" class="form-check-input  shadow-none me-1">
                                <label class="from-check-label" for="f2" >two</label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" id="f3" class="form-check-input  shadow-none me-1">
                                <label class="from-check-label" for="f3" >three</label>
                            </div>
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size:18px;">GUESTS</h5>
                            <div class="d-flex">
                                <div class="me-3">
                                    <label class="from-label">Adults</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div>
                                    <label class="from-label">Children</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow" >
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    6 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    3 Children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">$110 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow" >
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    6 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    3 Children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">$110 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow" >
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="facilities mb-3">
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
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    6 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap ">
                                    3 Children
                                </span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">$110 per night</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>

</body>
</html>