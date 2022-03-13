<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container py-2">
<nav class="nav">
  <a class="nav-link active" aria-current="page" href="/">Home</a>
   <a class="nav-link" href="/create">Create an Item</a>
   
</nav>
</div>

    <div class="container">
    @if (session('status'))
    
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
      
        @yield('content')

    </div>
    
</body>
</html>