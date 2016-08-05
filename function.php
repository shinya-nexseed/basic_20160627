<?php
    // 関数

    // 関数の定義
    // function 関数名() {
      // 処理
    // }

    // 関数の実行
    // 関数名();

    // sayHello()関数の定義
    function sayHello() {
        echo 'Hello';
        echo '<br>';
    }

    // sayHello()関数の実行
    sayHello();
    sayHello();
    sayHello();


    // echo文に最後必ず改行がつくような関数を自作
    function s_echo($var) {
        echo $var;
        echo '<br>';
    }

    s_echo('ほげほげ');
    s_echo('ほげほげ');
    s_echo('ほげほげ');

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // hello関数を作成
    function hello() {
        // helloと出力
        echo "hello";
    }

    // hello関数の呼び出し (実行)
    hello();

    echo "<br>";
    echo "<br>";

    // 問題１
    function nexseed() {
        echo "seedくん";
    }

    // 問題２
    nexseed();
    echo '<br>';
    echo '<br>';
    echo '<br>';

    // 引数とは
    function aisatsu($name) {
        // echo $name;
        echo 'こんにちは、' . $name . 'さん！';
        echo 'お元気ですか？';
        echo '<br>';
    }

    aisatsu('いっしん');
    aisatsu('けんと');

    // echo 'こんにちは、いっしんさん！';
    // aisatsu();
    // echo '<br>';

    // echo 'こんにちは、けんとさん！';
    // aisatsu();
    // echo '<br>';

    // 問題３
    function nexseed_greeting($greeting) {
        echo $greeting;
        echo "seedくん";
    }

    nexseed_greeting('こんばんは、');

    // 複数の引数
    function plus($num1, $num2) {
        // 計算処理
        $result = $num1 + $num2;
        // 出力処理
        echo $result;
        echo '<br>';
    }

    plus(100,50);
    plus(10,21);

    // 四則演算関数
    // 計算したいふたつの数字と、どんな計算をするのかの記号を引数でとりたい
    function calc($num1, $num2, $type) {
        // 処理
        switch ($type) {
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
            $result = '数式エラー';
            break;
        }
        echo $result;
    }

    calc(10,5,'-');

    // 問題４
    function greeting($greeting, $name) {
        echo $greeting;
        echo $name . 'さん';
    }

    greeting('こんにちは、', 'がく');

    // 戻り値
    function hoge() {
        return 'ほげ';
    }

    $str = hoge(); // 'ほげ' が返ってくる
    // $str変数でhoge()が返す'ほげ'という文字データを受け取る
    echo $str;

    // 足し算をした結果を返す関数
    function r_plus($num1, $num2) {
        $r_result = $num1 + $num2;
        return $r_result;
        echo "ここで処理";
    }

    // $result = r_plus(111, 222);
    // echo $result;

    $result = r_plus(111, 222);

    echo "合計は" . $result . "です";
    echo "計算結果は" . $result . "です";
    $result2 = $result * 2;

    // returnを複数持った関数
    function checkExam($score) {
        if ($score == 100) {
            return 'パーフェクト';
        } elseif (99 > $score && $score > 80) {
            return 'よくできました';
        } elseif (79 > $score && $score > 50) {
            return 'おっけー';
        } else {
            return 'もっとがんばりましょう';
        }
    }

    $result = checkExam(100);
    echo $result;



?>





