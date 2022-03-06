<!doctype html>
<html>
<body>
  <h1>String & String Operator</h1>
<?php
echo "Hello world<br>";
// 기호 앞에 \ 쓰면 문법으로서의 역할 대신 순수한 문자의 의미만 된다.
echo "Hello \"w\"orld";
?>
  <h2>concatenation Operator</h2>
  <?php
  // .은 좌항과 우항의 문자열을 결합해서 하나의 문자를 만들어주는 연산자
  echo "Hello "."world";
  ?>
  <h2>String length function</h2>
  <?php
  // strlen("문자열") -> 문자열의 길이(개수)를 알려주는 함수
  echo strlen("Hello world");
  ?>
</body>
</html>
