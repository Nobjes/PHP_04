<?php

//1. GETデータ取得
$id = $_GET["id"];

//2.  DB接続funcs.phpを呼び出す
include("funcs.php");


$sql = "SELECT * FROM ranking_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt ->bindValue(':id', $id, PDO::PARAM_INT); 
$status = $stmt->execute();

// /４．データ登録処理後
$view = "";
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    $row = $stmt -> fetch();
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ランキング更新</title>
  <link rel="stylesheet" href="../css/style.css">
  <style>div{padding:auto;  font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
<div class="top">
  <div class="plate" id="mesiran">
  <h1 class="top_title">メシラン</h1>
  </div>
    <p class="top_word">自分だけのお気に入りのお店に出会ったら、<br>ランキングを更新しよう！</p>
  </div>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<form method="post" action="update.php">
  <div class="ranking">
   <fieldset>
    <legend><h2>ランキング登録</h2></legend>
     <label>ユーザーネーム：<input type="text" size="40" name="name" value="<?=$row["name"]?>"></label><br><br>
     <label>１位：<input type="text" name="first" value="<?=$row["first"]?>"></label>
     <label>　最寄駅：<input type="text" name="first_place" value="<?=$row["first_place"]?>"></label><br>
     <label>　コメント：<input type="text" name="first_com" value="<?=$row["first_com"]?>"></label>
     <label>　画像：<input type="file" name="img_first" accept="img/*"  value="<?=$row['<img src="../img/' . $result["img_first"].'">']?>"></label><br>
     <label>２位：<input type="text" name="second" value="<?=$row["second"]?>"></label>
     <label>　最寄駅：<input type="text" name="second_place" value="<?=$row["second_place"]?>"></label><br>
     <label>　コメント：<input type="text" name="second_com" value="<?=$row["second_com"]?>"></label>
     <label>　画像：<input type="file" name="img_second" accept="img/*"  value="<?=$row['<img src="../img/' . $result["img_second"].'">']?>"></label><br>
     <label>３位：<input type="text" name="third" value="<?=$row["third"]?>"></label>
     <label>　最寄駅：<input type="text" name="third_place" value="<?=$row["third_place"]?>"></label><br>
     <label>　コメント：<input type="text" name="third_com" value="<?=$row["third_com"]?>"></label>
     <label>　画像：<input type="file" name="img_third" accept="img/*"  value="<?=$row['<img src="../img/' . $result["img_third"].'">']?>"></label><br>
     <label>４位：<input type="text" name="fourth" value="<?=$row["fourth"]?>"></label></label>
     <label>　最寄駅：<input type="text" name="fourth_place" value="<?=$row["fourth_place"]?>"></label><br>
     <label>　コメント：<input type="text" name="fourth_com" value="<?=$row["fourth_com"]?>"></label>
     <label>　画像：<input type="file" name="img_fourth" accept="img/*"  value="<?=$row['<img src="../img/' . $result["img_fourth"].'">']?>"></label><br>
     <label>５位：<input type="text" name="fifth" value="<?=$row["fifth"]?>"></label></label>
     <label>　最寄駅：<input type="text" name="fifth_place" value="<?=$row["fifth_place"]?>"></label><br>
     <label>　コメント：<input type="text" name="fifth_com" value="<?=$row["fifth_com"]?>"></label>
     <label>　画像：<input type="file" name="img_fifth" accept="img/*"  value="<?=$row['<img src="../img/' . $result["img_fifth"].'">']?>"></label><br>
     <input type="hidden" name="id" value ="<?=$row["id"]?>">
     <input type="submit" value="更新">
    </fieldset>
  </div>
</form>

</body>
</html>
