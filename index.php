<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
    <link rel="stylesheet" href="./styles.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-200 min-h-screen flex items-center justify-center">
    <?php require_once "php/login_process.php" ?>
    <main class="bg-white p-8 rounded shadow-md max-w-md w-full">
        <h1 class="text-2xl font-semibold mb-4">Login</h1>
        <form class="grid" method="POST">
            <div class="mb-4 grid gap-4">
                <div class="">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">email</label>
                    <input type="text" id="email" name="email" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-400">
                </div>
                <div class="">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="border rounded w-full py-2 px-3 focus:outline-none focus:border-blue-400">
                </div>


                <a href="./change_password.php" class="text-blue-500 hover:underline">Forgot Password</a>
            </div>
            <button type="submit" name="login" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-200">Login</button>
        </form>
        <div class="mt-4 text-center flex justify-center gap-1">
        <div class="col-md-6">
                  <a href="./add_user.php">  <button type="button" class="btn btn-primary btn-block">Register</button>
                </div>

        </div>
    </main>



</body>


</html>