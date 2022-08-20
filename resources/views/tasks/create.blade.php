<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
  <div class="container mt-4">
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Create Task
    </div>
    <div class="card-body">
      <form name="task-form" id="task-form" method="post" action="{{route('task.store')}}">
       @csrf
       <div class="form-group">
          <label>Admin Name</label>
          <select class="form-select form-control" aria-label="Default select example" name="assigned_by_id" id ="admin">
              <option selected>select</option>
          </select>
        </div>
        <div class="form-group">
          <label >Title</label>
          <input type="text" id="title" name="title" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Description</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
        <div class="form-group">
          <label >Assigned User</label>
          <select class="form-select form-control" aria-label="Default select example" name="assigned_to_id" id="user">
              <option selected>select</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('#admin').select2({
        minimumInputLength: 3,
        ajax: {
            url: '{{ route("api.users.search", "admin") }}',
            dataType: 'json',
        },
    });
    $('#user').select2({
        minimumInputLength: 3,
        ajax: {
            url: '{{ route("api.users.search", "user") }}',
            dataType: 'json',
        },
    });
});
</script>
</body>
</html>