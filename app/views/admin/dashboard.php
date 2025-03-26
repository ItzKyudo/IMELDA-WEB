<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="/public/css/admin/header-footer-styles.css">
        <link rel="stylesheet" href="/public/css/admin/dashboard-styles.css"> 
        <link rel="stylesheet" href="/public/css/common/color-palette.css">       
        <link rel="icon" href="/favicon.ico">    
        <title>Admin - MPDC</title>
        <script type="text/javascript" src="/public/js/admin/js-clock.js"></script>
    </head> 
<body onload="startTime()">
    <?php require 'common/admin-header.php'?>
    <div class="body-wrapper">
        <div class="body-content">
            <div class="dash-sidebar">
                <span id="dash-header">
                    Dashboard
                </span>
                <span id="dash-greetcard"></span>
                <span id="dash-qa-header">
                    Quick Actions
                </span>
                <span id="dash-qa">
                    <ul>
                        <li><a href="#">Approve Applications</a></li>
                        <li><a href="#">View Pending Requests</a></li>
                        <li><a href="#">Generate Reports</a></li>
                        <li><a href="#">Notify Applicants</a></li>
                    </ul>
                </span>
                <span id="dash-logout"><a href="#">Log out</a></span>
            </div>
            <div class="body-content-wrapper">
                <div class="content-header">
                    <span id="content-t1">Overview</span>
                    <p style="font-size: 0.8rem;"><em>as of <?php echo date('F d, Y'); ?></em></p>
                </div>
                <div class="content-cards">
                    <div class="card-div">
                        <div class="card-div-content">
                            <h2>New Applicants</h3>
                            <div class="card-div-counter">
                                <div class="card-counter-display">
                                    <h1>0</h1>
                                    <span>Zoning Clearance</span>        
                                </div>
                                <div class="card-counter-display">
                                    <h1>0</h1>
                                    <span>Locational Clearance</span>        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-div">
                        <div class="card-div-content">
                            <h2>Pending Reviews</h3>
                            <div class="card-div-counter">
                                <div class="card-counter-display">
                                    <h1>0</h1>
                                    <span>Zoning Clearance</span>        
                                </div>
                                <div class="card-counter-display">
                                    <h1>0</h1>
                                    <span>Locational Clearance</span>        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-div">
                        <div class="card-div-content">
                            <h2>Accepted Applications</h3>
                            <div class="card-div-counter">
                                <div class="card-counter-display">
                                    <h1>0</h1>
                                    <span>Zoning Clearance</span>        
                                </div>
                                <div class="card-counter-display">
                                    <h1>0</h1>
                                    <span>Locational Clearance</span>        
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-div">
                        <div class="card-div-content">
                            <h2>Rejected Applications</h3>
                            <div class="card-div-counter">
                                <div class="card-counter-display">
                                    <h1>0</h1>
                                    <span>Zoning Clearance</span>        
                                </div>
                                <div class="card-counter-display">
                                    <h1>0</h1>
                                    <span>Locational Clearance</span>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'common/admin-footer.php'?>
</body>
</html>