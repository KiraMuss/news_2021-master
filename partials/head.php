<!DOCTYPE html>
<html lang="fi">
<head>
    <title>PHP</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/uutiset.css" type="text/css">
</head>
<body>
<script>
    function confirmDelete(id) {
        const answer = confirm("Poistetaanko uutinen?");
        if(!answer){
            document.getElementById('deleteNews' + id).href = '/';
        }
        return answer;
    }
</script>
    <header>
        <h1>Tiinan uutispalvelu</h1>
    </header>
<nav>
    <ul class="navbar">
        <li class="navbutton"><a href="/">Lue uutiset</a></li>
        <?php if(!isLoggedIn()): ?>
           <li class="navbutton"><a href="/login">Login</a></li> 
           <li class="navbutton"><a href="/register">Rekisteröidy</a></li>
        <?php else: ?>
           <li class="navbutton"><a href="/add_article">Uusi uutinen</a></li>
           <li class="navbutton"><a href="/logout">Logout</a></li>
        <?php endif ?>

    </ul>
</nav>