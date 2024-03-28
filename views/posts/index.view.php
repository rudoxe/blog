<?php require "views/components/head.php" ?>    
<?php require "views/components/navbar.php" ?>
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
    <li> <?= htmlspecialchars($post["title"]) ?>
    <form class="delete-form" method="POST" action="/delete">
    <input type="hidden" name="id" value="<?= $post["id"] ?>" />
    <button>Delete</button></form>
     </li>
<?php } ?>
</ol>
<?php require "views/components/footer.php" ?>