<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('/css/login.css')}}">
</head>


<body>
        <div class="login-box">
            <h2>Login</h2>
            <form action="{{route('Do_Login')}}" method="post">
                @csrf
                <div class="user-box">
                    <input type="text" name="email" value="{{old('email')}}" required="">
                    <label>Username</label>
                </div>
                @error('email')
                {{$message}}
                @enderror

                <div class="user-box">
                    <input type="password" name="password" value="{{old('password')}}" required="">
                    <label>Password</label>
                </div>
                @error('password')
                {{$message}}
                @enderror
                <a>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <button type="submit" class="btn text-light">Button</button>
                </a>
            </form>
        </div>
</body>

</html>