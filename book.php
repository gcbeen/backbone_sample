<?php
header('Content-Type: application/json; charset=utf-8');
die(json_encode([['title' => 'book-title'], ['title' => 'book-title2']]));