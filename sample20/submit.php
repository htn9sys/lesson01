<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample20</title>
</head>
<body>
  <?php if (!empty($_REQUEST['my_name'])): ?><!--もし何も入力しなかった場合-->
    <p>お名前: <?php echo htmlspecialchars ($_REQUEST['my_name'], ENT_QUOTES); ?></p>
  <!-- htmlspecialcharsを入れて不正もしくは危険なアクセス等を防ぐ-->
  <?php endif; ?>
</body>
</html>

<!-- _REQUESTについては受け取り方、_GETでは_REQUESTで問題ないが、postで送信した場合は_POSTで受け取る必要がある-->