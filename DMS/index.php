<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DORMITORY MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="shortcut icon" href="https://juniv.edu/images/favicon.ico">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="../img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="home.css" />


    <style>
        .modal-body {
            /*background-color: rgba(11,11,11,.5);*/
            background-color: #303841;
        }

        .carousel-inner {
            width: 100%;

        }

        .bdr {
            border-bottom: 2px solid red;
        }

        .radius {
            border-radius: 15px;
            transition: 0.5s all ease;
        }

        .radius:hover:after {

            content: " >";

        }

        .slick-initialized .slick-slide {
            outline: none;
        }

        .checked {
            color: orange;
        }

        .img-hv {
            transition: 0.5s all ease;
        }

        .img-hv:hover {
            transform: scale(1.2, 1.2);
        }

        .active,
        .menu-bar ul li:hover {
            background: #2bab0d;
            border-radius: 5px;

        }

        .sub-menu-1 {
            display: none;
        }

        .menu-bar ul li:hover .sub-menu-1 {
            display: block;
            position: absolute;
            background: rgb(0, 100, 0);
            margin-top: 15px;
            margin-left: -15px;

        }

        .menu-bar ul li:hover .sub-menu-1 ul {
            display: block;
            margin: 10px;
        }
    </style>
</head>

<body>

    <header class="header">
        <img src="images/ju_logo.png" alt style="height: 70px; width: 65px">
        <a href="#" class="logo" style="text-decoration: none;">DORMITORY MANAGEMENT SYSTEM</a>
        <nav class="navbar">
            <a href="#about" style=" text-decoration:none; ">About</a>
            <a href="#provost" style=" text-decoration:none; ">Notice</a>
            <a href="#hall" style=" text-decoration:none; ">Hall</a>
            <a href="#Gallery" style=" text-decoration:none; ">Gallery</a>
            <a href="#dining" style=" text-decoration:none; ">Dining</a>
            <a href="#contact" style=" text-decoration:none; ">contact</a>
            <button id="admin" style="    margin-left: 7px;height: 40px;width: 80px"><a href="login.php" style=" text-decoration:none; text-align:centre" id="link1">Login</a></button>
        </nav>

        </nav>
        <!----Login form---->
        <div class="modal fade" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title w-100">
                            <h4 class="text-muted">Login To Your Accout</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <div class="modal-body ">
                        <form action="" class="was-validated">
                            <div class="form-group">
                                <label for="email" class="text-info font-weight-bold">Email:</label>
                                <input type="email" class="form-control" placeholder="Enter Your Email" required>
                                <div class="valid-feedback">
                                    <strong>Your email address is valid</strong>
                                </div>
                                <div class="invalid-feedback">
                                    <strong>Please Enter a valid email address</strong>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd" class="text-primary font-weight-bold">Password:</label>
                                <input type="password" class="form-control" placeholder="Enter Your Password" minlength="6" maxlength="8" required>
                                <div class="valid-feedback">
                                    <strong>Your password very strong</strong>
                                </div>
                                <div class="invalid-feedback">
                                    <strong>Enter your password first</strong>
                                </div>
                            </div>
                            <div class="form-group form-group-check">
                                <label for="chk" class="form-group-label text-light font-weight-bold">
                                    <input type="checkbox" class="form-group-input"> Remember Me
                                </label>
                            </div>
                            <input type="submit" class="form-control btn btn-outline-success font-weight-bold" value="LogIn">
                        </form>
                    </div> <!----modal body close--->
                    <div class="modal-footer justify-content-start">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div> <!----modal content close--->
            </div> <!----modal dialog close--->
        </div> <!----modal close--->




        </nav>
    </header>
    <!-- header end -->

    <!-- main slide -->
    <div id="pslide" class="carousel slide" data-ride="carousel" style="margin-left: 40px; margin-right:40px">

        <!-- slider -->

        <div class="carousel-inner" data-interval="500">
            <!-- 1st slider -->
            <div class="carousel-item active">
                <!-- slider caption -->
                <div class="carousel-caption d-none d-md-block">
                    <!--   <h2 class="display-1 text-danger">This is my first slider</h2> -->
                </div>
                <img src="images/1.png" height="600px" width="100%" alt="">
            </div>
            <!-- 2nd slider -->
            <div class="carousel-item">
                <!-- slider caption -->
                <div class="carousel-caption">
                    <!--  <h2 class="display-1">This is my second slider</h2> -->
                </div>
                <img src="images/h1.jpg" height="600px" width="100%" alt="">
            </div>
            <!-- 3rd slider -->
            <div class="carousel-item">
                <!-- slider caption -->
                <div class="carousel-caption">
                    <!--   <h2 class="display-1">This is my third slider</h2> -->
                </div>
                <img src="images/h9.jpg" height="600px" width="100%" alt="">
            </div>
            <!-- 4th slider -->
            <div class="carousel-item">
                <!-- slider caption -->
                <div class="carousel-caption">
                    <!--    <h2 class="display-1">This is my third slider</h2> -->
                </div>
                <img src="images/2.jpg" height="600px" width="100%" alt="">
            </div>
        </div>

        <!-- next and prev icon -->
        <a href="#pslide" class="carousel-control-prev" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#pslide" class="carousel-control-next" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <!-- slider end -->

    <!-- about us section starts  -->
    <center>
        <h1 class="heading" style="margin-bottom: -50px;"> <span>About</span> </h1>
    </center>
    <section class="ftco-wrap-about">

        <div class="intro" id="about">
            <div class="container" id="sec_cond">
                <div class="row">
                    <div class="col">
                        <div class="intro_content" style="width: 550px; margin-right: 172px;height: 415px;">
                            <!-- <div class="intro_subtitle page_subtitle">About Us</div> -->
                            <div class="intro_title">
                                <h3>GREETINGS</h3>
                            </div>
                            <div class="intro_text">
                                <p>Hey there and welcome to the university dormitory! We're thrilled to have you here as a new resident. Our dorm is more than just a place to sleep - it's a community where you'll make lifelong friends and memories. We've got all the amenities you need to make your stay comfortable and enjoyable, from study lounges to laundry facilities. And our friendly staff is always here to help with any questions or concerns you may have. So kick back, relax, and get ready for an unforgettable college experience!
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6.5 col-md-6 intro_col">
                                <div class="intro_image"><img src="images/slider5.jpg" alt="intro" style="max-width: 100%;
    border-radius: 0px 0px 10px 10px; border: 2px solid darksalmon"></div>
                            </div>
                            <!-- <div class="col-xl-4 col-md-4 intro_col">
                                <div class="intro_image"><img src="images/img2.jpg" alt="intro"></div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->


    <!-- provost  start -->
    <section class="provost" id="provost">

        <center>
            <h1 class="heading" style="margin-top: 10px;"> <span>NOTICE</span> </h1>
        </center>

        <div class="box-container">

            <div class="box">
                <h3 align="left" style="padding: 5px 10px 5px 70px;">
                    Dear University Hall Residents,<br>
                    As we approach the Victory Day of Bangladesh, we would like to invite you all to join us for a special feast to commemorate this historic occasion. The feast will be held on December 16th at the dining hall, starting at 7:00 PM.
                    <br><br> In order to participate in the feast, you will need to purchase a coupon for 30 taka from the hall office. This coupon will entitle you to a plate of delicious Bangladeshi food, including biryani, kebab, and sweets.
                    <br><br>Please note that coupons will be available for purchase starting from December 10th and will be sold on a first-come, first-served basis. We encourage you to get your coupons early to avoid disappointment.
                    <br><br>If you have any questions or concerns, please do not hesitate to contact the hall office. We look forward to celebrating Victory Day with you all!
                    <br><br>Best regards,
                    <br><br> University Hall Office Staff
                </h3>
            </div>
        </div>
    </section>

    <!-- doctors section starts  -->

    <section class="hall" id="hall">

        <h1 class="heading"> our <span>Hall</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/h1.jpg" alt="">
                <h3>Mir Mosharraf Hossain Hall</h3>
            </div>

            <div class="box">
                <img src="images/h2.jpg" alt="">
                <h3>Shaheed Salam-Barkat Hall</h3>
            </div>

            <div class="box">
                <img src="images/h3.jpg" alt="">
                <h3>Bangabandhu Sheikh Mujibur Rahman Hall</h3>
            </div>

            <div class="box">
                <img src="images/h4.jpg" alt="">
                <h3>Al Beruni Hall</h3>
            </div>

            <div class="box">
                <img src="images/h5.jpg" alt="">
                <h3>Shaheed Rafiq-Jabbar Hall</h3>
            </div>

            <div class="box">
                <img src="images/h6.jpg" alt="">
                <h3>A F M Kamaluddin Hall</h3>
            </div>


            <div class="box">
                <img src="images/h7.jpg" alt="">
                <h3>Mowlana Bhashani Hall</h3>
            </div>

            <div class="box">
                <img src="images/h8.jpg" alt="">
                <h3>Bishwakabi Rabindranath Tagore Hall</h3>
            </div>

            <div class="box">
                <img src="images/h9.jpg" alt="">
                <h3>Jahanara Imam Hall</h3>
            </div>

            <div class="box">
                <img src="images/h10.jpg" alt="">
                <h3>Nawab Faizunnesa Hall</h3>
            </div>

            <div class="box">
                <img src="images/h11.jpg" alt="">
                <h3>Pritilata Hall</h3>
            </div>

            <div class="box">
                <img src="images/h12.jpg" alt="">
                <h3>Fazilatunnesa Hall</h3>
            </div>

            <div class="box">
                <img src="images/h13.jpg" alt="">
                <h3>Begum Khaleda Zia Hall</h3>
            </div>

            <div class="box">
                <img src="images/h14.jpg" alt="">
                <h3>Sheikh Hasina Hall</h3>
            </div>

            <div class="box">
                <img src="images/h15.jpg" alt="">
                <h3>Bangamata Begum Fazilatunnessa Mujib Hall</h3>
            </div>

            <div class="box">
                <img src="images/h16.jpg" alt="">
                <h3>Begum Sufia Kamal Hall</h3>
            </div>

        </div>

    </section>

    <!-- doctors section ends -->


    <!-- Galary section start-->
    <div class="container-fluid pt-5 pb-3" id="Gallery" style="margin-top:20px">
        <h1 class=" heading">Galary</h1>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <li class="btn btn-sm btn-outline-info m-1 active" data-filter="*" style=" text-decoration:none; ">All</li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".first"><a href="#room" style=" text-decoration:none; "> Room </a>
                    </li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".second"><a href="#floor" style=" text-decoration:none; ">Floor</li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".third"><a href="#canteen" style=" text-decoration:none; ">Canteen</li>
                </ul>
            </div>
        </div>
        <div class="container" id="cont">
            <div class="position-relative d-flex align-items-center justify-content-center" id="sec_cond1">
                <div class="row portfolio-container" id="room">
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/Room1.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/Room1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="room">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/Room2.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/Room2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="room">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/Room3.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/Room3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="floor">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/Floor1.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/Floor1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first" id="floor">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/Floor2.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/Floor2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="floor">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/Floor3.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/Floor3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="canteen">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/canteen1.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/canteen1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="canteen">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/canteen2.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/canteen2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="canteen">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/canteen3.jpg" alt="">
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/canteen3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Dining start -->
    </section>
    <div class="container-fluid pt-5 pb-3" id="dining" style="margin-top:20px">
        <h1 class=" heading">Dining</h1>
        <div class="row">
            <div class="col-12 text-center mb-2">
                <ul class="list-inline mb-4" id="portfolio-flters">
                    <a href="Dining/Order_form.html">
                        <li class="btn btn-sm btn-outline-info m-1 active" data-filter="*" style=" text-decoration:none; "> Coupon</li>
                    </a>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".first"><a href="#breakfast" style=" text-decoration:none; "> Breakfast </a>
                    </li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".second"><a href="#launch" style=" text-decoration:none; ">Launch</li>
                    <li class="btn btn-sm btn-outline-info m-1" data-filter=".third"><a href="#dinner" style=" text-decoration:none; ">Dinner</li>
                </ul>
            </div>
        </div>
        <div class="container" id="cont">
            <div class="position-relative d-flex align-items-center justify-content-center" id="sec_cond1">
                <div class="row portfolio-container" id="breakfast">
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/ruti.jpg" alt="">
                            <h2 style="color:blue">Ruti Per piece : 10 BDT</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/ruti.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="breakfast">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/vaji.jpg" alt="">
                            <h2 style="color:blue">Vaji: 20 BDT</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/vaji.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="breakfast">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/dall.jpg" alt="">
                            <h2 style="color:blue">Dall: 15 BDT</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/dall.jpg" data-lightbox="portfolio">

                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="launch">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/rice.jpg" alt="">
                            <h2 style="color:blue">Rice: 20 BDT</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/rice.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item first" id="launch">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/fish.jpg" alt="">
                            <h2 style="color:blue">Fish: 50 BDT</h2>

                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/fish.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="launch">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/murgi.jpg" alt="">
                            <h2 style="color:blue">Chicken: 50 BDT</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/murgi.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item second" id="dinner">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/nan.avif" alt="">
                            <h2 style="color:blue">Nan: 30 BDT</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/canteen1.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="dinner">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/grill.jpg" alt="">
                            <h2 style="color:blue">Checken Grill Full: 300 BDT</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/canteen2.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4 portfolio-item third" id="dinner">
                        <div class="position-relative overflow-hidden mb-2">
                            <img class="img-fluid rounded w-100" src="images/egg.jpg" alt="">
                            <h2 style="color:blue">Egg: 20 BDT</h2>
                            <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                                <a href="images/canteen3.jpg" data-lightbox="portfolio">
                                    <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dining End -->


    <!-- Contact Start -->


    <section id="contact" class="contact">
        <h1 class=" heading">Contact</h1>
        <div class="container" id="cont">

            <div class="section-title" id="sec_cond">
                <div class="row" data-aos="fade-in">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bx bx-home"></i>
                                <h4>Location:</h4>
                                <p>Jahanginagar University,savar</p>
                            </div>

                            <div class="mail">
                                <i class="bx bx-envelope"></i>
                                <h4>mail:</h4>
                                <p>juhall@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bx bxl-skype"></i>
                                <h4>Call:</h4>
                                <p>02224491052</p>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3728.1760830597646!2d90.26664878884148!3d23.879370153102187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e99900000001%3A0x2debf98e950c72ca!2sJahangirnagar%20University!5e0!3m2!1sen!2sbd!4v1680456384141!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="message/message.php" method="post" role="form" class="php-email-form">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="Stu_ID" class="message">Student ID</label>
                                    <input type="text" name="Stu_ID" class="form-control" id="Stu_ID" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Name" class="message">Student Name</label>
                                    <input type="text" class="form-control" name="Name" id="Name" data-rule="Name" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Room_Num" class="message">Room Number</label>
                                <input type="text" class="form-control" name="Room_Num" id="Room_Num" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <label for="Messages" class="message">Message</label>
                                <textarea type="text" class="form-control" name="Messages" id="Messages" rows="15" data-rule="required" data-msg="Please write something for us"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center" id="button_mes"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->


    <!-- footer start -->

    <section class="footer" id="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> home </a>
                <a href="#provost" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> Provost </a>
                <a href="#about" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> Student </a>
                <a href="#Gallery" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> Gallery </a>
                <a href="#contact" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> Contact</a>
            </div>

            <div class="box">
                <h3>Useful Links</h3>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> NOC &GO </a>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> Download Form </a>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> Result </a>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> Reaserch Work </a>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-chevron-right"></i> Office </a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-phone" style="text-decoration: none;"></i> 1324 </a>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-phone" style="text-decoration: none;"></i> 02224491045-51 </a>
                <a href="#" style="text-decoration: none;"> <i class="fas fa-envelope"></i> ssbhall@gmail.com </a>
                <a href="https://www.google.com/maps/place/Shaheed+Salam+Barkat+Hall/@23.8823987,90.2620247,17z/data=!3m1!4b1!4m5!3m4!1s0x3755e9a02b7f1e89:0x6d20e40f3a231f37!8m2!3d23.8823987!4d90.2642134" style="text-decoration: none;"> <i class="fas fa-map-marker-alt"></i> Jahangirnagar University, Savar, Dhaka-1342, Bangladesh. </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a target="_blank" href="https://www.facebook.com/ssbhju" target="_blank" style="text-decoration: none;"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#" style="text-decoration: none;"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#" style="text-decoration: none;"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#" style="text-decoration: none;"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#" style="text-decoration: none;"> <i class="fab fa-pinterest"></i> pinterest </a>
            </div>

        </div>



    </section>



    <!-- footer end -->
    <!-- footer -->
    <div class="container-fluid bg-dark text-white mt-5 py-1 px-sm-1 px-md-5" style="height: 150px;">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4" style="margin-top: 5px;">
                <a class="btn btn-light btn-social mr-2" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-light btn-social" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="credit">
                <h2>created by <span>Group 8</span> | @all rights reserved</h2>
            </div>
        </div>
    </div>
    <!-- footer -->






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!--  smooth scroll -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- jquery -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- slick slider js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>

    <script>
        $('.pslick').slick({
            dots: false,
            infinite: true,
            speed: 300,
            autoplay: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        });
    </script>

</body>

</html>