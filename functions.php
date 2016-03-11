<?php
function connectDb(){
	try{
		return new PDO(DSN,DB_USER,DB_PASSWORD);       //PDOクラスにconfigで設定した定数を送る？
		                                               //PDOクラスはPHPとデータベースサーバーとの接続をするクラス
	}catch(PDOException $e){                           //tryの実行によって投げられたエラーを受け取る

		echo $e -> getMessage();                       //$eにgetMessageによって得られた値を代入する　（ポインタ、アロー演算子、構造体）
		exit;
	}
}

function h($s){
	return htmlspecialchars($s,ENT_QUOTES,"UTF-8");    //htmlで特殊な意味を持つ文字を変換してhtmlに影響を与えないようにする
}                                                      //ENT_QUOTESが設定されていると、'と”がどっちも変換される
                                                       //<は&lt、>は&gtになる
                                                       //引数は(変換される文字列,ENT_QUOTESなどのフラグ,エンコーディングする文字セット)