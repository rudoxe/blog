<?php

require "functions.php";

require "Database.php";
$config = require "config.php";
$db = new Database($config);



if($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    
    if (strlen($_POST["title"]) == 0 || strlen($_POST["title"]) > 255) {
        $errors["title"] = "nedrikst but mazs vai liels";
    }
        $max_category_id = $db->execute("SELECT MAX(id) FROM categories;", []) [0] ["MAX(id)"];
        if ($_POST["category_id"] > $max_category_id) {
            $errors["category_id"] = "Nav atbilstosas kategorijas";
        }

        if (empty($errors)) {
            $query = "INSERT INTO posts (title, category_id)
            VALUES (:title, :category_id)";
    $params = [
        ":title" => $_POST["title"],
        ":category_id" => $_POST["category_id"]
    ];
    $db->execute($query, $params);  
    header("Location: /");
    die(); 
}
}
$page_title = "Create A Post";

require "views/posts-create.view.php";