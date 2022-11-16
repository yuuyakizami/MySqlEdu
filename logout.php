<?php 
// Access the current session
session_start(); 
// If no session variable exists then redirect the user

if (!isset($_SESSION['user_id']))
{
    header("location: index.php");
    exit();
    // Cancels the session and redirect the user: 
} else {
    // Cancel the session
    $_SESSION = array();
    // Destroy the Variables
    $params = session_get_cookie_params();
    Setcookie(session_name(), "", time() - 42000,
    $params["path"], $params["domain"], 
    $params["secure"], $params["httponly"]);
    if(session_status() == PHP_SESSION_ACTIVE) {
        session_destroy(); }
    header("location: index.php");
}
;?>