<!DOCTYPE html>
<html>

<head>
    <title>名言</title>
    <meta charset="utf-8">

</head>

<body>
    <h1>名言AI</h1>

    <form action="/quote/result" method="GET">
        <textarea name="message" id="message" value="{$message}" placeholder="メッセージを入力してください"></textarea>
        <button type="submit">送信</button>
    </form>

    <p>{{ $quote }}</p>


    <script>
        window.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);
            //URLからパラメータを取得
            const message = urlParams.get('message');
            //name=messageのテキストボックスのvalue値にパラメータの値セット
            document.querySelector('textarea[name="message"]').value = message;
        });
    </script>
</body>

</html>