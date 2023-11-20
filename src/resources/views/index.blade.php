<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{asset(/css/sanitize.css)}}" />
    <link rel="stylesheet" href="{{asset(/css/index.css)}}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Contact Form
            </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__labal--item">お名前</span>
                        <span class="form__label--requested">必須</span>
                    </div>
                    <div class="form__group-content">
                        <input type="text" name="name" placeholder="テスト太郎">
                    </div>
                    <div form__error>
                        //後で修正
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--requsted">必須</span>
                    </div>
                    <div class="form__group-content">
                        <input type="email" name="email" placeholder="test@example.com">
                    </div>
                    <div form__error>
                        //後で修正
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--requsted">必須</span>
                    </div>
                    <div class="form__group-content">
                        <input type="tel" name="tel" placeholder="09012345678">
                    </div>
                    <div form__error>
                        //後で修正
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                    </div>
                    <div class="form__group-content">
                        <textarea name="content" placeholder="資料をいただきたいです">
                    </div>
                </div>
                <div class="form__btn">
                    <button name="form__btn-submit" type="submit" >送信</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>