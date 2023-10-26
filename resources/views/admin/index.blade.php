<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta htttp-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Movie List</title>
    </head>
    <body>
        <ul>
            @foreach ($movies as $movie)
                <li>ID: {{ $movie->id }}</li>
                <li>映画タイトル: {{ $movie->title }}</li>
                <li>画像URL: {{ $movie->image_url }}</li>
                <li>画像: <img src="{{$movie->image_url}}" alt="img"></li>
                <li>公開年: {{ $movie->published_year }}</li>
                <li>説明: {{ $movie->description }}</li>
                <li>上映情報: <?php echo $movie->is_showing ? '上映中' : '上映予定'; ?></li>
                <li>登録日時: {{ $movie->created_at }}</li>
                <li>更新日時: {{ $movie->updated_at }}</li>
            @endforeach
        </ul>
    </body>
</html>
