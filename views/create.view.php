<?php require "partials/header.view.php"; ?>
<header>
    <?php require "partials/nav.view.php"; ?>
</header>
<main>
    <section>
        <h1>Create Note</h1>
        <form action="" method="POST">
            <div>
                <input type="text" name="title" id="title" placeholder="Title...">
            </div>
            <div>
                <input type="text" name="body" id="body" placeholder="what's on your mind? ">
            </div>
            <div>
                <button type="submit">Create Note</button>
            </div>
        </form>
    </section>
</main>
<?php require "partials/footer.view.php"; ?>