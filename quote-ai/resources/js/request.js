const urlParams = new URLSearchParams(window.location.search);
//URLからパラメータを取得
const message = urlParams.get('message');
//name=messageのテキストボックスのvalue値にパラメータの値セット
document.querySelector('input[name="message"]').value = message;