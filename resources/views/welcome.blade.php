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
  <h2> short Url</h2>
  <form method="POST" action="{{ route('short.url') }}">
    <div class="form-group">
   
    @if(session('success_message'))
    <p>{!! session('success_message')['message'] !!}</p>
@endif

      <label for="original_url">Enter your Url:</label>
      <input type="text" class="form-control" id="original_url" placeholder="Enter your url" name="original_url">
      @error('original_url')
      <span>{{ $message }}</span>
      @enderror
      @csrf
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
  <br>
  <a href="{{ route('getdata') }}" class="btn btn-success">Show Enteris</a>

</div>

</body>
</html>
