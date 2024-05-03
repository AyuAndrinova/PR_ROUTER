<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  <title>REGISTRASI</title>
</head>
<body>
  <main class="flex justify-center items-center w-full min-h-screen bg-purple-400 text-gray-600 font-sans">
    <div class="w-[500px] p-9 flex-col bg-white rounded-md shadow-sm">
        <div class="flex flex-row justify-center">
            <h1 class="font-bold font-sans text-xl">Selamat Datang di</h1>
            <h2 class="font-extrabold font-sans text-xl text-purple-600 shadow-sm ml-1">Contact App</h2> 
        </div>
        <div class=" flex justify-center items-center mt-2">
            <h3 class="font-bold font-sans text-2xl">REGISTER</h3>
        </div>
        <div class="mt-2">
            <label for="email" class="block text-base mb-2 font-semibold">Email</label>
            <input type="email" id="email" class="border w-full text-base px-2 py-1 focus:border-gray-800 focus:border-2" placeholder="Masukan email">
        </div>
        <div class="mt-2">
            <label for="username" class="block text-base mb-2 font-semibold">Username</label>
            <input type="text" id="username" class="border w-full text-base px-2 py-1 focus:border-gray-800 focus:border-2" placeholder="Masukan username">
        </div>
        <div class="mt-2">
            <label for="password" class="block text-base mb-2 font-semibold">Password</label>
            <input type="password" id="password" class="border w-full text-base px-2 py-1 focus:border-gray-800 focus:border-2" placeholder="Masukan password">
        </div>
        <div class="mt-3 flex justify-center items-center">
            <a href="./login.php" target="_blank">
                <button type="submit" class="block text-base mb-2 font-semibold bg-purple-600 rounded-md shadow-sm w-[100px] p-1 text-white hover:bg-white hover:text-purple-600 hover:font-semibold hover:border-2">
                    Register</button>
            </a>
        </div>
        <div class="flex mt-2 justify-center items-center">
            <h3 class="font-semibold font-sans text-base">Sudah memiliki akun? <a href="./login.html" class="text-purple-600 font-semibold">login</a></h3>
        </div>
    </div>
  </main>
</body>
</html>