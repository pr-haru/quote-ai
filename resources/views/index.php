<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>本日の格言</title>
</head>
<body>
    <h1>あなたの気持ちを入力してください</h1>
    <form action="/app/Http/Controllers/EmotionController.php" method="POST">
        @csrf
        <textarea name="text" rows="4" cols="50"></textarea>
        <button type="submit">ボタン</button>
    </form>

    @if(isset($quote))
        <h2>感情: {{ $sentiment }}</h2>
        <p>格言: {{ $quote }}</p>
    @endif
</body>
</html>