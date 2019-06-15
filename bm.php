<!-- <?php
session_start();

//1. データ取得
$id = $_GET["id"];

//２．データ登録SQL作成
include "funcs1.php";
$pdo = db_con();
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    $row = $stmt->fetch();
}

if($_SESSION["kanri_flg"] == "1"){
 $readonly = "";
}else {
 $readonly =" readonly";
}
?> -->

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
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="bm.php">ブックマーク登録</a>
            
            <a class="navbar-brand" href="select.php">ブックマーク表示</a>
            
            <a class="navbar-brand" href="user.php">ユーザー登録</a>　　
            <a class="navbar-brand" href="user_select.php">ユーザー表示</a>　
          
            <a class="navbar-brand" href="logout.php">ログアウト</a>
        </div>
    </div>
</nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>書籍ブックマーク</legend>
     <label>書籍名：<input type="text" name="bookname"></label><br>
     <label>書籍URL：<input type="text" name="bookurl"></label><br>
     <label><textArea name="bookcomment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
