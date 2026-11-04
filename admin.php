<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - My Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="/admin">My Store - Admin</a>
        <span class="text-white">
            <?= htmlspecialchars($_SESSION['username'] ?? '') ?> |
            <a class="text-white" href="/logout">Logout</a>
        </span>
    </div>
</nav>
<div class="container">
    <?php if (!empty($_SESSION['flash'])): ?>
        <div class="alert alert-success"><?= htmlspecialchars($_SESSION['flash']) ?></div>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>
    <?= $content ?>
</div>
</body>
</html>