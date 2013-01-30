<?php
require_once "Helper.php";
include("head.php");
include("header.php");

?>
    <div id="container-wrapper">
      <div class="container">
        <div class="row">

          <?php include("sidebar.php"); ?>

          <div id="primary" class="span9">
            <div class="primary-inner">
              <h2><i class="icon-plus-sign"></i>ユーザー追加</h2>

              <form class="form-horizontal form-in-primary" method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="POST">

                <div class="control-group">
                  <label class="control-label" for"input-name">名前</label>
                  <div class="controls">
                    <input type="text" id="input-name" name="user_name" class="span6" value="" placeholder="山本　華世" maxlength="255" required>
                    <span class="help-block">
                      <span class="label label-important">＊必須</span>
                      ユーザーの名前を入力してください。
                    </span>
                  <!-- /.controls --></div>
                <!-- /.control-group --></div>

                <div class="control-group">
                  <label class="control-label" for"input-country">国</label>
                  <div class="controls">
                    <select name="user_country" id="input-country">
                      <option value=""></option>
                      <option value="Japan">Japan</option>
                      <option value="U.S.A">U.S.A</option>
                      <option value="U.K">U.k</option>
                      <option value="Germany">Germany</option>
                      <option value="Australia">Australia</option>
                    </select>
                  <!-- /.controls --></div>
                <!-- /.control-group --></div>

                <div class="control-group">
                  <label class="control-label" for"input-date">何かの日時</label>
                  <div class="controls">
                    <input type="text" id="input-date" name="user_date" data-selector="datepicker" class="span2" value="<?php echo(strftime("%Y-%m-%d")); ?>" placeholder="例) 2012/01/02" maxlength="10">
                    <span class="help-block">
                      何かの日付を入力してください。
                    </span>
                  <!-- /.controls --></div>
                <!-- /.control-group --></div>

                <div class="control-group">
                  <label class="control-label" for"input-body">紹介文</label>
                  <div class="controls">
                  <textarea id="input-body" name="post_body" placeholder="山本 華世（やまもと かよ、本名:山本 佳代（読み同じ）、1964年9月2日 - ）は、福岡県出身で同地を拠点に活動するローカルタレント、テレビ司会者、コメンテーター。愛称華世姐（かよねぇ）。「カヨ・システム」の代表を務める。2007年6月、bjリーグ「ライジング福岡」の球団代表に就任。" class="span6" rows="10" required></textarea>
                    <span class="help-block help-block-stand-alone">
                      <span class="label label-important">＊必須</span>
                      ユーザーの紹介文を入力してください。
                    </span>
                  <!-- /.controls --></div>
                <!-- /.control-group --></div>

                <div class="control-group">
                  <label class="control-label" for"input-sex">性別</label>
                  <div class="controls">
                    <label class="radio inline">
                      <input type="radio" id="input-sex-0" name="user_sex" value="0">男性
                    </label>
                    <label class="radio inline">
                      <input type="radio" id="input-sex-1" name="user_sex" value="1">女性
                    </label>
                  <!-- /.controls --></div>
                <!-- /.control-group --></div>

                <div class="control-group">
                  <div class="controls">
                    <button type="button" class="btn" id="btn-confirm">内容を確認</button>
                    <button type="submit" class="btn btn-primary">登録</button>
                  <!-- /.controls --></div>
                <!-- /.control-group --></div>
              </form>
            <!-- /.primary-inner --></div>
          <!-- /#primary.span9 --></div>

        <!-- /.row --></div>
      <!-- /.container --></div>
    <!-- /#container-wrapper --></div>

    <script src="js/basic-form.js"></script>
<?php include("footer.php"); ?>
