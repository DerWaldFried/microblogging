<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php htmlspecialchars($title) ?></title>

    <?= Asset::renderCss() ?>
</head>
<body>

<header>
    <h1><?= htmlspecialchars($title) ?></h1>
</header>

<main>
    <p><?= htmlspecialchars($content) ?></p>
</main>

<footer>
    <small>&copy; <?= date('Y') ?></small>
</footer>

</body>
</html>
