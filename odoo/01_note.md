## docker hub (ver 12)
https://hub.docker.com/_/odoo  

#### ver 12
```yaml
  ports:
    - "5432:5432"
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
_____________________________________________________________________
# 初期設定
http://localhost:8069  

適当に初期設定をしてみる
```
Database Name : odoo
Email
Password : aaa123bbb456
```
「Create Database」ボタン。  

⇒「odoo」というデータベース名で接続ができるようになる。  


_____________________________________________________________________
## テーブル定義作成
 1. ```.tbls.yml``` を作成
 2. ```tbls doc``` を実行


Windows だと上手く行かず。以下のコマンドにした。  
```
docker pull k1low/tbls:latest
docker run  --rm -v "$PWD\:/work" --net="host" k1low/tbls doc
```
