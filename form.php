<?php
  session_start();
  $name = htmlspecialchars( $_SESSION['name'], ENT_QUOTES, 'UTF-8' );
  $ruby = htmlspecialchars( $_SESSION['ruby'], ENT_QUOTES, 'UTF-8' );
  $date = htmlspecialchars( $_SESSION['date'], ENT_QUOTES, 'UTF-8' );
  $gender = htmlspecialchars( $_SESSION['gender'], ENT_QUOTES, 'UTF-8' );
  $email = htmlspecialchars( $_SESSION['email'], ENT_QUOTES, 'UTF-8' );
  $phone = htmlspecialchars( $_SESSION['phone'], ENT_QUOTES, 'UTF-8' );
  $inquiry = htmlspecialchars( $_SESSION['inquiry'], ENT_QUOTES, 'UTF-8' );
  
  $link = mysqli_connect('localhost', 'root', 'root', 'formdb');

  // 接続状況をチェックします
  if (mysqli_connect_errno()) {
    die("データベースに接続できません:" . mysqli_connect_error() . "\n");
  }

  //データの追加
  $query = 'INSERT INTO user (name, ruby, dt, gender, email, phone, inquiry ) VALUES("'.$name.'","'.$ruby.'","'.$date.'","'.$gender.'","'.$email.'","'.$phone.'","'.$inquiry.'")';

  // クエリを実行します。
  if (mysqli_query($link, $query)) {
    echo "<h2>送信完了</h2>\n";
  }

  // 接続を閉じます
  mysqli_close($link);
  
?>
<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>送信完了画面｜お問い合わせ</title>
</head>
<body>

<body>

<p class="message">
お問い合わせありがとうございます。1営業日以内にご返信させていただきます。<br/>
自動返信メールをお送りしておりますのでご確認ください。<br/>
1時間たっても届かない場合はお手数ですがこちらからご連絡ください。
</p>
<p><a href="index.html">入力画面に戻る</a></p>
</body>
</html>

