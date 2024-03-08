<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Bootstrap demo</title>
</head>

<body style="background-color: #713DA6">
    <div class="container-fluid d-flex justify-content-center min-vh-100 align-items-center">
        <div class="container d-flex justify-content-center">
            <div class="card card-login" style="width: 40rem; height: 500px; background-color: #431B76">
                <a href="/" class="text-light my-2 d-flex justify-content-start">
                    <h3 class="bi bi-arrow-circle-fill ms-3 mt-3"></h3>
                </a>
                <h3 class="card-title text-center text-warning fw-bold mt-3 ">LOGIN</h3>
                <div class="card-body">
                    <div class="container">
                        <form action="{{ route('login') }}" method="post">
                            @method('post')
                            @csrf
                            <div class="mb-3 my-3 text-light semi-bold" style="height:100px">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                       name="email" placeholder="name@example.com" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 my-3 text-light semi-bold" style="height:100px">
                                <label for="password" class="form-label">Password</label>
                                 <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="password">
                                @error('password')
                             <div class="invalid-feedback">
                                {{ $message }}
                             </div>
                                 @enderror
                            </div>

                            <div class="d-flex justify-content-center mt-5">
                               <button type="submit" class="btn btn-danger">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
