<?php
  // クラスの定義は大文字
  class Menu{
    public $name;
  }

  $curry = new Menu();
  $pasta = new Menu();

  $curry -> name = 'CURRY';
  $pasta -> name = 'PASTA';

  echo $curry -> name."\n";
  echo '<br>';
  echo $pasta -> name."\n";

?>