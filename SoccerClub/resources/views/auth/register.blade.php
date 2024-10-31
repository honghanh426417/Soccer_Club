<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Register</title>
</head>

<body>
    @if(session('message'))
    <div class="alert alert-warning">
        {{ session('message') }}
    </div>
    @endif
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        {{-- <img class="mb-4" src="{!! url('images/bootstrap-logo.svg') !!}" alt="" width="72" height="57">--}}

        <h1 class="h3 mb-3 fw-normal">Sign Up</h1>
        <div class="form-group form-floating mb-3">
            
            <label for="floatingEmail">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Type your email" required="required" autofocus>

            @if ($errors->has('email'))
            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <label for="floatingName">Username</label>
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Type your username" required="required" autofocus>
            @if ($errors->has('username'))
            <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <label for="floatingPassword">Password</label>

            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Type your password" required="required">
            @if ($errors->has('password'))
            <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <label for="floatingConfirmPassword">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Type confirm password" required="required">
            @if ($errors->has('password_confirmation'))
            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>

    </form>


</body>

</html>