<?php require "partials/head.php"; ?>

<h2 class="centered">Syötä uutinen</h2>

<div class="inputarea">
<form  action="/update_article" method="post" >
    <label for="title">Otsikko:</label>
    <input id="title" type="text" name="newstitle" maxlength=30 value="<?=$title?>">
    <label for="text">Uutinen:</label>
    <textarea id="text" name="newstext" rows="5" cols="30"><?=$text?></textarea>     
    <label for="date">Valitse artikkelin päivämäärä</label>
    <input id="date" type="datetime-local"  name="newstime" value=<?=$time?>> 
    <label for="rdate">Poistopäivä:</label>
    <input id="rdate" type="date" name="removedate" value=<?=$removetime?>>
    <input type="hidden" id="articleid" name="id" value=<?=$id?>>
    <input id="sendbutton" type="submit" value="Lähetä">
</form>
</div>

<?php require "partials/footer.php"; ?>