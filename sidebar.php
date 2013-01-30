<?php
$page = basename($_SERVER['SCRIPT_NAME']);
?>

<div id="secondary" class="span3">
  <div class="secondary-content">
    <h2>トップページ・一覧</h2>
    <ul class="nav nav-pills nav-stacked">
      <li<?php if($page === "index.php") echo(" class='active'"); ?>>
        <a href="index.php">トップページ</a>
      </li>
      <li<?php if($page === "list.php") echo(" class='active'"); ?>>
        <a href="list.php">一覧</a>
      </li>
    <!-- /.nav.nav-pills.nav-stacked --></ul>
  <!-- /.secondary-content --></div>

  <div class="secondary-content">
    <h2>フォーム</h2>
    <ul class="nav nav-pills nav-stacked">
      <li<?php if($page === "login.php") echo(" class='active'"); ?>>
        <a href="login.php">ログイン</a>
      </li>
      <li<?php if($page === "new.php") echo(" class='active'"); ?>>
        <a href="new.php">新規登録</a>
      </li>
    <!-- /.nav.nav-pills.nav-stacked --></ul>
  <!-- /.secondary-content --></div>

<!-- /#secondary.span3 --></div>
