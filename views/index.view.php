<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes App</title>
</head>
<body>
    <header>
        <nav>
            <div>
                <a href="/">Logo</a>
            </div>
            <div>
                <a href="/about.php">About</a>
                <a href="#">Notes</a>
                <a href="/contact.php">Contact</a>
            </div>
        </nav>
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
    <footer>
        <section>
            Copyright &copy; 2024
        </section>
    </footer>
</body>
</html>
