<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php foreach ($listings as $listed): ?>
        <p><?php echo $listed ?></p>
        <?php endforeach; ?>
        <a href="index.php">Return to search</a>
    </body>
</html>
