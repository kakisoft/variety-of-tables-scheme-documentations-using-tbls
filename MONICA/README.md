Laravel で色々遊ぶ  
5.5.49


## 起動・終了
```
docker-compose up -d
docker-compose down
```

## コンテナに入る
```
docker-compose exec app bash
```


## 終了時にコンテナを削除
```
docker-compose down --rmi all
docker-compose down --rmi all --volumes
```

_______________________________________________________________________________
_______________________________________________________________________________
_______________________________________________________________________________
# 初回起動時

## composer install
```
composer install
```

## .env を用意
.env.example をコピー。  
必要があれば編集。


## .env のDB設定編集
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=myapp01
DB_USERNAME=user
DB_PASSWORD=password
```


## migrate
```
php artisan migrate
```


## キーを用意
コピーしない場合は、コマンドで作成。
```
php artisan key:generate
```


_______________________________________________________________________________
_______________________________________________________________________________
_______________________________________________________________________________
# プロジェクト作ったり、モデルを追加したり

## Create Project
```
composer create-project --prefer-dist  "laravel/laravel=5.5" my-laravel-app
```

## Rollback
```
php artisan migrate:rollback
```


## Model追加
※Model 名なので、単数で指定！
```
php artisan make:model Models/Post -m
php artisan make:model Models/Comment -m
php artisan make:model Models/Item -m
php artisan make:model Models/Question01RegistrationInformation -m
（編集）
php artisan migrate
```

## Model 編集
テーブル名を指定（しなくてもできるけど、やっといた方が便利）
```
php artisan make:migration add_api_token_1_to_user_table --table=users
（編集）
php artisan migrate
```


## RequestModel追加
```
php artisan make:request PostRequest
php artisan make:request Question01RegistrationInformationRequest
```


## Controller 追加
```
// Laravelベストプラクティスに沿うなら、単数形。
php artisan make:controller PostController
php artisan make:controller CommentController

// web コントローラ
php artisan make:controller Question01Controller


// API コントローラ
php artisan make:controller API/Question01ApiController
```


## シーダ
```
// 作成
php artisan make:seeder UsersTableSeeder
php artisan make:seeder Question01RegistrationInformationTableSeeder


// 実行（前準備だっけ？）
composer dump-autoload

// データ作成（シーダを基にレコードを登録）
php artisan db:seed
php artisan db:seed --class=UsersTableSeeder
php artisan db:seed --class=Question01RegistrationInformationTableSeeder


// リフレッシュ
php artisan migrate:refresh --seed
```

php artisan migrate:fresh

______________________________________________________________________
## テーブル定義作成
 1. ```.tbls.yml``` を作成
 2. ```tbls doc``` を実行
