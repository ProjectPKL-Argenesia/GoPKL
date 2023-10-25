<title>Masuk</title>
@extends('layouts.template')
@section('content')
    <section class="bg-lightblue min-h-screen flex items-center justify-center">
        <div class="bg-white flex flex-col md:flex md:flex-row rounded-2xl shadow-2xl max-w-3xl items-center">
            <div class="md:hidden flex flex-col p-4">
                <img class="w-52 h-56 rounded-2xl" src="/assets/images/background.jpg">
            </div>
            <div class="md:w-1/2 px-8 md:px-16 py-2">
                <h2 class="font-bold text-2xl text-black text-center">Selamat Datang !</h2>
                <p class="text-sm text-[#00000080] text-center">Selamat Datang | Masukkan data anda</p>

                <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-1 mt-4">
                    @csrf

                    <x-input-label class="pt-2" for="email" :value="__('Email')" />
                    <input class="p-2 border border-[#00000080] rounded-md focus:outline-none" id="email" type="email"
                        name="email" required autofocus placeholder="contoh@gmail.com">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <x-input-label class="pt-2" for="password" :value="__('Password')" />
                    <input class="p-2 border border-[#00000080] rounded-md focus:outline-none w-full" id="password"
                        type="password" name="password" required placeholder="********">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <button type="submit"
                        class="bg-[#0F044C] rounded-md text-white mt-3 py-2 hover:scale-105 duration-300">{{ __('Masuk') }}</button>
                </form>
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="mt-3 text-xs flex justify-between items-center">
                    <p class="text-[#00000080]">kamu belum memilki akun ?</p>
                    @if (Route::has('register'))
                        <a class="py-2 px-5 bg-white text-[#000000] border rounded-md shadow-md hover:scale-110 duration-300"
                            href="{{ route('register') }}">Daftar
                        </a>
                    @endif
                </div>
            </div>

            <div class="md:block hidden w-1/2 rounded-r-2xl">
                <img class="w-full h-[435px] rounded-r-2xl" src="/assets/images/background.jpg">
            </div>
        </div>
    </section>
@endsection
