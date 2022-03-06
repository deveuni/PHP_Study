<!DOCTYPE html>
<html>
  <body>
    <h1> URL 파라미터 </h1>
    // parameter.php?name="누구"&address="어디"
    안녕하세요. <?php echo $_GET['address']; ?>에 사시는 <?php echo $_GET['name']; ?>님
  </body>
</html>
