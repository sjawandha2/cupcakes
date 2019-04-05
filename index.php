<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Cupcake Fundraiser</title>
</head>
<body>

<h2>Cupcake Fundraiser</h2>

<?php
print_r($post);
/* create an associate array for flavors. */
$flavors = array("grasshopper"=>"The Grasshopper", "maple"=>"Whiskey Maple Bacon",
    "carrot"=>"Carrot Walnut", "caramel"=>"Salted Caramel Cupcake",
    "velvet"=>"Red Velvet", "lemon"=>"Lemon Drop",
    "tiramisu"=>"Tiramisu");
$flavors = array();

?>

<form action="" method="post">
<p>Your Name: </p>
    <input type="text" name="name" placeholder="Please input your name.">
<p>Cupcake flavors:</p>

    <input type="checkbox" name="flavors[]" value="grasshopper "/>The Grasshopper<br/>
    <input type="checkbox" name="flavors[]" value="maple "/>Whiskey Maple Bacon<br/>
    <input type="checkbox" name="flavors[]" value="carrot "/>Carrot Walnut<br/>
    <input type="checkbox" name="flavors[]" value="caramel "/>Salted Caramel Cupcake<br/>
    <input type="checkbox" name="flavors[]" value="velvet "/>Red Velvet<br/>
    <input type="checkbox" name="flavors[]" value="lemon "/>Lemon Drop<br/>
    <input type="checkbox" name="flavors[]" value="tiramisu "/>Tiramisu<br/>

    <input type="submit" value="Order" />

</form>
</body>
</html>