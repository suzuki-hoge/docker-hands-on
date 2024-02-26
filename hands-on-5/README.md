# Hands on 5

PHP コンテナ ( `image: php:8.2.12` ) を起動

```
$ pwd
path/to/docker-hands-on/hands-on-5

$ ls
index.php

$ docker container run                          \
   --mount type=bind,source=.,destination=/work \
   --publish 8080:80                            \
   php:8.2.12                                   \
   php --server 0.0.0.0:80 --docroot /work
```
