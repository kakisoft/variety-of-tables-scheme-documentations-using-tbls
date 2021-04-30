## 参考サイト様
https://anopara.net/2017/12/20/docker-compose%E3%81%A7wordpress-mariadb-nginx%E7%92%B0%E5%A2%83%E3%82%92%E6%A7%8B%E7%AF%89%E3%81%99%E3%82%8B/


## ディレクトリを作る
```
mkdir wp
cd wp
mkdir db-data logs nginx wordpress
```

## Nginx設定ファイル
```
vi nginx/wordpress.conf
```
```
server {
    listen 80;
    server_name hoge;
 
    root /var/www/html;
    index index.php;
 
    access_log /var/log/nginx/hoge.log;
    error_log /var/log/nginx/hoge.log;
 
    location / {
        try_files $uri $uri/ /index.php?$args;
    }
 
    location ~ \.php$ {
        try_files $uri =404;
        fastcgi_split_path_info ^(.+\.php)(/.+)$;
        fastcgi_pass wordpress:9000;
        fastcgi_index index.php;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        fastcgi_param PATH_INFO $fastcgi_path_info;
    }
}
```

## docker-compose.yml
```
version: '2.0'
 
services:
    nginx:
        image: nginx
        ports:
            - '8080:80'
        volumes:
            - ./nginx:/etc/nginx/conf.d
            - ./logs/nginx:/var/log/nginx
            - ./wordpress:/var/www/html
        links:
            - wordpress
        restart: always
    mysql:
        image: mariadb 
        ports:
            - '3306:3306'
        volumes:
            - ./db-data:/var/lib/mysql 
        environment:
            - MYSQL_ROOT_PASSWORD=pass
        restart: always
    wordpress:
        image: wordpress:4.9-php7.1-fpm
        ports:
            - '9000:9000'
        volumes:
            - ./wordpress:/var/www/html
        environment:
            WORDPRESS_DB_NAME: wpdb
            WORDPRESS_TABLE_PREFIX: wp_
            WORDPRESS_DB_HOST: mysql
            WORDPRESS_DB_PASSWORD: pass
        links:
            - mysql
        depends_on:
            - mysql
        restart: always
```

## 実行
```
docker-compose up -d
```

## 停止
```
docker-compose stop
```

ログ、Wordpressの構成ファイル、DBのデータはそれぞれlog, wordpress, db-dataに保存される。

____________________________________________________________________________________________
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

____________________________________________________________________________________________
# .tbls.yml

# 接続先として、データベースの種類(`mysql`)、ユーザ名(`dbuser`)、パスワード(`dbpass`)、ホスト名(`localhost`)、ポート(`3306`)、データベース名(`dbname`)を以下のように記載します
# dsn: mysql://dbuser:dbpass@localhost:3306/dbname
dsn: mysql://root:pass@127.0.0.1:3306/mysql

# ドキュメントのディレクトリを指定します
docPath: doc/schema


