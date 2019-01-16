<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
<title>웹 어플리케이션 만들기</title>
</head>

<body>
<?php
      $password = $_GET["password"];
      if($password == "1234"){
        echo "안녕하세요. 회원님";
      } else {
        echo "로그인에 실패하셨습니다.";
      }
 ?>
</body>
</html>
