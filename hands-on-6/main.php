<?php
// データベースに接続
$dsn = 'mysql:host=db;port=3306;dbname=sample';
$username = 'app';
$password = 'pass1234';

try {
    $pdo = new PDO($dsn, $username, $password);
    // customer テーブルの中身を取得
    $statement = $pdo->query('select * from customer');
    $statement->execute();
    while ($row = $statement->fetch()) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        echo "id: $id, name: $name, email: $email" . PHP_EOL;
    }
    // 切断
    $pdo = null;
} catch (PDOException $e) {
    $code = $e->getCode();
    $message = $e->getMessage();

    if ($code === 0) {
        echo "<p>MySQL ドライバがインストールされていない可能性があります<br>PHP コンテナは hands-on-3:1.0 から起動していますか？<br>message: $message</p>";
    }
    if ($code === 2002) {
        echo "<p>MySQL コンテナが起動していない可能性があります<br>MySQL コンテナは起動していますか？<br>message: $message</p>";
    }
    if ($code === '42S02') {
        echo "<p>テーブルが存在しない可能性があります<br>MySQL コンテナは hands-on-4:1.0 から起動していますか？<br>message: $message</p>";
    }
}

