<?php
//セッションの開始
session_start();
//データの受け取り
$name = htmlspecialchars($_POST["name"],ENT_QUOTES,'UTF-8');
$ruby = htmlspecialchars($_POST["ruby"],ENT_QUOTES,'UTF-8');
$date = $_POST["date"];
$gender = $_POST["gender"];
$email = htmlspecialchars($_POST["email"],ENT_QUOTES,'UTF-8');
$phone = htmlspecialchars($_POST["phone"],ENT_QUOTES,'UTF-8');
$inquiry = htmlspecialchars($_POST["inquiry"],ENT_QUOTES,'UTF-8');

//入力値をセッション変数に格納
$_SESSION['name'] = $name;
$_SESSION['ruby'] = $ruby;
$_SESSION['date'] = $date;
$_SESSION['gender'] = $gender;
$_SESSION['email'] = $email;
$_SESSION['phone'] = $phone;
$_SESSION['inquiry'] = $inquiry;
?>

<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>入力内容の確認｜お問い合わせ</title>

  
</head>
<body>
<h2>入力内容の確認</h2>
<form action="form.php" method="post">
<table>
  <tr><th>氏名</th><td><?php echo $name; ?></td></tr>
  <tr><th>氏名（かな）</th><td><?php echo $ruby; ?></td></tr>
  <tr><th>生年月日</th><td><?php echo $date; ?></td></tr>
  <tr><th>性別</th><td><?php echo $gender; ?></td></tr>
  <tr><th>メールアドレス</th><td><?php echo $email; ?></td></tr>
  <tr><th>電話番号</th><td><?php echo $phone; ?></td></tr>
  <tr><th>問合わせ内容</th><td><?php echo $inquiry; ?></td></tr>
</table>
</br>
</br>
<input type="submit" value="送信">

</form>
</body>
</html>