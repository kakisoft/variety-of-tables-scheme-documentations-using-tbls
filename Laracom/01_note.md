# Laracom

## Official Page
https://laracom.net/


## demo
https://shop.laracom.net/


## GitHub
https://github.com/jsdecena/laracom

```
RENAME project/.env.example to .env
RUN docker-compose up -d
RUN docker exec -it app bash, then inside the container:
composer install
php artisan migrate --seed
chmod -R 777 storage bootstrap/cache
RUN npm install && npm run prod OR if you are still doing development
RUN npm install && npm run dev
OPEN http://localhost:8000
```


## 起動・終了
```
docker-compose up -d
docker-compose down
```

## 終了時にコンテナを削除
```
docker-compose down --rmi all
docker-compose down --rmi all --volumes
```

## テーブル定義作成
 1. ```.tbls.yml``` を作成
 2. ```tbls doc``` を実行

