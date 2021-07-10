<?php

$id = $_GET["id"];

//1.  DB接続funcs.phpを呼び出す
include("funcs.php");


//２. DELETE table WHERE.....;で更新
$sql ='DELETE FROM ranking_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT); 
$status = $stmt->execute();


// /３．データ登録処理後
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    header("Location: select.php");
    exit;
}

?>