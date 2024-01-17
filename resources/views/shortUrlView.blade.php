<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">           
  <table class="table table-striped" border="1px">
    <thead>
      <tr>
        <th>id</th>
        <th>Original Url</th>
        <th>Short Url</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($data))
    @foreach($data as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->original_url }}</td>
            <<td><a href="{{ url($value->short_url) }}">{{ url($value->short_url) }}</a></td>

        </tr>
    @endforeach
@endif

    </tbody>
  </table>
</div>
</body>
</html>
