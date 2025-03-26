<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> MOI </title>

    <link rel="stylesheet" href="/public/css/admin/header-footer-styles.css">
    <link rel="stylesheet" href="/public/css/admin/application-management-styles.css"> 
    <link rel="stylesheet" href="/public/css/common/color-palette.css">  
    
    <script type="text/javascript" src="\public\js\library\jquery-3.7.1.min.js"> </script>
    <script type="text/javascript" src="js\script.js"></script>
</head>
    <body>
        <?php require '../common/admin-header.php' ?>
        <div class="body-wrapper">
        <div class="body-content">
            <div class="dash-sidebar">
                <span id="dash-header">
                    Application Management
                </span>
                <span id="dash-greetcard"></span>
                <span id="dash-qa-header">
                    Quick Actions
                </span>
                <span id="dash-qa">
                    <ul>
                        <li id="add-app">Add Application</li>
                        <li id="del-app">Delete Application</li>
                        <li id="mod-app">Modify Application</li>
                    </ul>
                </span>
                <span id="dash-logout"><a href="#">Log out</a></span>
            </div>
            <div class="body-content-wrapper">
                <div class="content-cards">                    
                    <div class="widget-wrapper-card">
                        <div class="widget-card-content">
                            <h2>List of Applications</h2>
                        </div>
                    </div>
                    <div class="widget-wrapper-card-group">
                        <div class="wwcg-1">
                            <div class="widget-card-content">
                                <h2>Application Type Overview</h2>
                            </div>
                        </div>
                        <div class="wwcg-1">
                            <div class="widget-card-content">
                                <h2>Recent Activity</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php require '../common/admin-footer.php' ?>
    <div class="overlay-div">
        <div class="overlay-win">
            <span id="overlay-logo">
                <img src="/public/img/imelda_seal.png" alt="imelda-seal">
            </span>
            <span id="overlay-close">
                <img src="/public/img/close.png" alt="x">
            </span>
        </div>
    </div>
    </body>
</html>