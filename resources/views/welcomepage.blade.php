<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
  <br><br><br>
  <form action="{{route('search')}}" method="GET">
<div class="input-group">
  <div class="form-outline">
    <input type="search" id="form1" name="search"class="form-control" />
    <label class="form-label" for="form1">Search</label>
  </div>
  
   
  </input>
  <input type="submit" class="btn btn-primary">
</div>
</form>
    <h1>hello user</h1>
    <a href="logout">click to logout</a>
    <table class="table">
  <thead class="thead-dark">
    <tr>

      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col">Gender</th>
      <th scope="col">Subject</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>



    </tr>
  </thead>
  <tbody>
    
    @foreach($user as $data)

    
    <tr>
   
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->date}}</td>
      <td>{{$data->gender}}</td>
      <td>{{$data->subject}}</td>
      <td><a href="{{route('delete',[$data->id])}}" class="btn btn-danger">Delete</a></td>
      <td><a href="{{route('edit',[$data->id])}}" class="btn btn-primary">Edit</a></td>
</td> 
    </tr>
   
  </tbody>
    
    @endforeach
</table>
</body>
</html>