<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      @isset($city)
      At {{$city}} now openweathermap.org - {{$breeds}}, weatherapi.com -  {{$weatherapi}}, middle temp -  {{$avg}}
      @endisset
      @isset($notcity)
      {{$notcity}} 
      @endisset
      </div>
    <div class="card-body">
        
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('weather')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">City</label>
          <input type="text" id="title" name="title" class="form-control" required="" placeholder="input city">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>

