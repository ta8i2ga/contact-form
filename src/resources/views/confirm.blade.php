<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{asset(css/sanitize.css)}}">
    <link rel="stylesheet" href="{{asset(css/confirm.css)}}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">Contact Form</a>
        </div>
    </header>
    <div class="content-heading">
        <h2>お問い合わせ内容</h2>
    </div>
    <form class="form">
        <div class="form-content">
            <table class="confirm-table">
                <tr>
                    <th>お名前</th>
                    <td>
                        <input type="text" name="name" value="サンプルテキスト">
                    </td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>
                        <input type="email" name="email" value="サンプルテキスト">
                    </td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td>
                        <input type="tel" name="tel" value="サンプルテキスト">
                    </td>
                </tr>
                <tr>
                    <th>お問い合わせ内容</th>
                    <td>
                        <input type="text" name="content" value="サンプルテキスト">
                    </td>
                </tr>
            </table>
        </div>
    </form>
    <div class="form__btn">
        <button class="form__btn-submit" type="submit">送信</button>
    </div>
</body>

</html>