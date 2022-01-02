
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
    <title>Register - Yuva Sena Mock Exam</title>
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
    <link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="assets/img/yuva-sena-logo.png" alt="" height="50" />
        </a>
        <div class="flex">
          <!-- <a class="btn btn-outline-primary me-1" href="/login">Login</a> -->
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">
                Register
              </h5>
              @if($errors != NULL)
                  <div class="row">
                      <ul>
                          @foreach($errors->all() as $error)
                              <li><h5 style="color: red">{{$error}}</h5></li>
                          @endforeach
                      </ul>
                  </div>
              @endif
              <form action="{{route('student-register' )}}" method="post">
              @csrf
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                      <input
                        type="text"
                        id="firstName"
                        class="form-control"
                        required
                        placeholder="Jhon"
                        name="first_name"
                        
                      />
                      <label for="firstName">First Name</label>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                      <input
                        type="text"
                        class="form-control"
                        required
                        id="lastName"
                        name="last_name"
                        placeholder="Doe"
                        
                      />
                      <label for="lastName">Last Name</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                      <input
                        type="text"
                        id="phone_no"
                        class="form-control"
                        required
                        placeholder="Jhon"
                        name="phone_no"
                        
                      />
                      <label for="phone_no">Phone Number</label>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                      <input
                        type="email"
                        class="form-control"
                        required
                        id="email"
                        placeholder="Doe"
                        name="email"
                        
                      />
                      <label for="email">Email</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                      <input
                        type="password"
                        class="form-control"
                        required
                        id="password"
                        name="password"
                        required
                      />
                      <label for="password">Password</label>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="form-floating mb-3">
                      <input
                        type="password"
                        class="form-control"
                        required
                        id="confirm_password"
                        name="password_confirmation"
                        required
                      />
                      <label for="password_confirmation">Confirm Password</label>
                    </div>
                  </div>
                </div>
                <div class="form-floating mb-3">
                <input type="date" name="dob" class="form-control"
                required >
                <label for="dob">Date Of Birth</label>
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    required
                    id="schoolName"
                    placeholder="School Name"
                    
                  />
                  <label for="schoolName">School Name</label>
                </div>
                <div class="mb-3">
                  <label for="disctric" class="form-label">Select Disctric</label>

                  <select name="district_id" id="district_id" class="form-control selectpicker" >
                      <option value="">Select</option>
                      @foreach($districts as $key => $value)
                      <option value="{{$key}}">{{$value}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="vidhansabha" class="form-label"
                    >Select Vidhansabha</label
                  >

                  <select name="vidhansabha_id" id="vidhansabha_id" class="form-control selectpicker" >
                      <option value="">Select</option>
                      @foreach($vidhansabha as $key => $value)
                      <option value="{{$key}}">{{$value}}</option>
                      @endforeach
                  </select>
                </div>
                <div class="mb-3">
                  <label for="taluka" class="form-label">Select Taluka</label>

                  <select name="taluka_id" id="taluka_id" class="form-control selectpicker" >
                      <option value="">Select</option>
                      @foreach($taluka as $key => $value)
                      <option value="{{$key}}">{{$value}}</option>
                      @endforeach
                  </select>
                </div>
                <label for="taluka" class="form-label">Address</label>
                <div class="form-floating mb-1">
                  <input
                    type="text"
                    class="form-control"
                    required
                    id="addressLine1"
                    placeholder="Address Line 1"
                    name="address_line_1"
                    
                  />
                  <label for="addressLine1">Address Line 1</label>
                </div>
                <div class="form-floating mb-1">
                  <input
                    type="text"
                    class="form-control"
                    required
                    id="addressLine2"
                    placeholder="Address Line 2"
                    name="address_line_2"
                  />
                  <label for="addressLine2">Address Line 2</label>
                </div>
                <div class="form-floating mb-3">
                  <input
                    type="text"
                    class="form-control"
                    required
                    id="pincode"
                    placeholder="Pincode"
                    name="pincode"
                    
                  />
                  <label for="addressLine2">Pincode</label>
                </div>

                <div class="mb-3">
                  <label for="taluka" class="form-label">Gender</label>

                  <select name="gender" id="gender" class="form-control selectpicker" >
                      <option value="">Select</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                  </select>
                </div>
                
                <div class="d-grid">
                  <!-- Delete this <a> when connecting with backend -->
                  <button
                    class="btn btn-primary btn-login text-uppercase fw-bold"
                    type="submit">
                    Register
                  </button>
                  <!-- Uncomment this <button> when connecting with backend -->
                  <!-- <button
                    class="btn btn-primary btn-login text-uppercase fw-bold"
                    type="submit"
                  >
                    Register
                  </button> -->
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
    <script src="{{ URL::asset('template/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('template/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
    $(function () {
        $('.datepicker').datepicker({
            format: "dd-mm-yyyy",
            weekStart: 0,
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true, 
            orientation: "auto"
        });
    });
</script>
  </body>
</html>
