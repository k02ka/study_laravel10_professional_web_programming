<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=on, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        <script href="{{ mix('/js/app.js') }}"></script>
        <title>{{ $title ?? 'つぶやきアプリ' }}</title>
    </head>
    <body class="bg-gray-50">
        {{ $slot }}
    </body>
</html>
