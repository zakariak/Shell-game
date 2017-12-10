<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<link rel="stylesheet" href="view/style.css">
<body>

  <div class="cups">
    <?php $cup1->show(); ?>
    <?php $cup2->show();?>
    <?php $cup3->show(); ?>
    <div class="clear"></div>
  </div>
  <?php $player->show(); ?>
</body>
</html>
