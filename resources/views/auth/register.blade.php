<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('colorlib-regform-15/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('colorlib-regform-15/css/style.css') }}">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="{{ asset('colorlib-regform-15/images/signup-img.jpg') }}" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <h2>Registration Form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" required/>
                                <x-input-error :messagess="$errors->get('name')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" name="email" id="email" />
                                <x-input-error :messagess="$errors->get('email')" class="mt-2" />
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="phone">Phone :</label>
                            <input type="text" name="phone" id="phone" required/>
                        </div>
                        <div class="form-radio">
                            <label for="rule" class="radio-label">Select your role :</label>
                            <div class="form-radio-item">
                                <input type="checkbox" name="role" id="student" >
                                <label for="student">Student</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="checkbox" id="teacher">
                                <label for="teacher">Teacher</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password" required/>
                            <x-input-error :messagess="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password Confirmation :</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" required/>
                            <x-input-error :messagess="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="image">Upload Image</label>
                            <input type="file"  class="form-control border border-gray-200 rounded p-2 w-full" name="image">
                        </div>
                        <div class="form-submit">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="margin-right: 10px" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                            <x-primary-button class="submit" name="submit" id="submit" >
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{ asset('colorlib-regform-15/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('colorlib-regform-15/js/main.js') }}"></script>
</body>
</html>
