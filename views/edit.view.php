<?php require "partials/header.view.php"; ?>
<header>
    <?php require "partials/nav.view.php"; ?>
</header>
<main>
    <section>
        <h1>Edit Note</h1>
        <form action="/notes" method="POST">
            <div>
                <input type="text" name="title" id="title" placeholder="Title..." value="<?= $post['title']; ?>" required>
                <p><?= $errors['title'] ?? '' ?></p>
            </div>
            <div>
                <input type="text" name="body" id="body" placeholder="what's on your mind? " value="<?= $post['body']; ?>" required>
                <p><?= $errors['body'] ?? '' ?></p>
            </div>
            <div>
                <button type="submit">Update Note</button>
            </div>
        </form>
    </section>
</main>
<?php require "partials/footer.view.php"; ?>