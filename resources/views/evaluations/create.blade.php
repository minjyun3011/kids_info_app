<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>evaluation create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href="{{ route('evaluations.index') }}">戻る</a>
    <h1>新規登録</h1>
    <form action="{{ route('evaluations.store') }}" method="post">
        @csrf
        <p>
            <label for="kid_name">子供の名前</label><br>
            <input type="text" name="kid_name" id="kid_name">
        </p>
        <p>
            <label for="category">カテゴリ</label><br>
            <input type="text" name="category" id="category">
        </p>
        <p>
            <label for="title">項目名</label><br>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="evaluation">評価</label><br>
            <input type="string" name="evaluation" id="evaluation">
        </p>
        <p>
            <label for="detail">本文</label><br>
            <textarea name="detail" id="detail"></textarea>
        </p>
        <p>
            <label for="teacher">担当</label><br>
            <input type="text" name="teacher" id="teacher">
        </p>

        <input type="submit" value="登録">
    </form>
</body>

</html>
