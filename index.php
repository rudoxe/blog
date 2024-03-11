<?php

// dabut datus no datu bazes un izvadit ar html
require "functions.php";
$config = require "config.php";
require "Database.php";

echo "Bonjour, IPa22 🥖";




echo "<form>";
echo "<input name='id'/>";
echo "<button>Filter by ID</button>";
echo "</form>";

echo "<form>";
echo "<input name='name'/>";
echo "<button>Filter by Category</button>";
echo "</form>";

echo "<h1>Posts</h1>";

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



$posts = $db->execute($query_string, $params);


echo "<ol>";
foreach($posts as $post) {
    echo "<li>" . $post["title"] . "</li>";
}
echo "</ol>";