<?php
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
    <title>Owner Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

        body{
            background: rgb(0,9,33);
	        background: linear-gradient(180deg, rgba(0,9,33,1) 0%, rgba(0,208,166,0.9037990196078431) 49%, rgba(0,30,36,1) 100%);
        }
    </style>
</head>

<body class="bg-secondary">

    <div class="theme-toggle">
        <button id="theme-toggle-btn" class="btn btn-primary">Dark Theme</button>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body tit">
                        <h1 class="text-primary">Hello</h1>
                        <h3 class="text-primary">Welcome Back !</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="login-container card text-center card-body">
                    <h2 class="mb-4">Login Form</h2>
                    <form id="loginForm" onsubmit="validateForm(event)" action="../asset/includes/owerlogin.inc.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                            <div id="usernameError" class="error-message"></div>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="pwd" required>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <input type="checkbox" id="showPasswordCheckbox" onclick="togglePasswordVisibility()">
                                    </div>
                                </div>
                            </div>
                            <label for="showPasswordCheckbox" id="showPasswordText">Show Password</label>
                            <div id="passwordError" class="error-message"></div>
                        </div>

                        <div class="FP">
                            <a href="#" class="forgot-password">Forgot Password?</a>
                        </div>

                        <div class="btn mt-4">
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="downdbtn my-4">
            <a href="../index.php" class="btn btn-primary custom">Back to Home</a>
        </div>

        <div class="downside mt-4 text-center">
            Sri Lankan Routing | Buildup 2024 | All Rights Reserved &copy;
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Add event listeners after the DOM has fully loaded
            const loginForm = document.getElementById("loginForm");
            const usernameInput = document.getElementById("username");
            const passwordInput = document.getElementById("password");
            const usernameError = document.getElementById("usernameError");
            const passwordError = document.getElementById("passwordError");
            const showPasswordCheckbox = document.getElementById("showPasswordCheckbox");
            const showPasswordText = document.getElementById("showPasswordText");
            const themeToggleBtn = document.getElementById('theme-toggle-btn');

            loginForm.addEventListener("submit", validateForm);
            showPasswordCheckbox.addEventListener("change", togglePasswordVisibility);
            themeToggleBtn.addEventListener("click", toggleTheme);

            /*
            function validateForm(event) {
                event.preventDefault();

                // Reset error messages
                usernameError.innerHTML = "";
                passwordError.innerHTML = "";

                // Get form values
                const username = usernameInput.value;
                const password = passwordInput.value;

                // Simple validation
                if (username === "") {
                    usernameError.innerHTML = "Please enter your username";
                    return;
                }

                if (password === "") {
                    passwordError.innerHTML = "Please enter your password";
                    return;
                }

                // Add additional validation logic as needed

                // If validation passes, you can proceed with form submission or other actions
                alert("Login successful!");
            }
            */

            function togglePasswordVisibility() {
                const isPasswordVisible = passwordInput.type === "text";
                passwordInput.type = isPasswordVisible ? "password" : "text";
                showPasswordText.innerText = isPasswordVisible ? "Show Password" : "Hide Password";
            }

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
        });
    </script>

</body>

</html>