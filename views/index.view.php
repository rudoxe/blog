<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
    <a href="/about.php">About us</a>
    <a href="/post.php">Posts</a>
    <a href="/story.php">Story</a>
</nav>
<h1>Posts</h1>
<form>
<input name='id'/>
<button>Filter by ID</button>
</form>

<form>
<input name='name' value='<?= ($_GET["name"] ?? '') ?>'/>
<button>Filter by Category</button>
</form>

<ol>
<?php foreach($posts as $post) { ?>
    <li> <?= $post["title"] ?> </li>
<?php } ?>
</ol>
</body>
</html>