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
              Center Name
            </td>
            
            <td>
              {{$student->taluka->center_name}}
            </td>
          </tr>
          <tr>
            <td>
              Center Code
            </td>
            
            <td>
              {{$student->taluka->center_code}}
            </td>
          </tr>
          <tr>
            <td>
              Hall Ticket
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