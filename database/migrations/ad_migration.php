<?php


// This is the migrator for the ad table, includes files containing password and connect function to get into db

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS ads');

$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    description TEXT,
    price TEXT NOT NULL,
    url VARCHAR(255),
    image_url VARCHAR(255),
    featured TINYINT NOT NULL,
    user_id INT UNSIGNED,
    FOREIGN KEY (user_id) REFERENCES users(id),
    PRIMARY KEY (id)
)';

$dbc->exec($query);