<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Anggota Koperasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    <form method="POST" action="login_process.php" class="bg-white p-6 rounded shadow-md w-96">
        <h2 class="text-xl font-bold mb-4 text-center">Login Anggota Koperasi</h2>
        <?php if (isset($_GET['error'])): ?>
            <p class="text-red-500 text-sm mb-2"><?php echo $_GET['error']; ?></p>
        <?php endif; ?>
        <label class="block mb-2">Email</label>
        <input type="email" name="email" required class="w-full p-2 border rounded mb-4" />
        
        <label class="block mb-2">Password</label>
        <input type="password" name="password" required class="w-full p-2 border rounded mb-4" />
        
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Login</button>
    </form>
</body>
</html>
