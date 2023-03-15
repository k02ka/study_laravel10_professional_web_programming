<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=on, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>つぶやきアプリ</title>
    </head>
    <body>
        <h1>つぶやきアプリ</h1>
        <div>
        @foreach($tweets as $tweet)
            <p>{{ $tweet->content }}</p>
        @endforeach
        </div>
    </body>
</html>

