<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<link rel="stylesheet" href="view/style.css">
<body>

  <div class="cups">
    <?php echo $gameView; ?>
    <div class="clear"></div>
  </div>
  <?php $player->show(); ?>
</body>
</html>
