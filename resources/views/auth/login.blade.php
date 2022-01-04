

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - Yuva Sena Mock Exam</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@v1.7.2/font/bootstrap-icons.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="/assets/img/yuva-sena-logo.png" alt="" height="50" />
        </a>
        <div class="flex">
          <a class="btn btn-outline-primary me-1" href="/login.html">Login</a>
          <a class="btn btn-primary" href="/register.html">Sign Up</a>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">
                Login
              </h5>
              <form action="{{ url('/login') }}" method="post" role="form">
              {{ csrf_field() }}
                <div class="form-floating mb-3">
                <input
                    type="text"
                    class="form-control"
                    id="email"
                    value="{{ old('email') }}"
                    autocomplete="off"
                    placeholder="Email"
                    name="email"
                    required
                  />
                  <label for="email">email</label>
                  @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
                </div>
                <div class="form-floating mb-3">
                  <input
                   type="password"
                   autocomplete="off" 
                   placeholder="Password" 
                   class="form-control"
                   name="password" 
                   id="password"
                   required
                  />
                  <label for="password">Password</label>
                  @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
                </div>
                <div class="d-grid">
                  <!-- Delete this <a> when connecting with backend -->
                  <button type="submit" class="btn btn-primary btn-login text-uppercase fw-bold">Login</button>
                  <!-- <a
                    
                    href="/registration-success.html"
                  >
                    Login
                  </a> -->
                  <!-- Uncomment this <button> when connecting with backend -->
                  <!-- <button
                    class="btn btn-primary btn-login text-uppercase fw-bold"
                    type="submit"
                  >
                    Login
                  </button> -->
                </div>
                <div class="form-actions">
            <div class="pull-left">
                <label class="rememberme mt-checkbox mt-checkbox-outline">
                    <input type="checkbox" name="remember" /> Remember me
                    <span></span>
                </label>
            </div>
            <div class="pull-right forget-password-block">
            <a href="{{ route('password.request') }}" id="forget-password" class="forget-password">Forgot Password?</a>
            </div>
        </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>