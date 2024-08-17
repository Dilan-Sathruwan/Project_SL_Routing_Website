<?php
session_start();
if (isset($_SESSION['username'])) {
    // User is logged in
    $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rout details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
    .tit {
        text-align: center;
        background: rgb(13, 0, 240);
        background: linear-gradient(0deg, rgba(13, 0, 240, 1) 0%, rgba(0, 255, 239, 1) 35%, rgba(0, 212, 255, 1) 100%);
    }

    .card {
        backdrop-filter: blur(14px);
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 18px;
        border: 3px solid rgb(0, 0, 0);
    }

    .custom {
        width: 78px;
    }

    .btn-primary {
        background-color: #00a841;
        border-color: #1F26ED;
    }

    .btn-primary:hover {
        background-color: #0121da;
        border-color: #3686EF;
    }

    .theme-toggle {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1000;
        transition: transform 0.3s ease;
    }

    .theme-toggle button {
        transition: background-color 0.3s ease;
    }


    @media (max-width: 576px) {
        .theme-toggle {
            top: 10px;
            right: 10px;
        }
    }

    .downbtn {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .downbtn button {
        width: 150px;
        height: 45px;
        text-align: center;
        font-size: 20px;
    }

    .downdbtn {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }

    .downdbtn a {
        width: 150px;
        height: 45px;
        text-align: center;
    }

    body {
        background: rgb(0, 9, 33);
        background: linear-gradient(180deg, rgba(0, 9, 33, 1) 0%, rgba(0, 208, 166, 0.9037990196078431) 49%, rgba(0, 30, 36, 1) 100%);
    }
    </style>
</head>

<body class="bg-secondary">
    <div class="theme-toggle">
        <?php
            if (isset($_SESSION["username"])) {
                echo '<a class="btn btn-primary my-2 my-sm-0 mx-2" id="logoutButton" href="includes\logout.inc.php">Log Out</a>';
            }
        ?>
    </div>
    <div class="container ">
        <div class="card my-5">
            <div class="card-body tit">
                <h1 class="text-center ">Route Details</h1>
                <div>
                    <?php
                if (isset($_SESSION["username"])) {
                    echo '<h3 class="my-2 my-sm-0 mx-2" href="#">' . 'Owner by: ' . $_SESSION["username"] . '</h3>';        
                }
                ?>
                </div>

            </div>
        </div>
        <div class="main1 card ">
            <div class="card-body ">
                <h2 class="title text-center">Route details</h2>
                <div class="row">
                    <div class="col-md-6 border m-auto">
                        <form action="./includes/route.inc.php" method="POST">
                            <div class="form-group">
                                <label class="text" for="route">Route</label>
                                <input type="text" name="route" id="route" class="form-control info"
                                    placeholder="Ex: Kegalle-Mawanella">
                            </div>
                            <div class="form-group">
                                <label class="text" for="route_number">Route Number</label>
                                <input type="number" name="route_number" id="route_number" class="form-control info"
                                    placeholder="Enter route number">
                            </div>
                            <div class="form-group">
                                <label class="text" for="bus_number">Bus Number</label>
                                <input type="text" name="bus_number" id="bus_number" class="form-control info"
                                    placeholder="Enter bus number">
                            </div>
                            <div class="form-group">
                                <label class="text" for="bus_owner_name">Bus Owner Name</label>
                                <input type="text" name="bus_owner_name" id="bus_owner_name" class="form-control info"
                                    placeholder="Enter bus owner name">
                            </div>
                            <div class="form-group">
                                <label class="text" for="distance">Distance (km)</label>
                                <input type="number" name="distance" id="distance" class="form-control info"
                                    placeholder="Enter Distance">
                            </div>
                            <div class="main3">
                                <div class="sub3">
                                    <div class="subt1">
                                        <label class="text-label">Start venue</label>
                                        <select class="form-select p-2" aria-label="Default select example"
                                            name="start_venue">
                                            <option selected>Choose Your Start Veneue</option>
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
                                </div>
                                <div class="form-group mt-3">
                                    <label class="text" for="bus_stops">Bus Stops</label>
                                    <select class="form-select p-2" aria-label="Default select example"
                                        name="bus_stops">
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
                                <div class="subt2">
                                    <label class="text-label">Start time</label>
                                    <input type="time" name="start_time" class="form-control info">
                                </div>
                                <div class="subt3">
                                    <label class="text-label">Stop time</label>
                                    <input type="time" name="stop_time" class="form-control info">
                                </div>
                            </div>

                            <hr>
                            <div class="downbtn">
                                <button name="submit" type="submit" class="btn btn-primary mr-2 custom">Submit</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="container mt-5">
        <table class="table table table-dark">
            <thead>
                <tr class="bg-primary">
                    <th scope="col">#</th>
                    <th scope="col">route</th>
                    <th scope="col">route_number</th>
                    <th scope="col">bus_number</th>
                    <th scope="col">bus_owner_nam</th>
                    <th scope="col">bus_stops</th>
                    <th scope="col">start_time</th>
                    <th scope="col">start_venue</th>
                    <th scope="col">stop_time</th>
                    <th scope="col">delete</th>
            </thead>
            <tbody>
                <?php
                        require '../asset/includes/database.inc.php';

                        $sql = "SELECT * FROM `route_details` WHERE bus_owner_name='$username'";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <th scope="row"><?php echo htmlspecialchars($row['id']); ?></th>
                    <td><?php echo htmlspecialchars($row['route']); ?></td>
                    <td><?php echo htmlspecialchars($row['route_number']); ?></td>
                    <td><?php echo htmlspecialchars($row['bus_number']); ?></td>
                    <td><?php echo htmlspecialchars($row['bus_owner_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['bus_stops']); ?></td>
                    <td><?php echo htmlspecialchars($row['start_time']); ?></td>
                    <td><?php echo htmlspecialchars($row['start_venue']); ?></td>
                    <td><?php echo htmlspecialchars($row['stop_time']); ?></td>
                    <td><i class="bi bi-trash3" id="delete"></i></td>
                </tr>
                <?php }
                        } else {
                            echo "<tr><td colspan='6'>0 results</td></tr>";
                        }
                        $conn->close();
                        ?>
            </tbody>
        </table>
    </div>
    <div class="downdbtn my-4">
        <a href="./Owner S.php" class="btn btn-primary custom">Back</a>
        <a href="../index.php" class="btn btn-primary custom">Back to Home</a>
    </div>
    </div>

    <script>
    const themeToggleBtn = document.getElementById('theme-toggle-btn');
    let isDarkTheme = true; // Initial theme is dark

    // Function to toggle between dark and light themes
    function toggleTheme() {
        if (isDarkTheme) {
            // Switch to light theme
            document.body.classList.remove('bg-dark', 'text-light');
            document.body.classList.add('bg-light', 'text-dark');
            themeToggleBtn.textContent = 'Dark Theme';
        } else {
            // Switch to dark theme
            document.body.classList.remove('bg-light', 'text-dark');
            document.body.classList.add('bg-dark', 'text-light');
            themeToggleBtn.textContent = 'Light Theme';
        }
        isDarkTheme = !isDarkTheme; // Toggle theme flag
    }

    // Event listener for theme toggle button
    themeToggleBtn.addEventListener('click', toggleTheme);
    </script>
</body>

</html>