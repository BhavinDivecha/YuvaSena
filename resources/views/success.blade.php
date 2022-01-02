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
    <title>Yuva Sena Mock Exam</title>
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
    <link href="/css/styles.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="/assets/img/yuva-sena-logo.png" alt="" height="50" />
        </a>
        @auth
          <a class="btn btn-primary w-100 mt-1 mt-md-0 ms-md-1" href="/logout">Logout</a>
        @endauth
      </div>
    </nav>
    <div class="container mt-5">
    <div class="d-flex w-100 align-items-center justify-content-center">
        <img
          src="/assets/img/undraw_done_re_oak4.svg"
          alt="registered"
          height="300"
          class="mb-5"
        />
      </div>
      <table class="table table-bordered">
        <!-- <thead>
          <th>
            
          </th>
          <th>
            
          </th>
        </thead> -->
        <tbody>
          <tr>
            <td colspan="2" class="text-success">
              You are successfully registered. Center shall be communicated shortly.
            </td>
          </tr>
          <tr>
            <td colspan="2" class="text-success">
              Hall Ticket Details
            </td>
          </tr>
          <tr>
            <td>
              Name
            </td>
            
            <td>
              {{$student->first_name}} {{$student->last_name}}
            </td>
          </tr>
          <tr>
            <td>
              Center Name
            </td>
            
            <td>
              @if(isset($student) && isset($student->taluka) && isset($student->taluka->center_name))
                {{$student->taluka->center_name}}
              @else
                NA
              @endif
            </td>
          </tr>
          <tr>
            <td>
              Center Code
            </td>
            
            <td>
              @if(isset($student) && isset($student->taluka) && isset($student->taluka->center_code))
                {{$student->taluka->center_code}}
              @else
                NA
              @endif
            </td>
          </tr>
          <tr>
            <td>
              Hall Ticket
            </td>
            
            <td>
              <a href="/student/hall-ticket/{{$student->id}}">{{$student->hall_ticket_number}}</a>
            </td>
          </tr>
          
        </tbody>

      </table>
    
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
