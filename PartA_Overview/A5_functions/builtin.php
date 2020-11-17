<?php
// get current unix time (an integer)
echo time() . "<br>";

// format the current time (time only, hours:minutes:seconds)
echo strftime("%T") . "<br>";

// format the current time (day of week, month, day of month, hours, minutes)
// https://www.w3schools.com/php/func_date_strftime.asp
echo strftime("%A, %B %d, %H:%M") . "<br>";

// can use a date object instead
https://www.w3schools.com/php/func_date_date_format.asp
$date = date_create();
echo date_format($date, "Y-m-d") . "<br>";