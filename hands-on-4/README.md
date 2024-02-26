# Hands on 5

MySQL イメージ ( `tag: hands-on-4:1.0` ) を作成

```
$ pwd
path/to/docker-hands-on/hands-on-4

$ ls
Dockerfile

$ docker image build --tag hands-on-4:1.0 .
=> => naming to docker.io/library/hands-on-4:1.0 ( など )
```

MySQL コンテナ ( `image: hands-on-4:1.0` ) を起動

```
$ docker container run hands-on-4:1.0
略
```

MySQL コンテナ ( `container id: 239dab644ac4` ) に接続

```
$ docker container ls
CONTAINER ID   IMAGE            ...中略...   NAMES
239dab644ac4   hands-on-4:1.0   ...中略...   confident_hawking

$ docker container exec \
  --interactive --tty   \
  239dab644ac4          \
  mysql -h localhost -u app -ppass1234 sample

mysql> select * from customer;
略
```
