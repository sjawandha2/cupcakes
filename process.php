<?php
/*
 * Sukhveer Jawandha
 * 4/5/2019
 * 328/cupcakes/process.php
 * PHP validation for cupcake form. It validate the data and return summary of cupcakes flavors.
 */
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

$isValid = true;
// validate name
$name = $_POST['fullName'];
if (empty($name)) {
    echo "<p>Please enter your full name</p>";
    $isValid = false;
}
// validate cupcake checkboxes
$flavors = $_POST['cupcakes'];
if(!empty($flavors)){
    $flavorsString=implode(", ",$flavors);
}
if (empty($flavors)) {
    echo "<p>Please enter flavors</p>";
    $isValid = false;
}
// if valid
if ($isValid) {
    echo "<p>Thank you, $name, for your order!</p>";
    echo "<h4>Order Summary:</h4>";
    echo '<li>' .implode('</li><li>',$flavors) . '</li>';
    echo "<hr>";

}
