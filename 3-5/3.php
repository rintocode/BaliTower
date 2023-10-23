<?php
// Koneksi ke database (gantilah sesuai dengan konfigurasi Anda)
$host = 'localhost:8080';
$db   = 'balitower';
$user = 'root';
$pass = 'password';

$dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

// Sisipkan data ke tabel Departemen
$pdo->exec("INSERT INTO departments (name) VALUES ('IT')");
$pdo->exec("INSERT INTO departments (name) VALUES ('HR')");

// Sisipkan data ke tabel Section dengan merujuk ke Departemen
$pdo->exec("INSERT INTO sections (name, department_id) VALUES ('Development', 1)");
$pdo->exec("INSERT INTO sections (name, department_id) VALUES ('Testing', 1)");
$pdo->exec("INSERT INTO sections (name, department_id) VALUES ('Recruitment', 2)");

echo 'Data berhasil disisipkan.';
?>
