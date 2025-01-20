@extends('layouts.errors.master')
@section('title', 'User Register')
@section('content')
    <section id="register" class="bg-yellow-dark/10 py-10">
        @if ($errors->any())
            <div id="errorMessage" class="mb-6 max-w-2xl mx-auto w-full px-4">
                <div class="relative bg-red-500 w-full text-white rounded-xl p-4">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul class="list-disc list-inside -mt-4">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                    <button id="closeMessage" class="text-white absolute top-4 right-4">
                        <i class="icon-close"></i>
                    </button>
                </div>
            </div>
        @endif

        <div class="flex justify-center items-center min-h-screen w-full">
            <div class="max-w-2xl mx-auto w-full px-4">
                <img src="/assets/images/logo/logo-removebg.webp" alt="Logo Defood" class="md:w-36 w-32">

                <form action="{{ route('customer_process_register') }}"
                    class="bg-white px-8 pb-12 pt-8 rounded-md mt-4 w-full grid md:grid-cols-2 grid-cols-1 gap-4"
                    method="POST">
                    @csrf
                    <div class="md:col-span-2 col-span-1">
                        <h1 class="text-blue-darker font-bold text-2xl">Create your account</h1>
                        <p class="text-gray-400 text-sm">Enter your personal details to create account</p>
                    </div>

                    <div class="flex flex-col gap-2 col-span-1">
                        <label for="name">Name</label>
                        <input required type="text" name="name"
                            class="outline-yellow-dark text-yellow-dark px-4 py-2 rounded w-full border border-yellow-dark bg-yellow-dark/10 placeholder-yellow-dark"
                            placeholder="John Doe">
                    </div>
                    <div class="flex flex-col gap-2 col-span-1">
                        <label for="email">Email</label>
                        <input required type="email" name="email"
                            class="outline-yellow-dark text-yellow-dark px-4 py-2 rounded w-full border border-yellow-dark bg-yellow-dark/10 placeholder-yellow-dark"
                            placeholder="test@gmail.com">
                    </div>
                    <div class="flex flex-col gap-2 col-span-1">
                        <label for="password">Password</label>
                        <input required type="password" name="password"
                            class="outline-yellow-dark text-yellow-dark px-4 py-2 rounded w-full border border-yellow-dark bg-yellow-dark/10 placeholder-yellow-dark"
                            placeholder="********">
                    </div>
                    <div class="flex flex-col gap-2 col-span-1">
                        <label for="phone_number">Phone Number</label>
                        <input required type="number" name="phone_number"
                            class="outline-yellow-dark text-yellow-dark px-4 py-2 rounded w-full border border-yellow-dark bg-yellow-dark/10 placeholder-yellow-dark"
                            placeholder="081234567890">
                    </div>
                    <div class="flex flex-col gap-2 md:col-span-2 col-span-1">
                        <label for="address">Address</label>
                        <textarea required name="address" id="address" cols="30" rows="4"
                            class="outline-yellow-dark text-yellow-dark px-4 py-2 rounded w-full border border-yellow-dark bg-yellow-dark/10 placeholder-yellow-dark">
                        </textarea>
                    </div>

                    <div class="md:col-span-2 col-span-1">
                        <button type="submit"
                            class="block w-fit py-2 px-6 bg-yellow-dark rounded mt-4 ml-auto text-white font-semibold">Masuk</button>
                    </div>

                    <div class="md:col-span-2 col-span-1 flex items-center gap-2 justify-center mt-4">
                        <p class="text-gray-400 text-sm">Already have an account?</p>
                        <a href="{{ route('customer_login') }}" class="block text-yellow-dark text-sm">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
