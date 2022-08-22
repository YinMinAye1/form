<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Custom Authentication</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style type="text/css">
        body {
            background-image: url('{{ asset('live.jpg') }}');
            background-repeat: no-repeat, repeat;
            background-position: center;
            background-size: cover;
            min-height: 100vh;

        }

        .table {
            background: #1a11117a;
            margin-top: 60px;
            margin-bottom: 60px;
            padding: 60px;
            border-radius: 60px;
            color: white;
            box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.75);
        }

        .container {
            background: #09090a4f;
            border-radius: 60px;
            box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.38);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 mt-2">
                <h4 class="text-white text-center mt-3">Welcome to Dashboard</h4>
                <hr>
                <table class="table table-bordered mb-5">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">{{ $data->name }}</td>
                            <td class="text-center">{{ $data->email }}</td>
                            <td class="text-center"><a href="logout">Logout</a></td>
                        </tr>
                    </tbody>
                </table>

            </div>


        </div>
    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>

</html>
