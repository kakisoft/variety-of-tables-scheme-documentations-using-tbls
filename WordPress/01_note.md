## docker hub : WordPress image
https://hub.docker.com/_/wordpress  

docker-compose.yml は、公式記載の内容から、少し修正しています。  

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