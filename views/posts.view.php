<?php require "components/head.php" ?>    
<?php require "components/navbar.php" ?>
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
    <li> <?= htmlspecialchars($post["title"]) ?> </li>
<?php } ?>
</ol>
<?php require "components/footer.php" ?>