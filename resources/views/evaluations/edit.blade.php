<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>evaluation edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href="{{ route('evaluations.show', $eva) }}">戻る</a>
    <h1>更新</h1>
    <!-- 更新先はmemosのidにしないと増える sail artisan rote:listで確認① -->
    <form action="{{ route('evaluations.update', $eva) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="kid_name">子どもの名前</label><br>
            <input type="text" name="kid_name" id="kid_name" value="{{ $eva->kid_name }}">
        </p>
        <p>
            <label for="category">カテゴリ</label><br>
            <input type="text" name="category" id="category" value="{{ $eva->category }}">
        </p>
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ $eva->title }}">
        </p>
        <p>
            <label for="evaluation">評価</label><br>
            <input type="text" name="evaluation" id="evaluation" value="{{ $eva->evaluation }}">
        </p>
        <p>
            <label for="detail">詳細</label><br>
            <textarea name="detail" class="detail" id="detail">{{ $eva->detail }}</textarea>
        </p>
        <p>
            <label for="teacher">担当</label><br>
            <input type="text" name="teacher" id="teacher" value="{{ $eva->teacher }}">
        </p>

        <input type="submit" value="更新">
    </form>
</body>

</html>
