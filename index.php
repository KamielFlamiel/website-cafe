<?php
// index.php - Main entry point for the website

// Start a session
session_start();

// Include necessary files
require_once 'config.php'; // Configuration file
require_once 'functions.php'; // Common functions

// Set default timezone
date_default_timezone_set('UTC');

// Handle routing
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Include the header
include 'includes/header.php';

// Load the requested page
switch ($page) {
    case 'home':
        include 'pages/home.php';
        break;
    case 'about':
        include 'pages/about.php';
        break;
    case 'contact':
        include 'pages/contact.php';
        break;
    default:
        include 'pages/404.php';
        break;
}

// Include the footer
include 'includes/footer.php';
?>