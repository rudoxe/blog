<?php

// dabut datus no datu bazes un izvadit ar html
require "functions.php";
require "Database.php";

echo "Bonjour, IPa22!";

$db = new Database();
$posts = $db->execute();

echo "<h1>Posts</h1>";


echo "<ol>";
foreach($posts as $post) {
    echo "<li>" . $post["title"] . "</li>";
}
echo "</ol>";