<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($title) ?></title>
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
