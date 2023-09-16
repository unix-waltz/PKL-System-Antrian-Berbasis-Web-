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
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form method="post" action="{{route('registerAuth')}}">
                @csrf
                @method('post')
                <div class="form-outline mb-4">
                    <input type="text" id="form1Example13" name="name" class="form-control form-control-lg" required>
                    <label class="form-label" for="form1Example13">Name</label>
                  </div>
                <div class="form-outline mb-4">
                  <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" required>
                  <label class="form-label" for="form1Example13">Email address</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example23" name="password" class="form-control form-control-lg" required>
                  <label class="form-label" for="form1Example23">Password</label>
                </div>
      
             <input type="hidden" name="role" value="admin">
      
                <!-- Submit button -->
                <button type="submit" class="btn btn-dark btn-lg btn-block">Masuk</button>
      
              </form>
            </div>
          </div>
        </div>
      </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>