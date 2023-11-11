<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>
    .container {
        height: auto;
        width: 50%;
        margin: auto;
        border: 1px solid black;
        text-align: center;
        line-height: 2;
        background-color: orange;
    }

</style>

<body><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div style="height: 60vh;" class="col-md-6 p-4 bg-warning">
                <br><br><br>
                <h3 class="text-center">Login</h3>
                <form action="{{route('Do_Login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address:</label>
                        <input type="email" required name="email" value="{{old('email')}}" class="form-control" id="" placeholder="Enter email">
                        @error('email')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password:</label>
                        <input type="password" required name="password" value="{{old('password')}}" class="form-control" id="" placeholder="Password">
                        @error('password')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div class="col-md-5"></div>
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>

</html>