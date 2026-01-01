<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VoyaGo Booking - CONTACT US</title>
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
        <h2 class="fw-blod h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
        We're here to help! Whether you have questions, need assistance, or want to make a reservation, feel free to reach out to us. <br>
        Our team is available 24/7 to ensure your experience at VoyaGo Bookig is seamless and enjoyable. 
        We look forward to hearing from you!
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe height="320px" class="w-100 rounded mb-4"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.6321540222!2d79.77380428561065!3d6.921831561089554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1723965289823!5m2!1sen!2slk"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <h5>Address</h5> 
                    <a href="https://maps.app.goo.gl/M9rbxUW9fJZSW3VS9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i>12/A, VoyaGo Hotel, Gall Road, Colombo 7, Sri Lanka.
                    </a> 

                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +9477 224 3456 " class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+9477 224 3456</a>
                    <br>
                    <a href="tel: +9477 224 3458 " class="d-inline-block text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+9477 224 3458</a> 
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: VoyaGo.Booking@gmail.com" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i>VoyaGo.Booking@gmail.com</a>  
                    
                    <h5 class="mt-4">Follow us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    <br>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 ">
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6  px-4">
                <div class="bg-white rounded shadow p-4 ">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="from-label" style="font-weight:500;">Namel</label>
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
    <?php require('inc/footer.php'); ?>

</body>
</html>