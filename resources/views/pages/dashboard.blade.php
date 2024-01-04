<!-- resources/views/form.blade.php -->

@extends('layouts.dash')

@section('title', 'Dashboard')

@section('content')

    <div class="container mx-auto mt-8">
        <form method="post" action="{{ url('save-products') }}" enctype="multipart/form-data"
            class="bg-white p-8 rounded shadow-md md:w-2/3 lg:w-1/2">
            @csrf

            <div class="mb-4">
                @if ($errors->any())
                    <div class="text-red-500 bg-red-200">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('message'))
                    <div class="bg-green-200 text-green-500">
                        {{ session('message') }}
                    </div>
                @endif
            </div>

            <div class="mb-4">
                <label for="name" class="block text-gray-600 text-sm font-medium mb-2">Name</label>
                <input type="text" id="name" name="name"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="Type your name" required>
            </div>

            <!-- Price Input -->

            <div class="mb-4">
                <label for="price" class="block text-gray-600 text-sm font-medium mb-2">Price</label>
                <input type="number" id="price" name="price" value="{{ old('name') }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="Type your price" required>
            </div>

            <!-- Quantity Input -->
            <div class="mb-4">
                <label for="quantity" class="block text-gray-600 text-sm font-medium mb-2">Quantity</label>
                <input type="number" id="quantity" name="quantity"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="Quantity" required>
            </div>

            <!-- Image Input -->
            <div class="mb-4">
                <label for="image" class="block text-gray-600 text-sm font-medium mb-2">Image</label>
                <input type="file" id="image" name="image" accept="image/*"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                    placeholder="Quantity" required>
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-blue-500 text-white p-3 rounded-md focus:outline-none hover:bg-blue-600">Register
            </button>

        </form>
    </div>

@endsection
