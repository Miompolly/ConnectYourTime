<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title', 'ctm')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700;900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>


<body class="bg-cover bg-transparent-50 ">
    <div class="main  h-screen ">

        <nav class="w-full h-20 bg-bgcolor flex fixed  top-0  items-center px-5 justify-between">
            <div>
                <img src="images/logo.png" class="font-bold h-10">
            </div>
            <div class="text-white font-sans w-1/3 flex justify-around gap-1">
                <a href="/" class="hover:text-gray-300">Home</a>
                <a href="/docs" class="hover:text-gray-300">Documentation</a>
                <a href="/blogs" class="hover:text-gray-300">Blogs</a>
                <a href="/why" class="hover:text-gray-300">Why Us</a>
                <a href="/Price" class="hover:text-gray-300">Price</a>
            </div>

            <div class="text-white flex gap-4">
                <a href="/login" class="button">Sign In</a>
                <a href="/signup" class="button rounded bg-green-500 w-28 h-9 items-center flex justify-center">Try
                    Free</a>
            </div>
        </nav>
        <div class="text-bgcolor  font-sans text-base w-full h-7 mt-20">
            @yield('content')
        </div>

    </div>
</body>

</html>
