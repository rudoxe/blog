<?php


require "Validator.php";
require "Database.php";
$config = require "config.php";
$db = new Database($config);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    $title = $_POST["title"];
    if (!Validator::string($title, max: 255)) {
        $errors["title"] = "nedrikst but mazs vai liels";
    }
        $max_category_id = $db->execute("SELECT MAX(id) FROM categories;", [])->fetch()["MAX(id)"];
        if (!Validator::number($_POST["category_id"], min: 1, max: $max_category_id)) {
            $errors["category_id"] = "Nav atbilstosas kategorijas";
        }

        if (empty($errors)) {
            $query = "UPDATE posts SET title = :title, category_id = :category_id WHERE id = :id";
    $params = [
        ":title" => $_POST["title"],
        ":category_id" => $_POST["category_id"],
        ":id" => $_POST["id"]
    ];
    $db->execute($query, $params);  
    header("Location: /");
    die(); 
}
}

$query = "SELECT * FROM posts WHERE id = :id";
$params = [":id" => $_GET["id"]];
$post = $db->execute($query, $params)->fetch();

$page_title = "Edit a post";
require "views/posts/edit.view.php";