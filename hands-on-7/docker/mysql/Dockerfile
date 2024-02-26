FROM mysql:8.2.0

ENV MYSQL_ROOT_PASSWORD=secret
ENV MYSQL_USER=app
ENV MYSQL_PASSWORD=pass1234
ENV MYSQL_DATABASE=sample
ENV TZ=Asia/Tokyo

COPY ./init.sql /docker-entrypoint-initdb.d/init.sql

