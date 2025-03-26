<?php
    session_start();

    $is_logged_in = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? true : false;
    $firstname = isset($_SESSION['firstname']) ? $_SESSION['firstname'] : 'Not Set';
    $lastname = isset($_SESSION['lastname']) ? $_SESSION['lastname'] : 'Not Set';

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="MPDC's Office of Imelda">
    <meta name="author" content="Group 3">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/acc-info.css">

    <script type="text/javascript" src="public\js\library\jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="js/location-list.js"></script>
    <script type="text/javascript" src="js/overlay-window.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            console.log("isLoggedIn: <?php echo $is_logged_in ? 'true' : 'false'; ?>");
            console.log("firstname: <?php echo htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8'); ?>");
            console.log("lastname: <?php echo htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8'); ?>");

            var isLoggedIn = "<?php echo $is_logged_in ? 'true' : 'false'; ?>";
            var firstname = "<?php echo htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8'); ?>";
            var lastname = "<?php echo htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8'); ?>";

            init();
            function init() {

                if (isLoggedIn === 'true') {
                    console.log("User is logged in, updating fields...");
                    $("#fname").val(firstname);
                    $("#lname").val(lastname);
                } else {
                    console.log("User is not logged in");
                }
            }
        });

    </script>

</head>
<header>
    <div class="header-div">
        <img src="\public\img\imelda_seal.png">
        <div id="header-logo-text">
            <span id="header-text-municipal">
                User Information
            </span>
        </div>
    </div>
    <div class="header-nav-div">
        <ul>
            <li>Home</li>
            <li id="change-email-btn">Change Email</li>
            <li id="change-passwd-btn">Change Password</li>
        </ul>  
    </div>
</header>
<body>
    <div class="body-div">
        <div class="body-win">
            <div class="win-left-div">
                <div id="pfp-div"></div>
                <button id="profile-btn">Change your profile picture</button>
            </div>
            <div class="account-info">
                <label>First Name<br>
                    <input type="text" id="fname" name="fname"></label><br>
                <label>Last Name<br>
                    <input type="text" id="lname" name="lname"></input></label><br>
                <label>Phone Number<br>
                    <input></label><br>
                <label style="text-align: center">Address<br>
                    <select name="addr-brgy" id="addr-brgy">
                        <option selected disabled>- Select a Barangay -</option>
                    </select>,
                        Imelda, Zamboanga Sibugay
                </label>
                <input id="accinfo-submitBtn" type="submit" value="Submit">
            </div>
        </div>
    </div>
    <div class="change-cred-overlay">
        <div class="cred-overlay-win">
            <div id="cred-overlay-close">
                <img src="\public\img\close.png">
            </div>
            <div id=overlay-logo>
                <img src="\public\img\imelda_seal.png">
            </div>
            <div id="change-email-overlay">
                <form action="change-email.php" method="post">
                    <h1>Change to New Email</h1><br>
                    <label>Old Email<br>
                        <input type="email" name="oldemail" id="oldemail"></label><br>
                    <label>New Email<br>
                        <input type="email" name="newemail" id="newemail"></label><br>
                    <label>Password<br>
                        <input type="password" name="pass" id="pass"></label><br>
                    <label>Confirm Password<br>
                        <input type="password" name="confpass" id="confpass"></label><br>
                    <input type="submit" id="email-submit-btn" value="Change Email"><br>
                </form>    
            </div>
            <div id="change-passwd-overlay">
                <h1>Change Password</h1><br>
                <label>Old Password<br>
                    <input type="password" name="oldpasswd" id="oldpasswd"></label>
                <label>New Password<br>
                    <input type="password" name="newpasswd" id="newpasswd"></label>
                <label>Confirm Password<br>
                    <input type="password" name="confirmpasswd" id="confirmpasswd"></label>
                <input type="button" id="passwd-submit-btn" value="Change Password"><br>
            </div>
        </div>
    </div>
</body>
</html>
