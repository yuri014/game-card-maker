<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register - Card Game Maker</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&family=Kufam:wght@500;600;700&family=Nunito:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/formpages.css') }}" rel="stylesheet">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">
</head>
<body>
<div class="container register-container">
    <div class="go-to-sign-up">
        <a href="{{ route('login') }}">
            Sign in
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
    </div>
    <div class="content-form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="wrapper-form">
                <div class="content-title">
                    <span>Welcome</span>
                    <small>Make your registration Easy and Fast!</small>
                </div>
                <div class="content-input">
                    <label for="name">Name</label>
                    <input 
                        id="name" 
                        type="text" 
                        class="@error('name') is-invalid @enderror" 
                        name="name" 
                        value="{{ old('name') }}" 
                        required 
                        autocomplete="name" 
                        autofocus 
                        placeholder="Your name" 
                    />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="content-input">
                    <label for="username">Username</label>
                    <input 
                        placeholder="Your username" 
                        id="username" 
                        type="text" 
                        class="@error('username') is-invalid @enderror" 
                        name="username" value="{{ old('username') }}" 
                        required 
                        autocomplete="username"
                    />
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="content-input">
                    <label for="email">E-mail address</label>
                    <input 
                        id="email" 
                        type="email" 
                        class="@error('email') is-invalid @enderror" 
                        name="email" value="{{ old('email') }}" 
                        required 
                        autocomplete="email" 
                        placeholder="Your best email"
                    />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                    <div class="content-input">
                    <label for="password">Password</label>
                    <input 
                        id="password" 
                        type="password" 
                        class="@error('password') is-invalid @enderror" 
                        name="password" 
                        required 
                        placeholder="Your password" 
                        autocomplete="new-password"
                    />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                    <div class="content-input">
                    <label for="password-confirm">Confirm password</label>
                    <input
                        placeholder="Your password again"
                        id="password-confirm"
                        type="password"
                        name="password_confirmation"
                        autocomplete="new-password"
                        required
                    />
                </div>
                <div class="content-button">
                    <button type="submit">Register now</button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>
