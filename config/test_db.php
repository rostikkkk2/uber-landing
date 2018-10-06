<?php
$db = require __DIR__ . '/db.php';
$db['dsn'] = 'mysql:host=localhost;dbname=uber-landing';

return $db;
