<?php
    session_start();

    $is_logged_in = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? true : false;
    $firstname = isset($_SESSION['firstname']);
    $lastname = isset($_SESSION['lastname']);
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="MPDC's Office of Imelda">
    <meta name="author" content="Group 3">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="public/css/common/color-palette.css">

    <script type="text/javascript" src="public\js\library\jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="public\js\index\login.js"></script>
    <script type="text/javascript" src="public\js\index\main.js"></script>
    <script>
        $(document).ready(function() {
       
        var isLoggedIn = "<?php echo $is_logged_in ? 'true' : 'false'; ?>"; 

        console.log(isLoggedIn); 

        if (isLoggedIn === 'true') {
            $(".cred-buttons").hide();  // Hide login and signup buttons
            $(".userinfo-buttons").show();  // Show user info and logout buttons
        } else {
            $(".cred-buttons").show();  // Show login and signup buttons
            $(".userinfo-buttons").hide();  // Hide user info and logout buttons
        }

        // Logout functionality
        $("#logout").click(function() {
            window.location.href = "logout.php";  // Redirect to logout.php for logout
        });
    });
    </script>
</head>
<header>
    <div class="header-div">
        <img src="public\img\imelda_seal.png">
        <div id="header-logo-text">
            <span>
                Republic of the Philippines     </br>
                Province of Zamboanga Sibugay
            </span>
            <hr>
            <span id="header-text-municipal">
                MUNICIPALITY OF IMELDA
            </span>
        </div>
        <div class="cred-buttons">
            <button id="loginBtn"> <img src="public\icons\user.png"> Login</button>
            <button id="signupBtn">Sign Up</button>
        </div>
        <div class="userinfo-buttons">
            <button id="userinfoBtn"> <img src="public\icons\circle-user.png"></button>
            <button id="logout"> Log out </button>
        </div>
    </div>
    <div class="header-nav-div">
        <ul>
        <li>Home</li>
            <li>About Us</li>
            <li>Services</li>
            <li>Contact Us</li>
        </ul>  
    </div>
</header>
<body>
    <!--
        z-indexes:
            cred-overlay: 15
            cred-overlay-win: 16
            overlay-logo: 17
            cred-overlay-close: 18

    -->
    <div class="cred-overlay">
        <div class="cred-overlay-win">
            <div id="cred-overlay-close">
                <img src="public\img\close.png">
            </div>
            <div id=overlay-logo>
                <img src="public\img\imelda_seal.png">
            </div>

            <!-- Login Form -->
            <div class="cred-overlay-login">
                <h1>Login</h1><br>
                <form method="post" action="app\controllers\auth\login-process.php">
                    <label>
                        Email<br>
                        <input type="text" name="email" id="email" placeholder="Email"></input>
                    </label><br>
                    <label>
                        Password<br>
                        <input type="password" name="passwd" id="passwd" placeholder="Password"></input>
                    </label><br>
                    <input id="overlay-loginBtn" type="submit" value="Login">
                </form>
            </div>

            <!-- Register Form -->
            <div class="cred-overlay-signup">
                <h1>Sign Up</h1><br>
                <form method="post" action="app\controllers\auth\register-process.php">
                    <label>
                        Firstname<br>
                        <input type="text" name="firstname" id="firstname" placeholder="Enter Firstname"></input>
                    </label><br>
                    <label>
                        Lastname<br>
                        <input type="text" name="lastname" id="lastname" placeholder="Enter Lastname"></input>
                    </label><br>
                    <label>
                        Email <br>
                        <input type="text" name="email" id="email" placeholder="Enter Email"></input>
                    </label><br>
                    <label>
                        Password<br>
                        <input type="password" name="password" id="password" placeholder="Enter Password"></input>
                    </label><br>
                    <label>
                        Confirm Password<br>
                        <input type="password" name="confirmpass" id="confirmpass" placeholder="Confirm Password"></input>
                    </label><br>
                    <input type="submit" value="Sign up" id="overlay-signupBtn" name="signup">
                </form>
            </div>
        </div>
    </div>
</body>