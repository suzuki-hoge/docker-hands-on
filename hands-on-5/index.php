<?php
$version = phpversion();
$user = get_current_user();
$hostname = gethostname();

echo "<p>PHP $version をユーザ $user がホスト $hostname で実行しました</p>";
