# Hands on 6

ネットワークを作成

```
$ docker network create work-network
```

MySQL コンテナ ( `image: hands-on-4:1.0` ) を起動

```
$ docker container run     \
   --network work-network \
   --network-alias db          \
   hands-on-4:1.0
```

PHP コンテナ ( `image: hands-on-3:1.0` ) を起動

```
$ docker container run                          \
   --mount type=bind,source=.,destination=/work \
   --network work-network                       \
   hands-on-3:1.0                               \
   php /work/main.php
id: 1, name: John Doe, email: john@example.com
id: 2, name: Jane Doe, email: jane@example.com
```
