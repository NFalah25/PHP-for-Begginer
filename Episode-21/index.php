<?php 
require 'function.php';
require 'Database.php';
// require 'router.php';

// connect to our database

$config = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = :id";
$posts = $db -> query($query, [':id'=>$id]) -> fetchAll(PDO::FETCH_ASSOC);

dd($posts);

