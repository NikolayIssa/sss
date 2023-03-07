<?php
$dbhost = "localhost";
$dbname = "Matsuri";
$username = "root";
$password = "";

$db = new PDO("mysql:host=$dbhost; dbname=$dbname",$username, $password);

function get_MenuItems_all(){
    global $db;
    $menuitems = $db->query("SELECT * FROM Pizza_list30cm");
    return $menuitems;
}

function get_MenuItems40_all(){
    global $db;
    $menuitems = $db->query("SELECT * FROM Pizza_list40cm");
    return $menuitems;
}

function get_DrinksItems_all(){
    global $db;
    $drinksItems = $db->query("SELECT * FROM Drinks_list1L");
    return $drinksItems;
}

function get_DrinksItems03L_all(){
    global $db;
    $drinksItems03L = $db->query("SELECT * FROM Drinks_list03L");
    return $drinksItems03L;
}

function get_DrinksItems05L_all(){
    global $db;
    $drinksItems05L = $db->query("SELECT * FROM Drinks_list05L");
    return $drinksItems05L;
}

function get_DrinksItems1L_all(){
    global $db;
    $drinksItems1L = $db->query("SELECT * FROM Drinks_list1L");
    return $drinksItems1L;
}

function get_SoupItems_all(){
    global $db;
    $soupitems = $db->query("SELECT * FROM Soups_list");
    return $soupitems;
}

function get_TeaItems_all(){
    global $db;
    $Tea_items = $db->query("SELECT * FROM Tea");
    return $Tea_items;
}

function get_CoffeeItems_all(){
    global $db;
    $Coffee_items = $db->query("SELECT * FROM Coffee");
    return $Coffee_items;
}

function get_BeerItems_all(){
    global $db;
    $Beer_items = $db->query("SELECT * FROM Beer_List");
    return $Beer_items;
}

function get_MeatItems_all(){
    global $db;
    $Meat_items = $db->query("SELECT * FROM Meat_List");
    return $Meat_items;
}

function get_RollsItems_all(){
    global $db;
    $rollsitems = $db->query("SELECT * FROM Rolls_list");
    return $rollsitems;
}

function get_FastFoodItems_all(){
    global $db;
    $fastfooditems = $db->query("SELECT * FROM fastfood_list");
    return $fastfooditems;
}

function get_lapshaItems_all(){
    global $db;
    $lapshaitems = $db->query("SELECT * FROM lapsha_list");
    return $lapshaitems;
}

function get_CoctailItems_all(){
    global $db;
    $coctailitems = $db->query("SELECT * FROM Coctail_list");
    return $coctailitems;
}

?>