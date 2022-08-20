<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  <div class="card">
    <div class="card-header text-center font-weight-bold">
    <div class="row align-items-start">
    <div class="col">
    Statistics
    </div>
  </div>
    </div>
    <div class="card-body">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">User name</th>
      <th scope="col">Task count</th>
    </tr>
  </thead>
  <tbody>
    @foreach($statistics as $statistic)
    <tr>
      <td>{{$statistic->user->name}}</td>
      <td>{{$statistic->tasks}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
  </div>
</div>  
</body>
</html>