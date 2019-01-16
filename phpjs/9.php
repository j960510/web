<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>

<body>
  <h1>JavaScript</h1>
  <ul>
  <script>
    i = 0;
    while (i < 10) {
      document.write(i+"<li>hello world</li>");
      document.write("<br />");
      i = i + 1;
    }
  </script>
</ul>

  <h2>php</h2>
  <ul>
  <?php
    $i = 0;
    while ($i < 10) {
      echo "<li>$i.hello world</li><br />";
      $i = $i + 1;
    }
   ?>
 </ul>
</body>
</html>
