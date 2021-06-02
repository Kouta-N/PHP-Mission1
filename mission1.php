<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mission1</title>
</head>

<body>
  <form method="POST" action="mission1.php">
    日本の首都は？<br>
    <input type="text" name="check_capital" value="" />
    <input type="submit" name="send" value="OK" />
  </form>
  <?php
if(!empty($_POST['send']) && $_POST['check_capital'] === '東京'){
  echo '正解';
}else if(!empty($_POST['send']) ){
  echo '不正解';
}
?>
</body>

</html>