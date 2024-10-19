<?php require "partials/header.view.php"; ?>
<header>
    <?php require "partials/nav.view.php"; ?>
</header>
<main>
<section>
    <h1><?= $greeting; ?></h1>

    <ul>
        <?php foreach($notes as $note): ?>
            <li><?= $note; ?></li>
        <?php endforeach; ?>
    </ul>
</section>
</main>
<?php require "partials/footer.view.php"; ?>
