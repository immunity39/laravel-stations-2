<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta htttp-equiv="X-UA-Compatible" content="ie=edge">
        <title>Movie List</title>
    </head>
    <body>
        <ul>
            @foreach ($movies as $movie)
                <li>ID: {{ $movie->id }}</li>
                <li>映画タイトル: {{ $movie->title }}</li>
                <li>画像URL: {{ $movie->image_url }}</li>
                <li>画像: <img src="{{$movie->image_url}}" alt="img"></li>
                <li>登録日時: {{ $movie->created_at }}</li>
                <li>更新日時: {{ $movie->updated_at }}</li>
            @endforeach
        </ul>  
    </body>
</html>

