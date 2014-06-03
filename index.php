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
$message = 'Enter your search terms above.';
if (isset($_POST['search'])){
    
    $searchterm = $_POST['search'];
    $sql = 'SELECT searchtext FROM list
        WHERE searchtext LIKE "%' . $searchterm . '%"';
    $result = $pdo->query($sql);
foreach($result as $results){
    $listings[] = $results['searchtext'];
}
if(!empty($listings)){
include 'results.html.php';
exit();
}
else{
    $message = 'No search terms found.';
}
}
include 'search.html.php';


