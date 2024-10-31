<?php require "partials/header.view.php"; ?>
<header>
    <?php require "partials/nav.view.php"; ?>
</header>
<main>
<section>
    <h1>Your Notes</h1>

    <ul>
        <?php foreach($posts as $post): ?>
            <details>
                <summary>
                    <?= $post['title']; ?>
                </summary>
                <p>
                    <?= $post['body']; ?>
                </p>
            </details>
        <?php endforeach; ?>
    </ul>
</section>
</main>
<?php require "partials/footer.view.php"; ?>
