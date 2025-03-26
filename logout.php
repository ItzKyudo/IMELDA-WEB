<?php
session_start();

// Destroy the session
session_unset();
session_destroy();

// Optionally, clear the session cookie if you want to fully destroy the session on the client side
setcookie(session_name(), '', time() - 3600, '/');  // Expire the cookie

// Redirect to the login page or homepage after logging out
header("Location: /WEB/imelda-web/index.php");
exit;
?>