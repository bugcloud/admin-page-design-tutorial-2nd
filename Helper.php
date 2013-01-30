<?php
class Helper {
  public static function h($str = "") {
    echo htmlspecialchars($str);
  }

  public static function hSex($sex) {
    $html = "";
    $sex = (int)$sex;
    if ($sex === 0) {
      $html = '<i class="icon-user"></i>男性';
    } else if ($sex === 1) {
      $html = '<i class="icon-heart"></i>女性';
    }
    echo($html);
  }
}
