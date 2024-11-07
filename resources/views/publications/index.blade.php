<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicacoes</title>
</head>
<body>
    @foreach ($publications as $publication)
        <div>
            <h2>{{$publication->title}}</h2>
            <p>{{$publication->description}}</p>
            <img src="{{asset("storage/uploads/$publication->file")}}" alt="{{$publication->title}}">
            <p>Categoria: {{$publication->category->name}}</p>
        </div>    
    @endforeach 
</body>
</html>