<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <a href="" class="navbar-brand">Hello</a> 
     <ul class="navbar-nav ml-auto">
         <li class="nav-item"><a href="" class="nav-link active">Home</a></li>
        <li class="nav-item"><a href="{{route('home.create')}}" class="nav-link active">Insert</a></li>
         </ul> 

         

 </nav> 

 @section('content')
     
 @show
</body>
</html>