<?php
session_start();
include_once "../data.php";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: ../index.php");
    exit();
}

$user_input = $_POST['username'] ?? '';
$pass_input = $_POST['password'] ?? '';

$encontrado = false;

foreach ($usuarios as $user) {
    if (!$encontrado && $user['username'] === $user_input && $user['password'] === $pass_input) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        $encontrado = true;
    }
}

if ($encontrado) {
    header("Location: ../dashboard.php");
    exit();
} else {
    header("Location: ../login.php?error=1");
    exit();
}