<?php require "partials/head.php"; ?>

<h2 class="centered">Lue uutiset</h2>

<form method="POST" action="" class="filter-form">
    <label for="section">Valitse osasto:</label>
    <select id="section" name="section">
        <option value="">Kaikki osastot</option>
        <option value="Kotimaa">Kotimaa</option>
        <option value="Ulkomaat">Ulkomaat</option>
        <option value="Viihde">Viihde</option>
    </select>
    <button type="submit">Suodata</button>
</form>

<div class = "news">
<?php
    foreach($allnews as $newsitem): ?>
        <div class='newsitem'>
        <h3><?=$newsitem["title"] ?></h3>
        <p><?=$newsitem["text"]?></p>
        <p><?=$newsitem["created"]?> by user: <?=$newsitem["userid"]?></p>
        <?php
        if(isLoggedIn() && ($newsitem["userid"] == $_SESSION["userid"])):
            $id = $newsitem['articleid'];
            $newsid = 'deleteNews' . $id; ?>
            <a id=<?=$newsid ?> onClick='confirmDelete(<?=$id?>)' href='/delete_article?id=<?=$id?>'>Poista</a> | 
            <a href='/update_article?id=<?=$id?>'>Päivitä</a>
        <?php endif; ?>
        </div>
    <?php endforeach ?>
</div>

<?php require "partials/footer.php"; ?>