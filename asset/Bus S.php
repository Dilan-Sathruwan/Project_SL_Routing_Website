<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./bootstrap.min.css"> -->
    <style>
        .tit {
            text-align: center;
            background: #093580;
            background: linear-gradient(to left, #093580 0%, #05C1FF 51%, #061957 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent
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
    </style>
</head>

<body class="bg-secondary text-dark">
    <div class="theme-toggle">
        <button id="theme-toggle-btn" class="btn btn-primary">Dark Theme</button>
    </div>

    <div class="container my-5">
        <div class="card">
            <div class="card-body tit">
                <h1 class="text-center text-primary">Bus Details</h1>
                <h3 class="text-center text-primary">Let's Add Your Bus Information</h3>
            </div>
        </div>

        <div class="card my-5">
            <div class="card-body">
                <h2 class="text-center">Bus Details</h2>
                <div class="row main2">
                    <div class="col-md-6 sub1">
                        <form action="" method="get">
                            <div class="form-group">
                                <label for="number_plate" class="text">Number of number plate</label>
                                <input type="text" name="number_plate" id="number_plate" placeholder="Ex: NB-5725"
                                    required class="form-control info">
                            </div>
                            <div class="form-group">
                                <label for="brand" class="text">Bus brand</label>
                                <select name="brand" id="brand" required class="form-control info">
                                    <option value="Leyland">Leyland</option>
                                    <option value="TATA">TATA</option>
                                    <option value="Fuso">Fuso</option>
                                    <option value="Rosa">Rosa</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="registration_number" class="text">Registration number of
                                    Transporting
                                    Department</label>
                                <input type="text" name="registration_number" id="registration_number"
                                    placeholder="Enter registration number" required class="form-control info">
                            </div>
                            <div class="form-group">
                                <label for="number_of_seats" class="text">Number of seats</label>
                                <input type="number" name="number_of_seats" id="number_of_seats"
                                    placeholder="Enter number of seats" required class="form-control info">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 sub2">
                        <div class="form-group">
                            <label for="front_view" class="text">Front view image</label>
                            <input type="file" name="front_view" id="front_view" required
                                class="form-control-file info">
                        </div>
                        <div class="form-group">
                            <label for="back_view" class="text">Back view image</label>
                            <input type="file" name="back_view" id="back_view" required class="form-control-file info">
                        </div>
                        <div class="form-group">
                            <label for="side_view" class="text">Side view image</label>
                            <input type="file" name="side_view" id="side_view" required class="form-control-file info">
                        </div>
                    </div>
                </div>
                <div class="downbtn">
                    <button type="submit" class="btn btn-primary mr-2 custom" href="./Bus.html">Submit</button>
                </div>
            </div>
        </div>
        <div class="downdbtn">
            <a href="./Owner S.php" class="btn btn-primary custom">Back</a>
            <a href="../index.php" class="btn btn-primary custom">Back to Home</a>
            <a href="./Route S.php" class="btn btn-primary custom">Next</a>
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