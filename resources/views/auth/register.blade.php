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
            <div class="card card-register mt-2" style="width: 40rem; height: 760px; background-color: #431B76">
                <a href="/" class="text-light my-2 d-flex justify-content-start">
                    <h3 class="bi bi-arrow-circle-fill ms-3 mt-3"></h3>
                </a>
                <h3 class="card-title text-center text-warning fw-bold">Register</h3>
                <div class="card-body">
                    <div class="container">
                        <form action="{{ route('register') }}" method="POST">
                            @method("POST")
                            @csrf
                            <div class="text-light fw-bold" style="height: 100px">
                                <label for="name" class="form-label">Username</label>
                                <input type="text" class="form-control @error('name') is-invalid" @enderror id="name"
                                    name="name" placeholder="your name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="text-light fw-bold" style="height: 100px">
                                <label for="email" class="form-label">Email</label>
                                <input type="email"
                                    class="form-control @error('email') is-invalid" @enderror id="email" name="email"
                                    placeholder="name@example" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="text-light fw-bold" style="height: 100px">
                                <label for="telepon" class="form-label">Telepon</label>
                                <input type="telepon"
                                    class="form-control @error('telepon') is-invalid" @enderror id="telepon" name="telepon"
                                    placeholder="name@example" value="{{ old('telepon') }}">
                                @error('telepon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="text-light fw-bold" style="height: 100px">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="alamat"
                                    class="form-control @error('alamat') is-invalid" @enderror id="alamat" name="alamat"
                                    placeholder="name@example" value="{{ old('alamat') }}">
                                @error('telepon')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class=" text-light fw-bold" style="height: 100px">
                                <label for="password" class="form-label">Password</label>
                                <input type="password"
                                    class="form-control @error('password') is-invalid" @enderror id="password"
                                    name="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                            <div class="text-light fw-bold" style="height: 100px">
                                <label for="cofirm-password" class="form-label">confirm npassword</label>
                                <input type="password"
                                    class="form-control  @error('confirm-password') is-invalid" @enderror id="confirm-password"
                                    name="password_confirmation" placeholder="confirm-password">
                                    @error('confirm-password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                            <div class="mb-5 d-flex justify-content-center">
                                <button type="submit" class="btn btn-danger">REGIST</button>
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
