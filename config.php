<?php

return [
  'db' => [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => 'mysql',
    'name' => 'shop_db',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
];
