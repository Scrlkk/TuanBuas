<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Link ke Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="bg-white shadow-md rounded p-6 w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6">Sign Up</h1>

        <!-- Tampilkan notifikasi jika berhasil membuat akun -->
        <?php
        session_start();
        if (isset($_SESSION['signup_success'])): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">Anda berhasil membuat akun, <a href="login.php"
                        class="text-blue-500 hover:text-blue-700">Login?</a></span>
            </div>
            <?php
            // Hapus notifikasi setelah ditampilkan
            unset($_SESSION['signup_success']);
        endif;
        ?>

        <form method="POST" action="register_process.php">
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" id="username" name="username" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <input type="submit" value="Sign Up"
                class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded cursor-pointer">


            <div class="mb-4 text-center" style="margin-top: 20px;">
                <span class="text-gray-600">Already have an account?</span>
                <a href="login.php" class="text-green-500 hover:text-green-700">Sign In</a>
            </div>
        </form>
    </div>

</body>

</html>