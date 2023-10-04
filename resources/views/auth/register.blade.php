<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <form method="post" action="{{ route('registerAuth') }}">
                        @csrf
                        @method('post')
                        <div class="form-outline mb-4">
                            <input type="text" id="form1Example13" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}" requiLoket A>
                            <label class="form-label" for="form1Example13">Name</label>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-outline mb-4">
                            <input type="email" id="form1Example13" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                            <label class="form-label" for="form1Example13">Email address</label>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline ">
                            <input type="password" id="form1Example23" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required>
                            <label class="form-label" for="form1Example23">Password</label>
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <input type="hidden" name="role" value="admin">
                          <div class="mb-4">
                            <label class="form-label" for="form-select"></label>
                              <select class="form-select" name="loket">
                                  <option selected>Pilih Loket</option>
                                  <option value="1">Loket A</option>
                                  <option value="2">Loket B</option>
                                  <option value="3">Loket C</option>
                                  <option value="4">Loket D</option>
                                  <option value="5">Loket E</option>
                                  <option value="6">Loket F</option>
                              </select>
                          </div>
                      
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-dark btn-lg btn-block">Daftar</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
