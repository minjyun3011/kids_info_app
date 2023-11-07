<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>evaluation show</title>
</head>

<body>
    <a href={{ route('evaluations.index') }}>戻る</a>
    <h1>{{ $eva->category }}</h1>
    <h2>{{ $eva->title }} &emsp; {{ $eva->evaluation }}</h2>
<button onclick='location.href="{{ route("evaluations.edit", $eva) }}"'>編集する</button>
</body>

</html>
