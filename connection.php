<?php

$conn = new mysqli('localhost', 'root', '', 'acgmegrade');

if ($conn->connect_error) {
    echo "Connection Error";
    die;
}
