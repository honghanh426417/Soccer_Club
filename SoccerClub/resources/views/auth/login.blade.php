<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if(session('message'))
    <div class="alert alert-warning">
        {{ session('message') }}
    </div>
    @endif

    <form method="post" action="{{ route('login.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        {{-- <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">--}}

        <h1 class="h3 mb-3 fw-normal">Sign In</h1>
        <div class="social-icons">
            <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <span>or use your email password</span>
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Email" required="required" autofocus>

            @if ($errors->has('username'))
            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            @if ($errors->has('password'))
            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <a class="forget-pass" href="#">Forget Your Password?</a>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <span>Not a member? <a href="{{ route('register.show') }}">Sign Up</a></span>

    </form>


</body>

</html>