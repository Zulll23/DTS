<h1>Welcome to Home Page</h1>
<h2>Users:</h2>
<ul>
    <?php foreach ($users as $users): ?>
        <li><?php echo $user['name']?></li>
        <?php endforeach; ?>
</ul>