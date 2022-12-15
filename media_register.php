<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">メディア一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="journalist_select.php">記者一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="journalist_register.php">記者登録</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron" style = "padding: 30px;">
            <fieldset>
                <legend>メディア登録</legend>   
                <label>メディア種別：<select name="media_category">
                    <option value="">--選択してください--</option>
                    <option value="paper_national">新聞(全国紙)</option>
                    <option value="paper_block">新聞(ブロック紙)</option>
                    <option value="paper_regional">新聞(地方紙)</option>
                    <option value="paper_economical">新聞(経済紙・産業情報紙)</option>
                    <option value="paper_others">新聞(その他)</option>
                    <option value="magazine">雑誌</option>
                    <option value="web">Webメディア</option>
                    <option value="tv">TV</option>
                    <option value="radio">ラジオ</option>
                    <option value="others">その他</option>
                </select></label><br>

                <label>媒体名：<input type="text" name="media_name"></label><br>
                <label>媒体社名：<input type="text" name="media_company_name"></label><br>
                <p style="font-size: 13px; color: #6F6F6F;">※正式名称で登録のこと。株式会社含む</p>
                <input type="submit" value="登録">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>
