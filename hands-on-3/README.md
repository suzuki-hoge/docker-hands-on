# Hands on 3

PHP イメージ ( `tag: hands-on-3:1.0` ) を作成

```
$ pwd
path/to/docker-hands-on/hands-on-3

$ ls
Dockerfile

$ docker image build --tag hands-on-3:1.0 .
=> => naming to docker.io/library/hands-on-3:1.0 ( など )
```

PHP コンテナ ( `image: hands-on-3:1.0` ) を起動

```
$ docker container run hands-on-3:1.0 php -m
pdo_mysql ( など )
```
