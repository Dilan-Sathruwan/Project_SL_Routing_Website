<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Details</title>
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

    body {
        background: rgb(0, 9, 33);
        background: linear-gradient(180deg, rgba(0, 9, 33, 1) 0%, rgba(0, 208, 166, 0.9037990196078431) 49%, rgba(0, 30, 36, 1) 100%);
    }
    </style>
</head>

<body class="bg-secondary">
    <div class="theme-toggle">
        <button id="theme-toggle-btn" class="btn btn-primary">Dark Theme</button>
    </div>

    <div class="container my-5">
        <div class="card">
            <div class="card-body tit">
                <h1 class="text-center text-primary">Owner Signup</h1>
                <h3 class="text-center text-primary">Let's Create Your Own Account</h3>
            </div>
        </div>
        <div class="card my-5">
            <div class="card-body">
                <h2 class="text-center">Owner Details</h2>
                <form action="./includes/ownerdetails.inc.php" method="POST">
                    <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input name="fname" type="text" class="form-control" id="full_name"
                            placeholder="Enter Full Name">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="dob">Date of Birth</label>
                            <input name="dob" type="date" class="form-control" id="dob">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nic">NIC</label>
                            <input name="nic" type="text" class="form-control" id="nic">
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="omail" type="email" class="form-control" id="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input name="oadd" type="text" class="form-control" id="address" placeholder="Enter Address">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone_number">Telephone Number</label>
                            <input name="opn" type="tel" class="form-control" id="phone_number"
                                placeholder="Enter Telephone Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="username">Username</label>
                            <input name="oname" type="text" class="form-control" id="username"
                                placeholder="Enter Username">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input name="pwd" type="password" class="form-control" id="password"
                                placeholder="Enter Password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="confirm_password">Confirm Password</label>
                            <input name="pwd2" type="password" class="form-control" id="confirm_password"
                                placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="downbtn">
                        <button type="submit" class="btn btn-primary mr-2 custom" href="./Bus.html"
                            name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="downdbtn">
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