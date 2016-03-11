<?php
require_once('config.php');  
require_once('functions.php');

$dbh=connectDb();        
$sql='select * from tasks where id=":id"';        
$stmt=$dbh->prepare($sql);                                     
$stmt->execute(); 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>編集画面</title>
</head>
<body>
<h2>タスクの編集</h2>
<p>
    <form action="" method="post">
        <input type="text" name="title">
        <input type="submit" value="編集">
    </form>
</p>
</body>
</html>