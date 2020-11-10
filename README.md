# Laravel_sample_use_database

1. .envを編集
2. MySQLにDBを作成
3. テーブル作成
- ```$ php artisan make:migration <任意の名前>```
4. マイグレーション
- ```$ php artisan migrate```
5. テーブル構造の変更
- ```$ php artisan make:migration <新しいマイグレーションファイル名> --table=<3番で作ったテーブル名>```
6. マイグレーションファイルの編集
7. マイグレーション
- ```$ php artisan migrate```
8. Seederの準備
- ```$ php artisan make:seeder <シーダー名>```
9. Seederクラスの編集
10. Seederの作成
- ```$ php artisan db:seed --class=<Seederのクラス名>```
11. DatabaseSeederを編集
12. 11をやると10のコマンドが以下だけになる
- ```$php artisan db:seed```

### その他
- テーブルリフレッシュ
```$ php artisan db:seed --class=UserEntrySeeder```
- テーブルリセット
```$ php artisan migrate:reset```
- マイグレーション状態の確認
```$ php artisan migrate:status```
- マイグレーション情報を含めて全て削除
```$ php artisan db:wipe```
