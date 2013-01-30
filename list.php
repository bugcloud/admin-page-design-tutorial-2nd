<?php
require_once "Helper.php";

include("head.php");
include("header.php");

$users = array(
  array("name" => "テスター００１", "sex" => 0, "country" => array("icon" => "Japan.png", "name" => "日本")),
  array("name" => "テスター００２", "sex" => 0, "country" => array("icon" => "U.S.A.png", "name" => "アメリカ")),
  array("name" => "テスター００３", "sex" => 1, "country" => array("icon" => "U.K.png", "name" => "イギリス")),
  array("name" => "テスター００４", "sex" => 1, "country" => array("icon" => "Germany.png", "name" => "ドイツ")),
  array("name" => "テスター００５", "sex" => 1, "country" => array("icon" => "Australia.png", "name" => "オーストラリア"))
);
?>
    <div id="container-wrapper">
      <div class="container">
        <div class="row">

          <?php include("sidebar.php"); ?>

          <div id="primary" class="span9">
            <div class="primary-inner">
              <h2>
                <i class="icon-th-list"></i>ユーザー一覧
                <a href="new.php" class="btn pull-right btn-in-h2">新しいユーザーを追加</a>
              </h2>
              <table class="table table-bordered table-striped table-users">
                <thead>
                    <th>名前</th>
                    <th>性別</th>
                    <th>国</th>
                    <th class="control"></th>
                </thead>
                <tbody>
                  <?php foreach($users as $u): ?>
                    <tr>
                      <td><?php Helper::h($u['name']); ?></td>
                      <td>
                        <?php Helper::hSex($u['sex']); ?>
                      </td>
                      <td>
                        <img src="img/countries/<?php Helper::h($u['country']['icon']); ?>">
                        <?php Helper::h($u['country']['name']); ?>
                      </td>
                      <td class="control">
                        <a href="javascript:void(0);">詳細</a>
                        &nbsp;|&nbsp;
                        <a href="javascript:void(0);">編集</a>
                        &nbsp;|&nbsp;
                        <a href="javascript:void(0);">削除</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
              <div class="pagination pagination-large pagination-centered">
                <ul>
                  <?php for ($i=0; $i<(51/5); $i++): ?>
                    <li<?php if (($i+1) === (int)$_GET['page']) echo(' class="active"'); ?>>
                      <a href="?page=<?php echo($i+1); ?>"><?php echo($i+1); ?></a>
                    </li>
                  <?php endfor; ?>
                </ul>
              <!-- /.pagination.pagination-large.pagination-centered --></div>
            <!-- /.primary-inner --></div>
          <!-- /#primary.span9 --></div>

        <!-- /.row --></div>
      <!-- /.container --></div>
    <!-- /#container-wrapper --></div>

<?php include("footer.php"); ?>
