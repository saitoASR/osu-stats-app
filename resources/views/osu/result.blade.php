<!DOCTYPE html>
<html>

<head>
    <title>検索結果</title>
    <link rel="stylesheet" href="{{ asset('css/result.css') }}">
</head>

<body>
    <h1>{{ $user['username'] }} の情報</h1>
    <div class="padding">
    <img src="{{ $user['avatar_url'] }}" alt="プロフィール画像"><br>
        <p>ランク: #{{ $user['statistics']['global_rank'] ?? 'N/A' }}</p>
        <p>pp: {{ $user['statistics']['pp'] }}</p>
        <p>レベル: {{ $user['statistics']['level']['current'] }}</p>
        <p>国: {{ $user['country']['name'] }}</p>
    </div>
    <a href="/">戻る</a>
</body>

</html>
