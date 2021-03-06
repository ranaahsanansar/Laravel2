<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ASN CRUD_ORM</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .data_entry {
            margin-top: 50px;
        }

        .msg {
            margin-top: 10px;
        }

        .heading {
            text-align: center;
        }

        body > div:nth-child(3) > div > div:nth-child(2) > nav > div.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between > div:nth-child(2) {
            display: none;
        }

        body > div:nth-child(3) > div > div:nth-child(2) > nav > div.hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between > div:nth-child(1) {
            margin-top: 10px;
        }

    </style>
</head>

<body>
    {{-- ----------------------------------------------------------------- --}}


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ASN LARAVEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/asn-cs21" target="_blanck">Linkedin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/ranaahsanansar" target="_blanck">GITHUB</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="msg">
            @if (session()->has('status'))
                <div class="alert alert-success">{{ session('status') }} <a href="{{route('index')}}"><strong> Refresh</strong></a></div>
            @else
                <div>
                    <h1 class="heading">Rana Ahsan Ansar Laravel8 CRUD Project</h1>
                </div>
            @endif

        </div>
    </div>


    {{-- -----------------------Form-------------------------------------------- --}}
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                        <div class="mb-3">
                            <label for="marks" class="form-label">Marks</label>
                            <input type="number" class="form-control" id="marks" name="marks">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">City</th>
                                <th scope="col">Marks</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $stu)
                                <tr>
                                    <th>{{ $stu->id }}</th>
                                    <td>{{ $stu->name }}</td>
                                    <td>{{ $stu->city }}</td>
                                    <td>{{ $stu->marks }}</td>
                                    <td>
                                        <a href="{{ url('/edit' , $stu->id)  }}" class="btn btn-info btn-sm">Edit</a>
                                        <a href="{{ url('/del' , $stu->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $students->links() }}

                </div>
            </div>
        </div>



    {{-- ----------------------------------------------------------------- --}}


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
