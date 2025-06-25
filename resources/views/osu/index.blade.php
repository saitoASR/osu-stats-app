<!DOCTYPE html>
<html>
<head>
    <title>osu! ユーザー検索</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <h1>osu!ユーザーを検索</h1>
    <form action="{{ route('osu.search') }}" method="POST">
        @csrf
        <input type="text" name="username" placeholder="ユーザー名を入力" required>
        <button type="submit">検索</button>
    </form>
</body>
</html>
