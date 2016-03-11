<?php
define('DSN','mysql:host=localhost;dbname=nowall;charset=utf8;');
define('USER','testuser');
define('PASSWORD','9999');
try{
	$dbh=new PDO(DSN, USER, PASSWORD);
    echo '接続に成功しました！' . '<br>';
} catch (PDOException $e) {
    // 接続がうまくいかない場合こちらの処理がなされる
    echo $e->getMessage();
    exit;
}
//SQL文の組み立て
$sql="delete from members where id = 4";
//
$stmt= $dbh->prepare($sql);

$stmt->execute();
echo '消去しました。';

$row=$stmt->fetchAll(PDO::FETCH_ASSOC);


