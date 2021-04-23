# Redmine_tbls
[tbls](https://github.com/k1LoW/tbls) を使ってDB定義書を作成して遊ぶ的なリポジトリ。  
Redmine で実験。  


## Redmine のコンテナ起動
```
docker-compose up -d
```

## DB アクセス（MySQL）
```
Username : root
password : redmine
```
※起動までかなり時間がかかる


## tbls のインストール
詳細は[公式サイト](https://github.com/k1LoW/tbls)を。

#### Mac
```
brew install go
go get github.com/k1LoW/tbls
```

#### Win
```
choco install -y golang
choco install -y mingw

go get github.com/k1LoW/tbls
```


## テーブル定義作成
 1. ```.tbls.yml``` を作成
 2. ```tbls doc``` を実行






