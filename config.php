<?php
define('DSN','mysql:host=localhost;dbname=task_app;charset=utf8;');   //
define('DB_USER','testuser');                                         //定数を設定
define('DB_PASSWORD','9999');                                         //

error_reporting(E_ALL & ~E_NOTICE);                                   //E_NOTICE以外の全てのエラーを表示させる
                                                                      //E_NOTICEは実行時のエラー
																	  //「&」は論理積で「〜」は除外の意味だと思う

