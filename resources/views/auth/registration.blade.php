<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Custom Authentication</title>
    <style type="text/css">
        body {
            background-image: url('{{ asset('live.jpg') }}');
            width:auto;
            background-repeat: no-repeat, repeat;
            background-position: center;
            background-size: cover;
            padding-top: 100px;
        }
        .card{
            background: #1a11117a;
            margin-top:60px;
            margin-bottom: 60px;
            padding: 60px;
            border-radius: 60px;
            color: white;
            box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.75);
        }
        .container{
            background: #09090a4f;
            border-radius: 60px;
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.38);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-3">
                <div class="card">
                    <div class="card-header text-center fs-5">Registration</div>
                    <div class="card-body">
                        <form action="{{ route('register-User') }}" method="POST">


                            @if (Session::has('success'))
                                <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @endif
                            @if (Session::has('fail'))
                                <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" id="" class="form-control"
                                    placeholder="Enter your Name" value="{{ old('name') }}">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" id="" class="form-control"
                                    placeholder="Enter your Email" value="{{ old('email') }}">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control"
                                    placeholder="Enter your Password" value="{{ old('password') }}">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="mt-3 float-end">
                                <button class="btn btn-block btn-primary" type="submit">Register</button>
                            </div>
                            <br>
                            <a href="login">Already Registered !! Log in here.</a>
                        </form>
                    </div>
                </div>

            </div>


        </div>
    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

</html>
