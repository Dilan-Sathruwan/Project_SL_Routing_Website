<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./asset/css/styleindex.css">
    <!-- <link rel="stylesheet" href="./asset/css/Search box.css"> -->

    <style>
    .dropdown-menu {
        text-align: center;
    }

    .btn_SS {
        padding: 13px;
    }

    .Search-SS {
        display: inline-block;
        border-radius: 20px;
    }

    .Footer_Co {
        background: rgb(0, 9, 33);
        background: linear-gradient(180deg, rgba(0, 9, 33, 1) 0%, rgba(0, 208, 166, 0.9037990196078431) 49%, rgba(0, 30, 36, 1) 100%);
    }
    </style>

    <title>Bus time table</title>

</head>

<body>
    <!-- -----------------------------------
        navigetion start--
        ---------------------------------- -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand px-3" href="#"><img src="./asset/Images/PLWa.png" width="80" height="auto"
                alt="Nav logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active mx-2">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="./asset/About Us.php">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#our-service">Our service</a>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin panel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item Footer_Col" href="./asset/Owner Login.php">Admin Login</a>
                        <a class="dropdown-item Footer_Col" href="./asset/Owner Login.php">Owerner Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item Footer_Col" href="./asset/Owner S.php">Registation</a>
                    </div>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#footerss">Contact us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <?php
                if (isset($_SESSION["uname"])) {
                    echo '<a class="btn btn-outline-success my-2 my-sm-0 mx-2" href="#">' . 'User: ' . $_SESSION["uname"] . '</a>';
                    echo '<a class="btn btn-outline-success my-2 my-sm-0 mx-2" id="logoutButton" href="asset\includes\logout.inc.php">Log Out</a>';
                } else {
                    echo '<a class="btn btn-outline-success my-2 my-sm-0 mx-2" href="./asset/User Login.php"
                    target="_blank">User Login</a>';
                }

                ?></h2>
            </form>
        </div>
    </nav>
    <!-- navigetion stop -->

    <!------------------------------------
        Background image slide show start  *bootstrap
        ------------------------------>
    <div id="Hero" class="col-12 min-vh-100 text-center align-items-center d-flex">
        <div class="container ">
            <div class="col-12">
                <div>
                    <h1 class="herotext py-3">Find your time for travel</h1>
                    <h2 class="herotext2">Search your destination</h2>
                </div>
                <div>
                    <!--------------------- search fiealed start ---------------------->
                    <section class="bg-dark Search-SS">
                        <form action="./asset/includes/findroute.inc.php" method="post">
                            <div class="form-row d-flex p-auto justify-content-center m-3">
                                <div class="col-md-auto mb-2">
                                    <select class="form-select p-3" aria-label="Default select example"
                                        name="destinations">
                                        <option selected>Choose your start Veneue</option>
                                        <option value="Kegalle">Kegalle</option>
                                        <option value="Colombo">Colombo</option>
                                        <option value="Kandy">Kandy</option>
                                        <option value="Mawanella">Mawanella</option>
                                        <option value="Awissawella">Awissawella</option>
                                        <option value="Bulathkohupitiya">Bulathkohupitiya</option>
                                        <option value="Kurunagala">Kurunagala</option>
                                        <option value="Negombo">Negombo</option>
                                        <option value="Anuradhapura">Anuradhapura</option>
                                    </select>
                                </div>
                                <div class="col-md-auto mb-2">
                                    <select class="form-select p-3" aria-label="Default select example"
                                        name="destinatione">
                                        <option selected>Choose Your End Destination</option>
                                        <option value="Kegalle">Kegalle</option>
                                        <option value="Colombo">Colombo</option>
                                        <option value="Kandy">Kandy</option>
                                        <option value="Mawanella">Mawanella</option>
                                        <option value="Awissawella">Awissawella</option>
                                        <option value="Bulathkohupitiya">Bulathkohupitiya</option>
                                        <option value="Kurunagala">Kurunagala</option>
                                        <option value="Negombo">Negombo</option>
                                        <option value="Anuradhapura">Anuradhapura</option>
                                    </select>
                                </div>
                                <div class="col-md-auto mb-2">
                                    <button type="submit" class="btn btn-primary btn_SS" name="submit">Submit</button>
                                </div>
                            </div>

                        </form>
                    </section>
                </div>

                <!-------------------- search fiealed stop ---------------------->
            </div>
        </div>
    </div>
    </div>
    <!--Background image slide show start  *bootstrap-->

    <hr>

    <!-------------------------------------------------
        About us section start  *bootstrap
    -------------------------------------------------->
    <section data-aos="fade-up">
        <div class="section-padding" id="about">
            <div class="container align-items-center text-center ">
                <h1 class="Section-hed">About Us</h1>
                <p class="my-5 Section-par"> Welcome to SL Routing, your go-to source for accurate and up-to-date bus
                    timetables.
                    Our mission is to simplify your daily commute by providing real-time bus schedules,
                    detailed route information, and timely alerts about any changes or delays</p>
            </div>
        </div>
    </section>
    <!--About us section stop *bootstrap-->

    <!---------------------------------------------------
        our services section start  *bootstrap
        ----------------------------------------------->
    <section class="featured-places" id="our-service">
        <div class="container">
            <div>
                <h1 class="Section-hed align-items-center text-center">Our Services</h1>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">

                        <center>
                            <div class="down-content">
                                <div class="thumb">
                                    <img src="./asset/Images/gif/time.gif" alt="">
                                </div>
                                <h4>
                                    Travel start time</h4>
                                <!-- <span>Category One</span> -->
                                <p>
                                    Provides travel start times for different bus routes.
                                    To make your journey easier</p>

                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">

                        <center>
                            <div class="down-content">
                                <div class="thumb">
                                    <img src="./asset/Images/gif/bus-stop.gif" alt="">

                                </div>
                                <h4> Start Venue</h4>
                                <!-- <span>Category Two</span> -->
                                <p>
                                    The exact location where the bus will first start its journey</p>

                            </div>
                        </center>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">

                        <center>
                            <div class="down-content">
                                <div class="thumb">
                                    <img src="./asset/Images/gif/clipboard.gif" alt="">
                                </div>
                                <h4>Details</h4>
                                <!-- <span>Category Three</span> -->
                                <p>We provide you with the route number,bus number, and bus owner name details.</p>

                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our service section stop  *bootstrap-->



    <!---------------------------------------------------------
        where are you map section start  *bootstrap
    ----------------------------------------------------------->
    <section>
        <div class="col-lg-12 container align-items-center text-center section-padding">
            <h1 class="Section-hed">Where are you</h1>
            <div class="">
                <div class="">
                    <h2>Find your location you want need to go</h2>
                </div>
                <div class="mapouter">
                    <div class="gmap_canvas ">
                        <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=sri lanka&amp;t=&amp;z=8&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                        </iframe>
                        <a href="https://strandsgame.net/">Strands NYT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!---------------------------------------------------------
        footer section start  *bootstrap
    ----------------------------------------------------------->

    <section>
        <img class="ml-1 bus" data-aos="fade-right" src="./asset/Images/travel.png" style="max-width: 150px;">


        <footer id="footerss" class="page-footer font-small pt-4 Footer_Co">
            <div class="container text-center text-md-left py-4">
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <img src="./asset/Images/PLWa.png" width="180" height="auto" alt="">
                        <h5 class="font-weight-bold text-white mt-3 mb-4">Location</h5>
                        <address class="text-white">
                            No-18,<br>
                            Kegalla main street,<br>
                            Kegalla.
                        </address>


                    </div>
                    <div class="col-md-2 mx-auto">
                        <h5 class="font-weight-bold text-white mt-3 mb-4">Sites</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-light" href="bus_details.php"> Home</a>
                            </li>
                            <li>
                                <a class="text-light" href="./asset/About Us.php"> About us</a>
                            </li>
                            <li>
                                <a class="text-light" href="bus_details.php"> Map</a>
                            </li>
                            <li>
                                <a class="text-light" href="bus_details.php"> Search</a>
                            </li>
                            <li>
                                <a class="text-light" href="bus_details.php"> Our Services</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 mx-auto">
                        <h5 class="font-weight-bold text-white mt-3 mb-4">About</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a class="text-light" href="bus_details.php"> Staaf</a>
                            </li>
                            <li>
                                <a class="text-light" href="asset\About Us.php"> Team</a>
                            </li>
                            <li>
                                <a class="text-light" href="bus_details.php"> Careers</a>
                            </li>
                            <li>
                                <a class="text-light" href="bus_details.php"> blog</a>
                            </li>
                            <li>
                                <a class="text-light" href="bus_details.php"> links</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mx-auto">
                        <h5 class="font-weight-bold text-white mt-3 mb-4">Places</h5>
                        <form action="#" class="contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="3" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control submit px-3">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </footer>
    </section>



    <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const logoutButton = document.getElementById('logoutButton');
        logoutButton.addEventListener('click', () => {
            alert('You have successfully logged out!');
        });
    });
    </script>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!-- <script src="./asset/JS/search box.js"></script> -->
</body>

</html>