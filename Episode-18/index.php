<?php 
require 'function.php';
require 'Database.php';
// require 'router.php';

// connect to our database


$db = new Database();
$posts = $db -> query("SELECT * FROM posts") -> fetchAll(PDO::FETCH_ASSOC);

dd($posts);

