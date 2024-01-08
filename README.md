# アプリケーション名
お問い合わせフォーム（確認テスト）
## 環境構築
1.git clone リンク
2.docker-compose up -b --build

## 使用技術(実行環境)
・php 7.4.9
・Laravel 8.83.8
・Mysql 8.0.26


1.dicker-compose exec php bash
2.composer install
3..env.exampleファイルから.envを作成し、環境変数を変更
4.php artisan key:generate
5.php artisan migrate

## ER図
作成できておりません

## URL
開発環境：http://localhost/
phpMyadmin : http://localhost:8080
