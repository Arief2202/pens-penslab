<!DOCTYPE html>
    <html lang="en">
    <head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('img/title.png')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title>PENSLAB || Register</title>
    </head>
        <body>
          <div class="h-screen flex flex-col">
        
            <div class="w-11/12 sm:w-96 h-auto bg-gray-200 rounded-xl m-auto px-10 sm:px-14 py-10 shadow-md">
              <div class="flex">
                <span class="m-auto text-yellow-500 font-semibold text-2xl mb-4">PENSLAB</span>
              </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="nama" :value="__('Nama')" />

                <x-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required autofocus />
            </div>

            <!-- NRP Address -->
            <div class="mt-4">
                <x-label for="nrp" :value="__('NRP')" />

                <x-input id="nrp" class="block mt-1 w-full" type="text" name="nrp" :value="old('nrp')" required />
            </div>


            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <x-button class="px-7 py-2 bg-color1 rounded-lg text-white font-semibold mt-8 block mx-auto hover:bg-blue-900">
                {{ __('Register') }}
            </x-button>

            <div class="mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered? Go Login') }}
                    {{-- {{ __('Go Login') }} --}}
                </a>
            </div>
        </form>
    </body>
    </html>