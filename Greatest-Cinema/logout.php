<?php
session_start();
session_destroy();
// Destroy all session data
// This will clear all variables stored in the session

// Redirect user to the index page
header('Location: index.php');
?>