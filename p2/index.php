<?php

session_start();

#check if there is data in session and assign to vars
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $winner = $results['winner'];
    $comp = $results['comp'];
    $choice = $results['choice'];
}


require 'index-view.php';
