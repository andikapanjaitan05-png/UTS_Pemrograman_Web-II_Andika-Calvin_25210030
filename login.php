<h1>Login</h1>

<?php if (!empty($error)): ?>
    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<form method="POST" action="/login">
    <label>Username</label>
    <input type="text" name="username" required>
    <br><br>

    <label>Password</label>
    <input type="password" name="password" required>
    <br><br>

    <button type="submit">Login</button>
</form>