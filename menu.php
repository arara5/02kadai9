<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="bm.php">ブックマーク登録</a>
            
            <a class="navbar-brand" href="select.php">ブックマーク表示</a>
            <?php if($_SESSION["kanri_flg"]=="1"){ ?>
            <a class="navbar-brand" href="user.php">ユーザー登録</a>　　
            <a class="navbar-brand" href="user_select.php">ユーザー表示</a>　
            
        
            
            <?php } ?>
            <a class="navbar-brand" href="logout.php">ログアウト</a>
        </div>
    </div>
</nav>