

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


<body class="bg-cover">
    <div class="main h-screen flex flex-col">

        <nav class="w-full h-20 bg-black flex items-center px-5 justify-between">
            <div>
                <a href="/dashboard">
                    <img src="images/logo.png" class="font-bold h-10">
                </a>
            </div>

            @auth
            <div class="text-white flex gap-4 items-center ">
                <div class="relative group ">
                    <img src="images/logo.png" class="font-bold h-8">
                </div>
                <div class="relative group ">
                    <img src="images/logo.png" class="font-bold h-8">
                </div>
                <div class="relative group w-44">
                    <label class="flex items-center focus:outline-none">
                        <img src="{{ auth()->user()->avatar_url }}" alt="Profile Image" class="rounded-full h-10 w-10 object-cover cursor-pointer">
                        <span class="ml-2">{{ auth()->user()->firstname }}</span>
                    </label>

                    <div class="absolute hidden group-hover:block bg-white mt-2 py-2 px-4 rounded shadow-lg">
                        <a href="#" class="block text-gray-800 hover:underline">Profile Settings</a>
                        <a href="{{ route('logout') }}" class="block text-red-500 hover:underline mt-2">Logout</a>
                    </div>
                </div>
            </div>
            @endauth
        </nav>


        <div class="flex flex-1">
            <div class="bg-black w-1/5">

            </div>

            <div class="text-bgcolor flex-1">

            </div>
        </div>

    </div>
</body>
</html>
