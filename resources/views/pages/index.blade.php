@extends('layouts.master')

@section('title', 'home')

@section('content')


<div class="py-32  w-full items-center justify-center flex ">
    <div class="w-2/3 text-center">

        <div >

            <label class="font-extrabold text-6xl">

                Building modern <br>
                websites with HTML, CSS, ... </label>
        </div>
        <div class="mt-5 text-3xl text-slate-950">
            <p class="text-redb">
                means combining the look and feel (front end) and the behind-the-scenes functionality (back end) to
                create a smooth and up-to-date web application. It's like putting together the design and the
                working parts to make a website that looks good and works well.
            </p>
        </div>
        <div class="mt-3">

            <input type="text" placeholder="Search ..." class="rounded border w-1/2 h-8 px-3 py-5" >
        </div>

    </div>
</div>
@endsection

