<?php
function get_formatted_time() {
    return strftime("%T");
}

function get_formatted_date() {
    $date = date_create();
    return date_format($date, "Y-m-d");
}

function get_formatted_date_time() {
    return strftime("%A, %B %d, %H:%M");
    // or
    // return get_formatted_date() . get_formatted_time()
}