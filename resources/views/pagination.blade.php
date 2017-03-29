
<!DOCTYPE html>
<html>
  <head>
    <title> pigination</title>
    <style type="text/css">
       html,body {
        width:700px;
        margin: 0 auto;
      } 
        .pagination li {
         display:  inline ;
          float: left;
          padding :10px;
          background :#ddd;
        }
     .pagination li a {
  background :#ddd;
       padding-right: 10px;
       padding-left: 10px;
       text-decoration: none ;
      }
      li.active span {
         background :#ccc;
       padding-right: 10px;
       padding-left: 10px;
       text-decoration: none ;
      }
      li.disaply span {
        
         background :gray;
       padding-right: 10px;
       padding-left: 10px;
       text-decoration: none ;
      }
      table {
        border-collapse :collapse ;
      }
      table tr > td , tr >th {
        border:1px solid #ddd;
        padding :5px;
      }
       
    </style>
     
  </head>
  <body>
 
      <h1>liste utilisateur </h1>
      <table>
        <tr>
                    
          <th>ID</th>
          <th>name</th>
          <th>lastname</th>
          <th>email</th>
          <th>birthday</th>
          <th>role</th>
          <th>created_at</th>
          <th>update_at</th>
                   
                   
        </tr>
      
                       @foreach($users as $key =>$u)    
                <tr> 
                  <td>{{ $u -> id}}</td>
                  <td>{{ $u -> name}}</td>
                  <td>{{ $u -> lastname}}</td>
                  <td>{{ $u -> email}}</td>
                  <td>{{ $u -> birthday}}</td>
                  <td>{{ $u -> role}}</td>
                  <td>{{ $u -> created_at}}</td>
                  <td>{{ $u -> updated_at}}</td>
        </tr>
                    @endforeach
    </table>
    <h1>{{$users->currentPage()}} </h1>
    <hr>
    {{$users ->links() }}
  </body>
</html>