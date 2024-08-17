<?php
session_start();
include "./includes/database.inc.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./asset/css/styleindex.css">

    <title>Admin</title>

</head>

<body>
    <!-- -----------------------------------
        navigetion start--
        ---------------------------------- -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand px-3" href="#"><img src="./Images/PLWa.png" width="80" height="auto" alt="Nav logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active mx-2">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="../index.php">About</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="../index.php#our-service">Our service</a>
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
                if (isset($_SESSION["username"])) {
                    echo '<a class="btn btn-outline-success my-2 my-sm-0 mx-2" href="#">' . 'Admin by ' . $_SESSION["username"] . '</a>';
                    echo '<a class="btn btn-outline-success my-2 my-sm-0 mx-2" id="logoutButton" href="includes\logout.inc.php">Log Out</a>';
                } else {
                    echo '<a class="btn btn-outline-success my-2 my-sm-0 mx-2" href="Owner Login.php"
                    target="_blank">Admin Login</a>';
                }

                ?></h2>
            </form>
        </div>
    </nav>
    <!-- navigetion stop -->

    <div class="table-responsive">
        <table class="table-hover table table-dark table-striped-columns table-bordered shadow-lg">
            <h1 class="text-center text-info mb-5 shadow-lg p-3 mt-5 container">owner Details</h1>
            <thead class="">
                <tr class="">
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created on</th>
                    <th scope="col">Funtions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM owner_details;";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['full_name']; ?></td>
                            <td><?php echo $row['dob']; ?></td>
                            <td><?php echo $row['nic']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['phone_number']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                            <td>Functions</td>
                        </tr>
                <?php }
                } else {
                    echo "0 results";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table-hover table table-dark table-striped-columns table-bordered shadow-lg">
            <h1 class="text-center text-info mb-5 shadow-lg p-3 mt-5 container">user Details</h1>
            <thead class="">
                <tr class="">
                    <th scope="col">#</th>
                    <th scope="col">username</th>
                    <th scope="col">useremail</th>
                    <td>Functions</td>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql2 = "SELECT * FROM users;";
                $result = $conn->query($sql2);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <th scope="row"><?php echo $row['usersId']; ?></th>
                            <td><?php echo $row['usersName']; ?></td>
                            <td><?php echo $row['usersEmail']; ?></td>
                            <td>Functions</td>
                        </tr>
                <?php }
                } else {
                    echo "0 results";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="table-responsive">
        <table class="table-hover table table-dark table-striped-columns table-bordered shadow-lg">
            <h1 class="text-center text-info mb-5 shadow-lg p-3 mt-5 container">route Details</h1>
            <thead class="">
                <tr class="">
                    <th scope="col">#</th>
                    <th scope="col">route</th>
                    <th scope="col">route_number</th>
                    <th scope="col">bus_number</th>
                    <th scope="col">bus owner name</th>
                    <th scope="col">distance</th>
                    <th scope="col">bus stops</th>
                    <th scope="col">start time</th>
                    <th scope="col">start venue</th>
                    <th scope="col">stop time</th>
                    <td>Functions</td>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql2 = "SELECT * FROM route_details;";
                $result = $conn->query($sql2);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['route']; ?></td>
                            <td><?php echo $row['route_number']; ?></td>
                            <td><?php echo $row['bus_number']; ?></td>
                            <td><?php echo $row['bus_owner_name']; ?></td>
                            <td><?php echo $row['distance']; ?></td>
                            <td><?php echo $row['bus_stops']; ?></td>
                            <td><?php echo $row['start_time']; ?></td>
                            <td><?php echo $row['start_venue']; ?></td>
                            <td><?php echo $row['stop_time']; ?></td>
                            <td>Functions</td>
                        </tr>
                <?php }
                } else {
                    echo "0 results";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>