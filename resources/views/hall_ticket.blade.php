<!DOCTYPE html>
<html>
<head>
<style type="text/css">  
    table{
        width: 100%;
        border-collapse: collapse;
    } 
    table td, table th{  
        border:1px solid black;
        text-align: center;
    } 
    table tr, table td{
        padding: 5px;
    } 

</style>  
</head>
<body>
  <div class="container">  

    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="assets/img/yuva-sena-logo.png" alt="" height="50" />
        </a>
        <a class="navbar-brand" href="/">
          <img src="assets/img/yuva-skill-logo.png" alt="" height="50" />
        </a>
      </div>
    </nav>
    <table class="table table-bordered" >
        
        <tbody>
          <tr>
            <th colspan="2" class="text-success">
              <h4>Hall Ticket</h4>
            </th>
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
              School Name
            </td>
            
            <td>
              {{$student->school_name}}
            </td>
          </tr>
          <tr>
            <td>
              District
            </td>
            
            <td>
            @if(isset($student) && isset($student->district) && isset($student->district->name))
                {{$student->district->name}}
              @else
                NA
              @endif
            </td>
          </tr>
          <tr>
            <td>
              Vidhansabha
            </td>
            
            <td>
            @if(isset($student) && isset($student->vidhansabha) && isset($student->vidhansabha->name))
                {{$student->vidhansabha->name}}
              @else
                NA
              @endif
            </td>
          </tr>
          <tr>
            <td>
              Taluka
            </td>
            
            <td>
            @if(isset($student) && isset($student->taluka) && isset($student->taluka->name))
                {{$student->taluka->name}}
              @else
                NA
              @endif
            </td>
          </tr>
          <tr>
            <td>
              Address
            </td>
            
            <td>
            @if(isset($student) && isset($student->address)))
                {{$student->address}}
              @else
                NA
              @endif
            </td>
          </tr>
          <tr>
            <td>
              Pincode
            </td>
            
            <td>
            @if(isset($student) && isset($student->district) && isset($student->district->name))
                {{$student->district->name}}
              @else
                NA
              @endif
            </td>
          </tr>
          <tr>
            <td>
              Date of Birth
            </td>
            
            <td>
            @if(isset($student) && isset($student->date))
                {{$student->date}}
              @else
                NA
              @endif
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
              Hall Ticket Number
            </td>
            
            <td>
              {{$student->hall_ticket_number}}
            </td>
          </tr>
          
        </tbody>

      </table>
  </div>
</body>
</html>