<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>About SLR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styleindex.css">
    <link rel="stylesheet" href="./css/About Us Style.css">
</head>
<style>
    .Footer_Co{
            background: rgb(0,9,33);
	        background: linear-gradient(180deg, rgba(0,9,33,1) 0%, rgba(0,208,166,0.9037990196078431) 49%, rgba(0,30,36,1) 100%);
        }
    .main-c{
        background: rgb(0,9,33);
	    background: linear-gradient(180deg, rgba(0,9,33,1) 0%, rgba(0,208,166,0.9037990196078431) 49%, rgba(0,30,36,1) 100%);
    }
</style>

<body>

    <!-- <div class="Menu">
        <a href="../Home/Home.html"><img src="./Images/PLWa.png" alt="Grapher logo"></a>

        <nav>
            <a href="../index.php" class="Glow">Back To Home</a>
            <a href="./Owner Login.php" class="Glow">Owner Login</a>
            <a href="./User Login.php" class="Glow">User Login</a>
            <a href="./About Us.php" class="Glow">About Us</a>
        </nav>
    </div> -->

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand px-3" href="#"><img src="./Images/PLWa.png" width="80" height="auto" alt="Nav logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item  mx-2">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active mx-2">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="../index.php#our-service">Our service</a>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin panel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./User Login.php">Admin Login</a>
                        <a class="dropdown-item" href="./Owner Login.php">Owerner Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./Owner S.php">Registation</a>
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
                    echo '<a class="btn btn-outline-success my-2 my-sm-0 mx-2" id="logoutButton" href="./includes/logout.inc.php">Log Out</a>';
                }
                 else {
                    echo '<a class="btn btn-outline-success my-2 my-sm-0 mx-2" href="./User Login.php"
                    target="_blank">User Login</a>';
                }
                
                ?></h2>
            </form>
        </div>
    </nav>

    <br><br>
   
        <div class="about" id="box">
            <p class="p1">
                About SL Routing
            </p>
            <br>
            <p class="p2">
                Welcome to SL Routing, your go-to source for accurate and up-to-date bus timetables.
                Our mission is to simplify your daily commute by providing real-time bus schedules,
                detailed route information, and timely alerts about any changes or delays. Whether you're a daily commuter,
                an occasional traveler, or a visitor exploring the city, our user-friendly platform ensures you have all the
                information you need to navigate the public transportation system effortlessly. Trust 'SL Routing' to keep you
                connected and on time, every time.
            </p>
            <span class="top"></span>
            <span class="right"></span>
            <span class="bottom"></span>
            <span class="left"></span>
        </div>

        <!-- <br>
        <hr><br>

        <div class="mv">

            <p class="p1">
                Our Vision
            </p>
            <br>
            <p class="p2">
                To revolutionize the transportation experience by providing real-time, seamless, and efficient bus
                tracking solutions that enhance passenger convenience, safety, and satisfaction.
            </p>
            <span class="top"></span>
            <span class="right"></span>
            <span class="bottom"></span>
            <span class="left"></span>

        </div>
        <br>
        <hr><br>
        <div class="mv">

            <p class="p1">
                Our Mission
            </p>
            <br>
            <p class="p2">
                Our mission is to develop and maintain a user-friendly bus tracking platform that empowers commuters
                with accurate and up-to-date information on bus locations, schedules, and routes. Through innovative
                technology and seamless integration, we aim to optimize travel experiences, reduce wait times, and
                foster sustainable transportation solutions for communities everywhere.
            </p>
            <span class="top"></span>
            <span class="right"></span>
            <span class="bottom"></span>
            <span class="left"></span>
        </div> -->

    <br>
    <hr><br>

    <p class="pcrew">
        OUR CREW
    </p>
    <br><br>
    <p>
    <div class="crewcard">

        <div class="fcard">
            <div class="fcard_pic">
                <img src="./Images/Dev Photos/Loku.jpg" alt="">
            </div>
            <h2>Loku</h2> <br>
            <p class="ccaption">
                Main Developer and Main Designer of "SL Routing".
            </p>
            <hr class="chr">
            <div class="social-media-icon">
                <ul class="sci">
                    <li class="fb">
                        <a href="#"><img src="./Images/Icon/FB.gif" alt=""></a>
                    </li>
                    <li class="yt">
                        <a href="#"><img src="./Images/Icon/YT.gif" alt=""></i></a>
                    </li>
                    <li class="insta">
                        <a href="#"><img src="./Images/Icon/INSTA.gif" alt=""></i></a>
                    </li>
                    <li class="tw">
                        <a href="#"><img src="./Images/Icon/TW.gif" alt=""></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="fcard">
            <div class="fcard_pic">
                <img src="./Images/Dev Photos/Awishka.jpg" alt="">
            </div>
            <h2>Avishka</h2> <br>
            <p class="ccaption">
                Back-End Developer and Co-Manager of "SL Routing".
            </p>
            <hr class="chr">
            <div class="social-media-icon">
                <ul class="sci">
                    <li class="fb">
                        <a href="#"><img src="./Images/Icon/FB.gif" alt=""></a>
                    </li>
                    <li class="yt">
                        <a href="#"><img src="./Images/Icon/YT.gif" alt=""></i></a>
                    </li>
                    <li class="insta">
                        <a href="#"><img src="./Images/Icon/INSTA.gif" alt=""></i></a>
                    </li>
                    <li class="tw">
                        <a href="#"><img src="./Images/Icon/TW.gif" alt=""></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="fcard">
            <div class="fcard_pic">
                <img src="./Images/Dev Photos/Ravindu.jpg" alt="">
            </div>
            <h2>Ravindu</h2> <br>
            <p class="ccaption">
                Manager and Back-End Developer of "SL Routing".
            </p>
            <hr class="chr">
            <div class="social-media-icon">
                <ul class="sci">
                    <li class="fb">
                        <a href="#"><img src="./Images/Icon/FB.gif" alt=""></a>
                    </li>
                    <li class="yt">
                        <a href="#"><img src="./Images/Icon/YT.gif" alt=""></i></a>
                    </li>
                    <li class="insta">
                        <a href="#"><img src="./Images/Icon/INSTA.gif" alt=""></i></a>
                    </li>
                    <li class="tw">
                        <a href="#"><img src="./Images/Icon/TW.gif" alt=""></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="fcard">
            <div class="fcard_pic">
                <img src="./Images/Dev Photos/Avishka.jpg" alt="">
            </div>
            <h2>Awishka</h2> <br>
            <p class="ccaption">
                Co-Designer in </br> "SL Routing".
            </p>
            <hr class="chr">
            <div class="social-media-icon">
                <ul class="sci">
                    <li class="fb">
                        <a href="#"><img src="./Images/Icon/FB.gif" alt=""></a>
                    </li>
                    <li class="yt">
                        <a href="#"><img src="./Images/Icon/YT.gif" alt=""></i></a>
                    </li>
                    <li class="insta">
                        <a href="#"><img src="./Images/Icon/INSTA.gif" alt=""></i></a>
                    </li>
                    <li class="tw">
                        <a href="#"><img src="./Images/Icon/TW.gif" alt=""></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="fcard">
            <div class="fcard_pic">
                <img src="./Images/Dev Photos/Nimesh.jpg" alt="">
            </div>
            <h2>Ninmesh</h2> <br>
            <p class="ccaption">
                Co-Developer in </br>"SL Routing".
            </p>
            <hr class="chr">
            <div class="social-media-icon">
                <ul class="sci">
                    <li class="fb">
                        <a href="#"><img src="./Images/Icon/FB.gif" alt=""></a>
                    </li>
                    <li class="yt">
                        <a href="#"><img src="./Images/Icon/YT.gif" alt=""></i></a>
                    </li>
                    <li class="insta">
                        <a href="#"><img src="./Images/Icon/INSTA.gif" alt=""></i></a>
                    </li>
                    <li class="tw">
                        <a href="#"><img src="./Images/Icon/TW.gif" alt=""></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="fcard">
            <div class="fcard_pic">
                <img src="./Images/Dev Photos/Dimuth.jpg" alt="">
            </div>
            <h2>Dimuth</h2> <br>
            <p class="ccaption">
                Main Back-End Developer in "SL Routing".
            </p>
            <hr class="chr">
            <div class="social-media-icon">
                <ul class="sci">
                    <li class="fb">
                        <a href="#"><img src="./Images/Icon/FB.gif" alt=""></a>
                    </li>
                    <li class="yt">
                        <a href="#"><img src="./Images/Icon/YT.gif" alt=""></i></a>
                    </li>
                    <li class="insta">
                        <a href="#"><img src="./Images/Icon/INSTA.gif" alt=""></i></a>
                    </li>
                    <li class="tw">
                        <a href="#"><img src="./Images/Icon/TW.gif" alt=""></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </p>
    <br>
    <hr><br>
    <p class="pcntct">
        <b class="pcrew"> CONTACT US</b>
        <br>
    <div class="b">
        <a href=""><button style="--clr:#39FF14"><span>Whatsapp</span><i></i></button></a>
        <a href=""><button style="--clr:#1877F2"><span>Facebook</span><i></i></button></a>
        <a href=""><button style="--clr:#f52c61"><span>instagram</span><i></i></button></a>
        <a href=""><button style="--clr:#229ED9"><span>Telegram</span><i></i></button></a>
    </div>
    </p>
    <br>
    <hr><br>
    <p class="pcntwu">
        <b class="pcrew">WRITE US</b>
    <div class="b">
        <a href=""><button style="--clr:#fa2f20"><span>Gmail</span><i></i></button></a>
        <a href=""><button style="--clr:#ab20fd"><span>Viber</span><i></i></button></a>
        <a href=""><button style="--clr:#0FF0FC"><span>Twitter</span><i></i></button></a>
        <a href=""><button style="--clr:#09B83E"><span>Wechat</span><i></i></button></a>
    </div>
    </p>
    <section>
        <img class="ml-1 bus" data-aos="fade-right" src="./Images/travel.png" style="max-width: 150px;">


        <footer id="footerss" class="page-footer font-small pt-4 Footer_Co">
            <div class="container text-center text-md-left py-4">
                <div class="row">
                    <div class="col-md-4 mx-auto">
                        <img src="./Images/PLWa.png" width="180" height="auto" alt="">
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
                                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
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



    <!-- <footer>
        <div class="footer-row">
            <div class="footer-col">
                <p class="pft">Info</p>
                <ul class="links">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Customers</a></li>
                    <li><a href="#">Artists</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Collection</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <p class="pft">Get Help</p>
                <ul class="links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Payment Options</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <p class="pft">Quick Links</p>
                <ul class="links">
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Copyright</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <p class="pft">Thank You</p><br>
                <p>
                    Stay with us for updates, helpful tips, and
                    exclusive offers.
                </p><br>
                <div class="fboxes">
                    <form action="#">
                        <input type="text" placeholder="Enter your email address" required>
                        <textarea name="comments" rows="5" cols="25">Type Your Comment Here</textarea><br>
                        <button type="submit" class="sb">SEND</button>
                    </form>
                </div>
                <div class="icons">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>




    </footer> -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>





</body>

</html>