<?php
require_once 'db.php';
$user = $_POST['username'];
echo checkUser($user, 'users');
