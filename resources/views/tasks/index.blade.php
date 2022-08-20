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
      Tasks
    </div>
    <div class="col">
    <a href="{{route('task.create')}}" class="link-primary"> Create Task</a>
     
    </div>
  </div>
    </div>
    <div class="card-body">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Assigned name</th>
      <th scope="col">Admin name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tasks as $task)
    <tr>
      <th>{{$task->title}}</th>
      <td>{{$task->description}}</td>
      <td>{{$task->user->name}}</td>
      <td>{{$task->admin->name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $tasks->links() }}
    </div>
  </div>
</div>  
</body>
</html>