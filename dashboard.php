<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Jika sudah login, tampilkan halaman dashboard
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<style>
    /* Resetting some default styles */
body, h2, p, ul, li {
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h2 {
    color: #333;
}

p {
    color: #555;
}

ul {
    list-style-type: none;
    margin-top: 20px;
}

li {
    margin-bottom: 10px;
}

a {
    text-decoration: none;
    color: #007BFF;
}

a:hover {
    text-decoration: underline;
}

/* Style for the navigation bar */
ul {
    background-color: #007BFF;
    overflow: hidden;
}

li {
    float: left;
    display: inline;
    margin-right: 20px;
}

a {
    display: block;
    padding: 14px 16px;
    color: white;
}

a:hover {
    background-color: #0056b3;
}

/* Style for the welcome message */
.welcome {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    text-align: center;
}
</style>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<p> dashboard .</p>

    <ul>
        <li><a href="read.php">daftar buku </a></li>
        <li><a href="anggota.php">anggota </a></li>
        <li><a href="create_peminjaman.php">peminjaman </a></li>
        <li><a href="logout.php">Logout</a></li> <!-- Tambahkan tautan logout -->

    </ul>

</body>
</html>
