<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Link ke Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="bg-white shadow-md rounded p-6 w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6">Sign In</h1>

        <!-- Tampilkan pesan error jika ada -->
        <?php
        session_start();
        if (isset($_SESSION['login_error'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline"><?= htmlspecialchars($_SESSION['login_error']); ?></span>
            </div>
            <?php
            // Hapus pesan error setelah ditampilkan
            unset($_SESSION['login_error']);
        endif;
        ?>

        <form method="POST" action="login_process.php">
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username or Email</label>
                <input type="text" id="username" name="username" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <input type="submit" value="Sign In"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded cursor-pointer">

            <div class="mb-4 text-center" style="margin-top: 20px;">
                <span class="text-gray-600">Don't have an account?</span>
                <a href="register.php" class="text-blue-500 hover:text-blue-700">Sign Up</a>
            </div>
        </form>
    </div>

</body>

</html>