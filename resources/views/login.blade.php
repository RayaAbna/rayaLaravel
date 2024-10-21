<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-500 flex justify-center items-center h-screen">
  <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
    <h1 class="text-2xl font-bold mb-6">Login</h1>
    <form>
      <div class="mb-4">
        <label for="username" class="block text-gray-700 font-bold mb-2">Username:</label>
        <input type="text" id="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your username">
      </div>
      <div class="mb-6">
        <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
        <input type="password" id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Enter your password">
      </div>
      <div class="flex justify-center">
        <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
          LOGIN
        </button>
      </div>
    </form>
  </div>
</body>
</html>