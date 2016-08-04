<?php
    $result = "計算結果なし";

    // 入力された値が数字かどうか
    // is_int, is_numeric ← 指定したデータが整数型 (int型) かどうかを判定する
      // 10 ← 整数です true
      // '10' ← 整数ではないです false
      // 'あ' ← 整数ではないです false
      // 'a' ← 整数ではないです false
    // intval関数 ← 指定したデータを整数型 (int型) に変換する関数。変換できなかった場合、falseを返す
      // 10 → 10
      // '10' → 10
      // 'あ' → false
      // 'a' → false


    if (!empty($_GET)) {
        $num1 = $_GET['num1'];
        $calc = $_GET['calc'];
        $num2 = $_GET['num2'];

        if (intval($_GET['num1']) && intval($_GET['num2'])) {
            switch ($calc) {
              case '+':
                $result = $num1 + $num2;
                break;
              case '-':
                $result = $num1 - $num2;
                break;
              case '×':
                $result = $num1 * $num2;
                break;
              case '÷':
                $result = $num1 / $num2;
                break;
              default:
                $result = "数式エラー";
                break;
            }
        } else {
            echo "数値を入力して下さい。";
        }
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>電卓アプリ</title>
</head>
<body>
  <form action="" method="get">
    <input type="text" name="num1" size="10">
    <select name="calc">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="×">×</option>
      <option value="÷">÷</option>
    </select>
    <input type="text" name="num2" size="10">
    <input type="submit" value="計算">
  </form>
  <?php
      if (!empty($_GET)) {
          echo $num1;
          echo $calc;
          echo $num2;
      }
  ?>
  <h2>
    結果 : <?php echo $result; ?>
  </h2>
</body>
</html>
