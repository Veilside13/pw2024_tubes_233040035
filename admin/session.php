<?php

function cekSessionAdmin()
{
    // Start the session
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Check if the user is logged in
    if (!isset($_SESSION['login'])) {
        // If not logged in, redirect to the login page
        header("Location: ../login.php");
        exit;
    }
}
