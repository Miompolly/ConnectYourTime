@extends('layouts.master')

@section('title', 'sign up page')

@section('content')



    <div class="w-full items-center justify-center flex ">
        <div class="w-1/2 py-7 px-20 border rounded  mt-3">
            <div class=" w-full flex text-center font-semibold text-md">
                <label for="signup" class="border-b-2 ">SIGN UP FORM </label>

            </div>
            <div
                class=" w-full flex text-center items-center gap-1 justify-center text-md  mt-3 border rounded  p-2 outline-none ">
                <button class="flex text-center items-center gap-1 justify-center"><img src="images/google.png" alt=""
                        class="h-4">
                    <a href="{{ URL::to('googleLogin') }}" class="border rounded outline-none border-none"name="google"
                        id="google">Sign up
                        with Google</a></button>

            </div>


            <div class=" w-full flex text-center items-center gap-2 text-md mt-3">

                <div class="w-1/3 border h-0"></div>
                <div class="text-gray-300">Or Signup with Email</div>

                <div class="w-1/3 border h-0"></div>


            </div>

            <div class="mb-4">

                @if (session('message'))
                    <div class="bg-green-200 text-green-500">
                        {{ session('message') }}
                    </div>
                @endif
            </div>

            <form method="post" action="{{ url('register') }}" enctype="multipart/form-data">
                @csrf



                <div class=" w-full flex text-center  text-md py-2 mt-3">

                    <label>First Name</label> <span class="text-red-700 font-bold px-2"> * </span>

                </div>
                <div class=" w-full flex text-center  text-md ">

                    <input type="text" class="border rounded w-full p-2 outline-none"name="firstname" id="firstname"
                        placeholder="Enter your First Name">

                </div>
                <div class="mb-4">
                    @error('firstname')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror


                </div>
                <div class=" w-full flex text-center  text-md py-2 mt-3">

                    <label>Last Name</label><span class="text-red-700 font-bold px-2"> * </span>

                </div>

                <div class=" w-full flex text-center  text-md ">

                    <input type="text" class="border rounded w-full p-2 outline-none"name="lastname" id="lastname"
                        placeholder="Enter your Last Name">

                </div>
                <div class="mb-4">
                    @error('lasttname')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror


                </div>
                <div class=" w-full flex text-center  text-md py-2 mt-3">

                    <label>Email</label><span class="text-red-700 font-bold px-2"> * </span>

                </div>
                <div class=" w-full flex text-center  text-md ">
                    <input type="email" class="border rounded w-full p-2 outline-none"name="email" id="email"
                        placeholder="Enter your Email">
                </div>
                <div class="mb-4">
                    @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror


                </div>
                <div class=" w-full flex text-center  text-md py-2 mt-3">

                    <label>Password</label><span class="text-red-700 font-bold px-2"> * </span>

                </div>
                <div class=" w-full flex text-center  text-md ">
                    <input type="password" class="border rounded w-full p-2 outline-none"name="password" id="password"
                        placeholder="Enter your Password">
                </div>
                <div class=" w-full flex text-center  text-md py-2 mt-3">

                    <label>Comfirm Password</label><span class="text-red-700 font-bold px-2"> * </span>

                </div>
                <div class=" w-full flex text-center  text-md ">
                    <input type="password" class="border rounded w-full p-2 outline-none" name="password_confirmation" id="password" placeholder="Confirm your Password">

                </div>

                <div class="mb-4">
                    @error('password')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror


                </div>


                <div class=" w-full flex text-left  text-md ">
                    <div class="password-indicators">
                        <div class="uppercase-indicator">Uppercase letter: <span id="uppercase-indicator"></span></div>
                        <div class="lowercase-indicator">Lowercase letter: <span id="lowercase-indicator"></span></div>
                        <div class="number-indicator">Number: <span id="number-indicator"></span></div>
                        <div class="special-char-indicator">Special character: <span id="special-char-indicator"></span></div>
                    </div>

                </div>

                <div class=" w-full flex text-center  text-md py-3 ">
                    <button type="submit"
                        class="button rounded bg-bgcolor text-white w-28 h-9 items-center flex justify-center">
                        Signup
                    </button>
                </div>

            </form>
            <div class=" w-full flex text-center  text-md py-3  gap-3">
                <label>Have Account ? </label><a href="/login" class="text-blue-700">Login Here</a>
            </div>


        </div>

    </div>
@endsection
