@extends('layouts.master')

@section('title', 'login')

@section('content')



    <div class="w-full items-center justify-center flex ">
        <div class="w-1/2 py-7 px-20 border rounded  mt-3">
            <div class=" w-full flex text-center font-semibold text-md">
                <label for="signup" class="border-b-2 ">SIGN IN FORM </label>

            </div>
            <div
                class=" w-full flex text-center items-center gap-1 justify-center text-md  mt-3 border rounded  p-2 outline-none ">
                <button class="flex text-center items-center gap-1 justify-center"><img src="images/google.png" alt=""
                        class="h-4">
                    <a href="{{ URL::to('googleLogin') }}" class="border rounded outline-none border-none"name="google"
                        id="google">Sign in with Google</a></button>

            </div>


            <div class=" w-full flex text-center items-center gap-2 text-md mt-3">

                <div class="w-1/3 border h-0"></div>
                <div class="text-gray-300">Or Sign in with Email</div>

                <div class="w-1/3 border h-0"></div>


            </div>

            <div class="mb-4">
                @if (session('error'))
                    <div class="text-red-500 bg-red-200">
                        {{ session('error') }}
                    </div>
                @endif

                @if (session('message'))
                    <div class="bg-green-200 text-green-500">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <form method="post" action="{{ url('login') }}" enctype="multipart/form-data">
                @csrf

                <div class=" w-full flex text-center  text-md py-2 mt-3">

                    <label>Email</label><span class="text-red-700 font-bold px-2"> * </span>

                </div>
                <div class=" w-full flex text-center  text-md ">
                    <input type="email" class="border rounded w-full p-2 outline-none"name="email" id="email"
                        placeholder="Enter your Email"
                        @if (@isset($_COOKIE['email'])) value="{{ $_COOKIE['email'] }}" @endif>
                </div>
                <div class=" w-full flex text-center  text-md py-2 mt-3">

                    <label>Password</label><span class="text-red-700 font-bold px-2"> * </span>

                </div>
                <div class=" w-full flex text-center  text-md ">
                    <input type="password" class="border rounded w-full p-2 outline-none"name="password" id="password"
                        placeholder="Enter your Password"
                        @if (@isset($_COOKIE['password'])) value="{{ $_COOKIE['password'] }}" @endif>

                </div>



                <div class="w-full flex text-center text-md py-3">
                    <div class="flex items-center justify-between w-full">
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2"> Remember me
                        </label>
                        <a href="/forgot-password" class="text-blue-700">Forgot password?</a>
                    </div>
                </div>


                <div class=" w-full flex text-center  text-md py-3 ">
                    <button type="submit"
                        class="button rounded bg-bgcolor text-white w-28 h-9 items-center flex justify-center"
                         @if (@isset($_COOKIE['email'])) checked="" @endif
                        >
                        Sign In
                    </button>
                </div>
            </form>
            <div class=" w-full flex text-center  text-md py-3  gap-3">
                <label>Don't have Account ?</label><a href="/signup" class="text-blue-700">Register Here</a>
            </div>

        </div>

    </div>
@endsection
