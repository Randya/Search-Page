<?php
try{
$pdo = new PDO('mysql:host=localhost; dbname=search', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
} catch (PDOException $ex){
    $error = 'Failed to connect to the database!' . $ex->getMessage();
    include 'error.html.php';
    exit();
}
$gotstuff = 'You don\'t have stuff.';
$found = 'Your results will appear here.';
if (isset($_POST['submit'])){
    $searchterm = $_POST['submit'];
    $sql = 'SELECT searchtext FROM list
        WHERE searchtext LIKE "%' . $searchterm . '%"';
    $found = $pdo->query($sql);
    foreach($found as $result){
        $listings[] = $result['searchtext'];
    }
    header('Location: .');
}
include 'search.html.php';


