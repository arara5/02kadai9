<?php
session_start();

// //1. データ取得
// $id = $_GET["id"];

// //２．データ登録SQL作成
// include "funcs1.php";
// $pdo = db_con();
// $stmt = $pdo->prepare("SELECT * FROM gs_an_table WHERE id=:id");
// $stmt->bindValue(":id", $id, PDO::PARAM_INT);
// $status = $stmt->execute();

// //３．データ表示
// $view = "";
// if ($status == false) {
//     sqlError($stmt);
// } else {
//     $row = $stmt->fetch();
// }

// if($_SESSION["kanri_flg"] == "1"){
//  $readonly = "";
// }else {
//  $readonly =" readonly";
// }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
<nav class="navbar navbar-default">
  <?php include "menu.php"; ?>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert1.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
    <label>名前：<input type="text" name="name" ></label><br>
     <label>Email：<input type="text" name="email" ></label><br>
     <label>年齢：<input type="text" name="age" ></label><br>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="hidden" name="id" >
     <?php if($_SESSION["kanri_flg"]=="1"){ ?>
     <input type="submit" value="送信">
     <?php } ?>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
