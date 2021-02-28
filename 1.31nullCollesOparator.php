<?php
// this code only for php 7

$default_lat = 23.6;
$default_lon = 90.8;


$user_lat;

$lat = isset($user_lat) ? $user_lat : $default_lat;

$lat = $user_lat ?? $default_lat;

echo $lat;

if (isset($user_lat)){
    $lat = $user_lat;
} else {
    $lat = $default_lat;
}
