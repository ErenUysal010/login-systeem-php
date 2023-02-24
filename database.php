<?php
$host = 'localhost';
$dbname = 'database_name';
$user = 'username';
$pass = 'password';

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    // Zet error reporting aan
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Zet emulatie van prepared statements uit
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch(PDOException $e) {
    // Geef een foutmelding als de verbinding niet kan worden gemaakt
    echo 'Error: ' . $e->getMessage();
    exit;
}

/*
-------------------MySQL database code--------------------
-- Maak de database aan
CREATE DATABASE IF NOT EXISTS `pdo_users`;

-- Maak de tabel aan
USE `pdo_users`;

CREATE TABLE IF NOT EXISTS `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
----------------------------------------------------------*/
