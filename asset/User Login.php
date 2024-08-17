

<!DOCTYPE html>

<head>
    <title>User Login/Sigin</title>
    <link rel="stylesheet" type="text/css" href="./css/User Login Style.css" />

</head>

<body>
    <div class="welcome">
        <p>Welcome to SL Routing</p>
    </div>


    <!------------------- 
    sign up form 
    ------------------->

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post" action="includes/signup.inc.php">
                <h1>Create Account</h1>
                <div class="social-media-icon">
                    <ul class="sci">
                        <li class="fb">
                            <a href="#"><img src="./Images/Icon/FB.gif" alt=""></a>
                        </li>
                        <li class="google">
                            <a href="#"><img src="./Images/Icon/G.png" alt=""></i></a>
                        </li>
                        <li class="gest">
                            <a href="#"><img src="./Images/Icon/Gest.gif" alt=""></i></a>
                        </li>
                    </ul>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="User Name" name="name" id="Uname" required="true"/>
                <input type="email" placeholder="Email" name="email" id="Email" required="true"/>
                <input type="password" placeholder="Password" name="pwd" id="Password" required="true"/>
                <button type="submit" name="signup">Sign Up</button>
            </form>
        </div>


    <!------------------- 
    sign in form 
    ------------------->
        <div class="form-container sign-in-container">
            <form method="post" action="includes/login.inc.php">
                <h1>Sign in</h1>
                <div class="social-media-icon">
                    <ul class="sci">
                        <li class="gest">
                            <a href="#"><img src="./Images/Icon/Gest.gif" alt=""></a>
                        </li>
                        <li class="google">
                            <a href="#"><img src="./Images/Icon/G.png" alt=""></i></a>
                        </li>
                        <li class="fb">
                            <a href="#"><img src="./Images/Icon/FB.gif" alt=""></i></a>
                        </li>
                    </ul>
                </div>
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email"/>
                <input type="password" name="pwd" placeholder="Password"/>
                <a href="#">Forgot your password?</a>
                <button type="submit" name="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Hello!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Welcome Back !</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <div class="to_home">
        <nav>
            <a href="../index.php" class="Glow">Back to Home</a>
        </nav>
    </div>



    <footer>
        <div class="ftext">
            
        </div>
    </footer>

    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</body>