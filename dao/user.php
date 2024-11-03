<?php
include_once "pdo.php";

function checkuser($username, $password) {
    $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
    return pdo_query_one($sql, $username, $password);
}