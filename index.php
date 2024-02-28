<?php

require "functions.php";

echo "Bonjour, IPa22!";

$connection_string = "mysql:host=localhost;port=3306;dbname=blog_rudis;user=root;password=;charset=utf8mb4;";
$connection = new PDO($connection_string);

$query = $connection->prepare("SELECT * FROM posts");

$query->execute();

$posts = $query->fetchAll();
dd($posts);