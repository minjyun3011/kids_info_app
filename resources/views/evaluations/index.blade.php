<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>evaluation index</title>
</head>

<body>
    <h1>中山功太君</h1>
    <div class="box" align="right">
    </div>
    担当：佐藤
    <ul>
        @foreach ($evas as $eva)
            <li><a href="{{ route('evaluations.show', $eva) }}">{{ $eva->category }}</a></li>
        @endforeach
    </ul>


</body>

</html>
