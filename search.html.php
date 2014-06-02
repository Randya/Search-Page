<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="post">
            <input type="text" placeholder="Search Stuff" />
            <input type="submit" value="Search" /><br />
            <?php
            echo $gotstuff . '<br />';
            echo $listings;
            ?>
        </form>
    </body>
</html>
