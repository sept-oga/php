<?php
  // クラスの定義は大文字
  class Menu{
    public $name;

    public function __construct($name) {
      $this->name = $name;
    }

    public function hello() {
      echo '私は'.$this->name.'です';
    }
  }

  $$juice = new Menu('JUICE');
  $coffee = new Menu('COFFEE');
  $curry = new Menu('CURRY');
  $pasta = new Menu('PASTA');

  $menus = array($juice, $coffee, $curry, $pasta);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <div class="menu-items">
      
      <?php foreach ($menus as $menu): ?>
        <h3><?php echo $menu -> name ?></h3>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>