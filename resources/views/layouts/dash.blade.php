

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


<body class="bg-cover  bg-bgcolor ">
    <div class="main  h-screen ">

        <nav class="w-full h-20 bg-bgcolor flex fixed top-0 items-center px-5 justify-between">
            <div>
                <img src="images/logo.png" class="font-bold h-10">
            </div>

            @auth
            <div class="text-white flex gap-4 items-center">
                <img src="{{ auth()->user()->avatar_url }}" alt="Profile Image" class="rounded-full h-10 w-10 object-cover">
                <label class="button">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</label>
                <a href="{{ route('logout') }}" class="button rounded bg-green-500 w-28 h-9 items-center flex justify-center">Logout</a>
            </div>
            @endauth

        </nav>

        <div class="text-bgcolor  font-sans text-base w-full h-7 mt-20">

            <div class=" flex h-full bg-white items-center">


                <div class=" bg-white h-screen w-1/6 ">
                    <div class="flex items-center justify-center">

                        <a href="/dashboard">Add product</a>
                    </div>
                    <div class="flex items-center justify-center">

                        <a href="/read">All Products</a>
                    </div>
                    <div class="flex items-center justify-center">

                        <a href="/allusers">All Users</a>
                    </div>

                </div>

                <div class=" w-5/6 h-full ">
                    @yield('content')
                </div>

            </div>

        </div>

    </div>
</body>

</html>
