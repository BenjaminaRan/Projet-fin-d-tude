<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="{{ asset('css/stylelog.css') }}" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    
    <form method="POST" class="form " action="{{ route('login') }}">
    @csrf
        <span></span>
        <span></span>
        <span></span>
        <span></span>

        <div class="form-inner">
            <h2>LOGIN</h2>
            <div class="content">
                <div>
                    <x-input-label for="user_type" :value="__('')" />
                    <input type="text" id="user_type" name="user_type" value="admin" class="block mt-1 w-full" readonly
                        required>
                </div>

                <div class="email-container">
                    <label for="email" class="email-label"></label>
                    <x-text-input id="email" class="email-input block mt-1 w-full" type="email" name="email"
                        :value="old('email')" placeholder="Email..." required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="email-error mt-2" />
                </div>

                <div class="password-container mt-4">
                    <x-input-label for="password" :value="__('')" class="password-label" />
                    <x-text-input id="password" class="password-input block mt-1 w-full" type="password" name="password"
                        required autocomplete="current-password" placeholder=" Mot de passe ..." />
                    <x-input-error :messages="$errors->get('password')" class="password-error mt-2" />
                </div><br>

                <!-- Remember Me
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm text-red-600">{{ __('Remember me') }}</span>
                    </label>
                </div> -->

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-2 btn btn-primary">
                        {{ __('Se connecter') }}
                    </x-primary-button>
                </div>
    </form>
    </div>
    </div>
    </form>
</body>

</html>