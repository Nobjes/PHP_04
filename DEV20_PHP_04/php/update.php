<?php

//1. POSTデータ取得
$id           = $_POST["id"];
$name = $_POST["name"];
$first = $_POST["first"];
$first_place = $_POST["first_place"];
$first_com = $_POST["first_com"];
$img_first = $_FILES["img_first"]["name"];
$second = $_POST["second"];
$second_place = $_POST["second_place"];
$second_com = $_POST["second_com"];
$img_second = $_FILES["img_second"]["name"];
$third = $_POST["third"];
$third_place = $_POST["third_place"];
$third_com = $_POST["third_com"];
$img_third = $_FILES["img_third"]["name"];
$fourth = $_POST["fourth"];
$fourth_place = $_POST["fourth_place"];
$fourth_com = $_POST["fourth_com"];
$img_fourth = $_FILES["img_fourth"]["name"];
$fifth = $_POST["fifth"];
$fifth_place = $_POST["fifth_place"];
$fifth_com = $_POST["fifth_com"];
$img_fifth = $_FILES["img_fifth"]["name"];



//2.  DB接続funcs.phpを呼び出す
include("funcs.php");


//3. UPDATE table SET.....;で更新
$sql ='UPDATE ranking_table SET name=:name, 
first=:first, first_place=:first_place, first_com=:first_com, img_first=:img_first, 
second=:second, second_place=:second_place, second_com=:second_com, img_second=:img_second,
third=:third, third_place=:third_place, third_com=:third_com, img_third=:img_third,
fourth=:fourth, fourth_place=:fourth_place, fourth_com=:fourth_com, img_fourth=:img_fourth,
fifth=:fifth, fifth_place=:fifth_place, fifth_com=:fifth_com, img_fifth=:img_fifth WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':first', $first, PDO::PARAM_STR);
$stmt->bindValue(':first_place', $first_place, PDO::PARAM_STR);
$stmt->bindValue(':first_com', $first_com, PDO::PARAM_STR);
$stmt->bindValue(':img_first', $img_first, PDO::PARAM_STR);
$stmt->bindValue(':second', $second, PDO::PARAM_STR);
$stmt->bindValue(':second_place', $second_place, PDO::PARAM_STR);
$stmt->bindValue(':second_com', $second_com, PDO::PARAM_STR);
$stmt->bindValue(':img_second', $img_second, PDO::PARAM_STR);
$stmt->bindValue(':third', $third, PDO::PARAM_STR);
$stmt->bindValue(':third_place', $third_place, PDO::PARAM_STR);
$stmt->bindValue(':third_com', $third_com, PDO::PARAM_STR);
$stmt->bindValue(':img_third', $img_third, PDO::PARAM_STR);
$stmt->bindValue(':fourth', $fourth, PDO::PARAM_STR);
$stmt->bindValue(':fourth_place', $fourth_place, PDO::PARAM_STR);
$stmt->bindValue(':fourth_com', $fourth_com, PDO::PARAM_STR);
$stmt->bindValue(':img_fourth', $img_fourth, PDO::PARAM_STR);
$stmt->bindValue(':fifth', $fifth, PDO::PARAM_STR);
$stmt->bindValue(':fifth_place', $fifth_place, PDO::PARAM_STR);
$stmt->bindValue(':fifth_com', $fifth_com, PDO::PARAM_STR);
$stmt->bindValue(':img_fifth', $img_fifth, PDO::PARAM_STR);
$stmt->bindValue(':id',           $id,           PDO::PARAM_INT); 
$status = $stmt->execute();

// /４．データ登録処理後
$view = "";
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    header("Location: select.php");
    exit;
}

?>


