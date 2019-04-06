<?php
/*
 * Sukhveer Jawandha
 * 4/5/2019
 * 328/cupcakes/index.php
 * This file contains the form of cupcakes flavors where customer can order the cupcakes.
 */
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>

</head>
<body>
<h2>Cupcakes</h2>
<?php
// define variables
$name = "";

// validate form
if (!empty($_POST)) {
    require 'process.php';
}
?>
<form id="cupcake" method="post" action="process.php">
    <fieldset>
        <label>
            Name:<input type="text" name="fullName" placeholder="Please input your name " value="<?php echo $name?>">
        </label>
        <legend>Type of Cupcake(s)</legend>
        <?php
        // create an associative array
        $flavors = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon",
            "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet",
            "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

        // loop through the array to display options
        foreach ($flavors as $option => $text) {
            echo "<label><input type='checkbox' value='" . $option . "' name='cupcakes[]'";
            if (!empty($_POST['cupcakes'])) {
                echo " checked='checked'";
            }
            echo "> " . $text . "</label><br>";
        }
        ?>
    </fieldset>
    <input type="submit" value="Order" id="submit">
</form>
</body>
</html>