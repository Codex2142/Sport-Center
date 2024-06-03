<?php
$servername = "localhost"; // Server MySQL (biasanya localhost jika menggunakan XAMPP)
$username = "root"; // Username MySQL (biasanya root jika menggunakan XAMPP)
$password = ""; // Password MySQL (kosong jika tidak diatur)
$dbname = "biliard_form"; // Nama database yang telah Anda buat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil data dari form
$name = $_POST['name'];
$email = $_POST['email'];
$whatsapp_number = $_POST['subject'];
$package = $_POST['table'];

// Menyimpan data ke database
$sql = "INSERT INTO biliard_form (name, email, whatsapp_number, package) VALUES ('$name', '$email', '$whatsapp_number', '$package')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
