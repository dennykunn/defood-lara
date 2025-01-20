@extends('layouts.errors.master')
@section('title', 'User Login')
@section('content')
    <section id="login" class="bg-yellow-dark/10">
        <div class="container mx-auto px-4">
            <div class="flex justify-center items-center h-screen w-full">
                <div>
                    <img src="/assets/images/logo/logo-removebg.webp" alt="Logo Defood" class="md:w-36 w-32">

                    <form action="{{ route('customer_process_login') }}"
                        class="bg-white px-8 pb-12 pt-8 rounded-md mt-4 w-[400px]" method="POST">
                        @csrf
                        <h1 class="text-blue-darker font-bold text-2xl">Login</h1>
                        <p class="text-gray-400 text-sm">Enter your email & password</p>

                        <div class="flex flex-col gap-2 mt-4">
                            <label for="email">Email</label>
                            <input type="email" name="email"
                                class="outline-yellow-dark text-yellow-dark px-4 py-2 rounded w-full border border-yellow-dark bg-yellow-dark/10 placeholder-yellow-dark"
                                placeholder="test@gmail.com">
                        </div>
                        <div class="flex flex-col gap-2 mt-4">
                            <label for="password">Password</label>
                            <input type="password" name="password"
                                class="outline-yellow-dark text-yellow-dark px-4 py-2 rounded w-full border border-yellow-dark bg-yellow-dark/10 placeholder-yellow-dark"
                                placeholder="********">
                        </div>

                        <button type="submit"
                            class="block w-fit py-2 px-6 bg-yellow-dark rounded mt-4 ml-auto text-white font-semibold">
                            Sign In
                        </button>

                        <div class="flex items-center gap-2 justify-center mt-4">
                            <p class="text-gray-400 text-sm">Don't have account?</p>
                            <a href="{{ route('customer_register') }}" class="block text-yellow-dark text-sm">Create
                                Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
