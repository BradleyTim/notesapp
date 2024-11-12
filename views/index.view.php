<?php require "partials/header.view.php"; ?>
<header>
    <?php require "partials/nav.view.php"; ?>
</header>
<main>
<section>
    <h1>Random Thoughts</h1>

    <div>
        <?php foreach($posts as $post): ?>
            <details>
                <summary>
                    <?= htmlspecialchars($post['title']); ?>
                </summary>
                <p>
                    <?= htmlspecialchars($post['body']); ?>
                </p>
            </details>
        <?php endforeach; ?>
    </div>
    <div>
        <a href="/notes/create">Create Note</a>
    </div>
</section>
</main>
<?php require "partials/footer.view.php"; ?>
