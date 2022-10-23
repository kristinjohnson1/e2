<?php

session_start();

#check if there is data in session and assign to vars
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $winner = $results['winner'];
    $flip = $results['flip'];
    $choice = $results['choice'];
}


require 'index-view.php';
