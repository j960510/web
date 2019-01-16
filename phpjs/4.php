<!-- 가변적인 부분 -->
<?php
      $name = "egoing";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>웹 어플리케이션 만들기</title>
</head>

<body>
   <h1>JavaScript</h1>
   <script charset="utf-8">
      name = "egoing";
      document.write("name");
   </script>

   <h1>php</h1>
   <!-- 고정적인 부분 -->
   <?php
      echo "안녕하세요"."$name";
    ?>
</body>
</html>
