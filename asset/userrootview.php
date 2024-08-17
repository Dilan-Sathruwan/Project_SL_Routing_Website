<?php
session_start();
// if (isset($_SESSION['username'])) {
//     // User is logged in
//     $username = $_SESSION['username'];
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>About SLR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styleindex.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body class="bg-white">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand px-3" href="#"><img src="./Images/PLWa.png" width="80" height="auto" alt="Nav logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="./About Us.php">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#our-service">Our service</a>
                </li>
                <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin panel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./asset/User Login.php">Admin Login</a>
                        <a class="dropdown-item" href="./asset/Owner Login.php">Owerner Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="./asset/Owner S.php">Registation</a>
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
                } else {
                    echo '<a class="btn btn-outline-success my-2 my-sm-0 mx-2" href="./asset/User Login.php"
                    target="_blank">User Login</a>';
                }

                ?></h2>
            </form>
        </div>
    </nav>


    <div class="container col-lg-10 mt-5 table-responsive-md">
        <table class="table table-bordered table-dark ">
            <thead>
                <tr class="bg-primary">
                    <th scope="col">route number</th>
                    <th scope="col">bus number</th>
                    <th scope="col">distance</th>
                    <th scope="col">bus start</th>
                    <th scope="col">bus start time</th>
                    <th scope="col">bus stops</th>
                    <th scope="col">bus stops time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require '../asset/includes/database.inc.php';

                // Sanitize inputs
                $values = $conn->real_escape_string($_GET['values']);
                $valuee = $conn->real_escape_string($_GET['valuee']);

                // Prepare the SQL statement
                $sql = $conn->prepare("SELECT * FROM route_details WHERE start_venue=? AND bus_stops=?");
                $sql->bind_param('ss', $values, $valuee);

                // Execute the statement
                $sql->execute();
                $result = $sql->get_result();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['route_number']); ?></td>
                            <td><?php echo htmlspecialchars($row['bus_number']); ?></td>
                            <td><?php echo htmlspecialchars($row['distance']); ?></td>
                            <td><?php echo htmlspecialchars($row['start_venue']); ?></td>
                            <td><?php echo htmlspecialchars($row['start_time']); ?></td>
                            <td><?php echo htmlspecialchars($row['bus_stops']); ?></td>
                            <td><?php echo htmlspecialchars($row['stop_time']); ?></td>
                        </tr>
                <?php }
                } else {
                    echo "<tr><td colspan='6'>0 results</td></tr>";
                }

                // Close the statement and connection
                $sql->close();
                $conn->close();
                ?>

            </tbody>
        </table>
    </div>


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
                                <a class="text-light" href="bus_details.php"> Team</a>
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



    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const logoutButton = document.getElementById('logoutButton');
            logoutButton.addEventListener('click', () => {
                alert('You have successfully logged out!');
            });
        });
    </script>



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>