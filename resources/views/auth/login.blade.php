<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body class="font-sans antialiased">
    <div class="container container-sm container-md container-lg container-xl container-xxl">
        @include('layouts.navigation')
        <main style="padding: 56px 0px 36px;">
            <h2>Login</h2>
            <!-- Page Content -->
            <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="row align-items-start">
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3" style="padding: 2px;">
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="email">
                        Email
                    </label>
                </div>
                <div class="col-9 col-sm-9 col-md-3 col-lg-3 col-xl-3 col-xxl-9" style="padding: 2px;">
                    <input type="text" name="email" id="email" value="" style="width: 250px;">
                </div>
            </div>
            <div class="row">
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3" style="padding: 2px;">
                    <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="password">
                        Password
                    </label>
                </div>
                <div class="col-9 col-sm-9 col-md-3 col-lg-3 col-xl-3 col-xxl-9" style="padding: 2px;">
                    <input type="password" name="password" id="password" value="" style="width: 250px;">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="padding: 2px;">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="padding: 2px;">
                    @if (Route::has('register'))
                    <br>
                    <a class="" href="/register">
                        {{ __('Regist') }}
                    </a>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="padding: 2px;">
                    @if (Route::has('password.request'))
                    <br>
                    <a class="" href="/forgot-password">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" style="padding: 2px;">
                    <button class="btn btn-primary">
                        {{ __('Sign In') }}
                    </button>
                </div>
            </div>
            </form>
        </main>
    </div>
    <footer class="v-footer v-sheet theme--light v-footer--fixed" data-booted="true" style="left: 0px; right: 0px; bottom: 0px;position: fixed;"><span>© 2025</span></footer>
</body>
</html>
