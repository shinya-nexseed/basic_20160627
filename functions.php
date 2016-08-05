<?php
    // 定数
    // 定数とは、変数の逆で一度値を定義したらそれ以降変更することができない
    // define('定数名', 値);
    // 定数名は大文字で記述する

    // モード切り替え用定数
    // TRUE → デバッグモード
    // FALSE → 本番モード
    define('DEBUG', TRUE); // フラグを立てる

    // echoの問題
      // 改行されない
      // 消すのが面倒
      // どの変数を出力しているのかわかりづらい
    $num = '1';
    echo '$num = ' . $num;
    echo '<br>';

    function org_echo($var_name, $value) {
        if (DEBUG) {
            echo $var_name . ' = ' . $value;
            echo '<br>';
        }
    }
    $str = 'Happy hacking!';
    org_echo('$num', $num);
    org_echo('$str', $str);

    // var_dumpの問題
      // 改行されない
      // 見難い
      // 消すのが面倒

    $members = array('Ichi', 'Yuri', 'Keiji', 'Sae', 'Gaku', 'Kento', 'Isshin');
    var_dump($members);

    function org_var_dump($value) {
        if (DEBUG) {
            echo '<pre>';
            var_dump($value);
            echo '</pre>';
        }
    }

    org_var_dump($members);
?>






