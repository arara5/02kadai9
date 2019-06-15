<?php
session_start();

$id = $_GET["id"];

include "funcs1.php";
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} 
$row = $stmt->fetch();

if($_SESSION["kanri_flg"] == "1"){
  $readonly = "";
 }else {
  $readonly =" readonly";
 }



//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
<?php include "menu.php"; ?>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>更新：書籍ブックマーク</legend>
     <label>書籍名：<input type="text" name="bookname" value="<?= $row["bookname"]?>"<?=$readonly?>></label><br>
     <label>書籍URL：<input type="text" name="bookurl" value="<?= $row["bookurl"]?>"<?=$readonly?>></label><br>
     <label><textArea name="bookcomment" rows="4" cols="40"<?=$readonly?>><?= $row["bookcomment"]?></textArea></label><br>

    <input type="hidden" name="id" value="<?=$row["id"]?>">
    <?php if($_SESSION["kanri_flg"]=="1"){ ?>
     <input type="submit" value="更新">
     <?php } ?>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
