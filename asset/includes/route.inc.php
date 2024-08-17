<?php
if (isset($_POST["submit"])) {
    $route = $_POST["route"];
    $route_number = $_POST["route_number"];
    $bus_number = $_POST["bus_number"];
    $bus_owner_name = $_POST["bus_owner_name"];
    $distance = $_POST["distance"];
    $bus_stops = $_POST["bus_stops"];
    $start_venue = $_POST["start_venue"];
    $start_time = $_POST["start_time"];
    $stop_time = $_POST["stop_time"];

    require_once 'database.inc.php';
    require_once 'function.inc.php';

    createRoute($conn, $route, $route_number,$bus_number,$bus_owner_name, $distance, $bus_stops, $start_venue, $start_time, $stop_time);
} else {
    header('Location:../Owner Login.php?error=wrongLogin');
    exit();
}
