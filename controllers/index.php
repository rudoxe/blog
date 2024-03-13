<?php

// dabut datus no datu bazes un izvadit ar html
require "functions.php";
$config = require "config.php";
require "Database.php";

echo "Bonjour, IPa22 🥖";

$db = new Database($config);

$query_string = "SELECT * FROM posts";
$params = [];
if(isset($_GET['id']) && $_GET["id"] != "") {
    // .= panem ieprieksejo vertibu un pieliek where klat <3
    $query_string .= " WHERE id=:id";
   // $params = [":id" => $_GET["id"]];
    $params [":id"] = $_GET["id"];
}

if(isset($_GET['name']) && $_GET["name"] != "") {
    $query_string .= " JOIN categories ON posts.category_id=categories.id WHERE name=:name";
    $params [":name"] = $_GET["name"];
}

$page_title = "Posts";
$posts = $db->execute($query_string, $params);

$page_title = "Posts";
require "views/index.view.php";