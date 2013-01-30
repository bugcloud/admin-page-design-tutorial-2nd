<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>Admin Page Template</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div class="header-inner">
        <div class="navbar">
          <div class="navbar-inner">
        <h1>
          <a href="#" class="brand">Admin Page Template</a>
        </h1>
          <!-- /.navbar-inner --></div>
        <!-- /.navbar --></div>
      <!-- /.header-inner --></div>
    </header>

    <div id="container-wrapper">
      <div class="container">
        <form class="form-signin" method="POST" action="index.php">
          <h2 class="form-signin-heading">ログイン</h2>
          <input type="text" name="user_name" class="input-block-level" placeholder="ログイン名">
          <input type="password" name="user_password" class="input-block-level" placeholder="パスワード">
          <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        <!-- /.form-signin --></form>
      <!-- /.container --></div>
    <!-- /#container-wrapper --></div>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
