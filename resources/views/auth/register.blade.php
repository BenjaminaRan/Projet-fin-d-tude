<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/stylereg.css') }}" rel="stylesheet">

    <title>Document</title>
</head>

<body>


<form method="POST" class="form" action="{{ route('register') }}">
        @csrf
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <div class="form-inner">
            <h2>REGISTER</h2>
            <div class="content">
                <!-- User Type -->
                <div>
                    <x-input-label for="user_type" :value="__('')" />
                    <input type="text" id="user_type" name="user_type" value="admin" class="block mt-1 w-full" readonly required>
                </div><br>

                <!-- Name -->
                <div class="mt-4">
                    <x-input-label for="name" :value="__('')" />
                    <x-text-input id="name" class="input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nom..." />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="email-container">
                    <label for="email" class="email-label"></label>
                    <x-text-input id="email" class="email-input block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email..." />
                    <x-input-error :messages="$errors->get('email')" class="email-error mt-2" />
                </div>

                <!-- Password -->
                <div class="password-container mt-4">
                    <x-input-label for="password" :value="__('')" class="password-label" />
                    <x-text-input id="password" class="password-input block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Mot de passe..." />
                    <x-input-error :messages="$errors->get('password')" class="password-error mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="password-container mt-4">
                    <x-input-label for="password_confirmation" :value="__('')" class="password-label" />
                    <x-text-input id="password_confirmation" class="password-input block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer le mot de passe..." />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="password-error mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="ms-2 btn btn-primary">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </div>
        </div>
    </form>
</body>

</html>