<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>All Users</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1>All Users List</h1>
               <table class="table table-bordered table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>View</th>
                </tr>
               @foreach($data as $id=>$hathi)
                    <tr>
                        <td>{{$hathi->id}}</td>
                        <td>{{$hathi->name}}</td>
                        <td>{{$hathi->email}}</td>
                        <td>{{$hathi->age}}</td>
                        <td>{{$hathi->city}}</td>
                        <td> <a href="{{route('view.user', $hathi->id )}}" class="btn btn-danger btn-sm ">View</a></td>
                    </tr>
                    @endforeach
               </table>
      
                </div>
            </div>
        </div>
        
    </body>
</html>


<h1></h1>
