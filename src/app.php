<?php
function add($a, $b) {
    return $a + $b;
}

// Intentional security issue for GHAS to catch later
$password = "hardcoded_secret_123";
$query = "SELECT * FROM users WHERE id = " . $_GET['id'];
