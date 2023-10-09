<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Playfair&display=swap" rel="stylesheet">
    <title>Data Monitoring</title>
</head>

<body>
    <div class="container">
        <div class="container-kiri">
            <h1 class="corner-image">Data Monitoring</h1>
            {{-- <img class="corner-image" src="images/logosyn-removebg-preview.png"> --}}
            <img class="corner-image2" src="images/login.jpg">
        </div>
        <div class="container-kanan">
            <h1 style="padding-left: 20%">Welcome To Data Monitoring</h1>
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
            <form action="" method="POST">
                @csrf
                <div class="kelas">
                    <div class="mb-3">
                        <label for="crud-form-1" class="form-label">Email address</label>
                        <input id="crud-form-1" type="text"
                            class="form-control" @error('email') style="border: solid 1px red; width: 200%"  @enderror name="email" style="width: 200%"
                            placeholder="Email">
                        @error('email')
                        <div class="text-red-500">
                            <h4 style="color: red; font-size: 15px">{{ $message }}</h4>
                        </div>
                        @enderror
                            <label for="password" class="form-label">Password</label>
                            <input @error('password') style="border: solid 1px red; width: 200%"  @enderror  style="width: 200%" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="">
                            @error('password')
                            <div class="text-red-500">
                                <h4 style="color: red; font-size: 15px">{{ $message }}</h4>
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary"
                            style="background-color:#fff; color: black;">Login</button>
                    </div>
                    </div>
            </form>
        </div>
    </div>

</body>

</html>




{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container py-5">
        <div class="w-50 center border rounded px-3 py-3 mx-auto">
            <h1>Login</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" value="{{ old('email') }}" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-3 d-grid">
                    <button name="submit" type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html> --}}
