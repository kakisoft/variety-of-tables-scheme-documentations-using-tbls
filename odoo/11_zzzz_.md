

https://github.com/bitnami/bitnami-docker-postgresql/issues/255
```
    environment:
      POSTGRESQL_PASSWORD: password123
      POSTGRESQL_ENABLE_TLS: 'yes'
      POSTGRESQL_TLS_CERT_FILE: /opt/bitnami/postgresql/certs/server.crt
      POSTGRESQL_TLS_KEY_FILE: /opt/bitnami/postgresql/certs/server.key
      POSTGRESQL_TLS_CA_FILE: /opt/bitnami/postgresql/certs/ca.crt
```
接続
```
dial tcp [::1]:5432: connect: connection refused
```

というか
http://localhost:8069/
が表示されない

___________________________________________________________________________


### issue
https://github.com/k1LoW/tbls/issues/300
```
# DSN (Database Source Name) to connect database
dsn: postgres://dbuser:dbpass@localhost:5432/dbname?sslmode=disable
```
```
dsn: pg://postgres:pgpass@localhost:55432/testdb?sslmode=disable

```


