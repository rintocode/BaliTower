<?php
// Koneksi ke database
$servername = "localhost:8080";
$username = "root";
$password = "password";
$dbname = "balitower";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk menampilkan data dengan range umur 24 - 29
$sql = "
SELECT 
    employees.NIK,
    employees.Nama,
    employees.Job_Title,
    departments.Departemen,
    sections.Section
FROM 
    employees
JOIN 
    employee_details ON employees.NIK = employee_details.NIK
JOIN 
    departments ON employees.Departemen_ID = departments.Departemen_ID
JOIN 
    sections ON employees.Section_ID = sections.Section_ID
WHERE 
    TIMESTAMPDIFF(YEAR, employee_details.tanggal_lahir, CURDATE()) BETWEEN 24 AND 29;
";

$result = $conn->query($sql);

// Periksa apakah ada hasil
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "NIK: " . $row["NIK"] . " - Nama: " . $row["Nama"] . " - Job Title: " . $row["Job_Title"] . " - Departemen: " . $row["Departemen"] . " - Section: " . $row["Section"] . "<br>";
    }
} else {
    echo "Tidak ada hasil.";
}

// Tutup koneksi
$conn->close();
?>
