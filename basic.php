<?php
    // PHP基礎復習

    // 変数
    // $変数名 = データ;
    // 何でも入れられる箱
    $greeting = "Hello";
    $str = $greeting;
    echo $greeting;
    echo "<br>";
    echo $str;
    echo "<br>";

    // if文
    // if (条件) {
        // 処理
    // }
    // ()内の条件がtrueを返すとき、if内の処理を実行します
    if (false) { // true : false
        echo "if内の処理";
    }

    // 真偽値 (bool型)
    // true : false のどちらかの値
    // 真 : 偽

    if (10.1 == 10) {
        echo "true";
    } else {
        // ifの条件がfalseを返すとき、処理を実行します
        echo "false";
    }

    // 比較演算子
    // if (A == B)
      // 値が一致すればtrue
    // if (A === B)
      // 値と、値のデータ型が一致すればtrue

    if ("いち" === "いち") {
        echo "いちです";
    } else {
        echo "いちじゃないです";
    }

    $num1 = 10;
    $num2 = 11;

    if ($num1 > $num2) {
        echo "<br>";
        echo "大きい";
    }

    // 論理演算子
      // if (A && B)     and演算子
        // AとBの条件が両方ともtrueを返すとき、処理を実行します。
      // if (A || B)     or演算子
        // AとBの条件のどちらかがtrueを返すとき、処理を実行します。
    $a = true;
    $b = false;
    if ($a && $b) {
        echo "AもBもtrue";
    }

    if ($a || $b) {
        echo "AかBがtrue";
    }

    // switch
    // ひとつの基準変数に対して、複数の場合分けを行いたい場合はif文ではなくswitch文を使う
    $dice = 2;
    switch ($dice) {
      case 3: // case ~ breakまでを複数作り場合分け
        echo "中継地点へワープします";
        break;

      case 6:
        echo "振り出しへ戻る";
        break;

      default: // 必ず最後に必要
        echo $dice . "マス進む";
        break;
    }

    // while文
    // while (繰り返しの条件) {
        // 処理
    // }
    // 繰り返し条件がtrueを返す間、処理を繰り返します

    // 繰り返し条件用の変数countを用意
    $count = 0;
    // while文の中で上記変数を定義してしまうと毎回初期値の0に戻ってしまう
    while (true) { // trueや1を入れると制限なく処理を繰り返す

        $count2 = 0;

        // ※ breakがないと無限ループして画面がフリーズする
        echo "<br>";
        echo "count → " . $count;
        echo "<br>";
        echo "count2 → " . $count2;

        if ($count == 4) { // 5回繰り返す
            break;
        }
        $count++; // $count = $count + 1; 自己代入
        $count2++;
    }

    // for文
    // for (初期化式; 条件式; 変化式) {
        //　処理
    // }
      // 初期化式 :
        // for文が実行されるタイミングで一度だけ実行される式
        // 通常は条件などに使用される変数などの初期値を決めます
      // 条件式 :
        // 繰り返しの条件となる式
        // trueを返すとき、処理を実行する
      // 変化式 :
        // 繰り返しが１回行われる際に変化させる変数とその変化を記述する
        // 基本は算術演算子の++や--を使用
    echo "<br>";
    echo "for文開始";
    for ($i=0; $i < 10; $i++) {
        echo "<br>";
        echo $i . "回目";
    }

    echo "<br>";
    echo "<br>";

    // 配列
    // 複数の要素を持った箱
    // $配列名 = array(値1, 値2, 値3, 値4);
    $ary = array("HTML", "CSS", "PHP", "MySQL");
    var_dump($ary);
    // 配列を表示して確認する場合はvar_dump()
    // スーパーグローバル変数はコード上では定義されないため、
    // 中身の判断が難しいです。
    // 詰まった場合は必ずvar_dumpし内容を確認すること。
    echo "<br>";
    echo $ary[2];
    // 配列のいち要素を指定するには
    // $配列名[Index] の形式で欲しい要素のIndexを指定する
    // Indexを指定する[]の中は変数でも大丈夫

    // 1が入った変数indexを作成
    // $ary配列に上記変数を指定して、ひとつ要素をブラウザに表示
    $index = 1;
    echo $ary[$index];


    // 連想配列
    // 配列のIndex部分を好きな文字列 (キー) として割り当てられる配列
    // キーから値を連想することができる配列
    // $連想配列名 = array("キー1" => 値1, "キー2", 値2);
    $user = array("name" => "NexSeed", "age" => 3);
    echo "<br>";
    var_dump($user);
    echo "<br>";
    echo $user['name'];

    echo "<br>";
    var_dump($_GET);
    echo "<br>";
    echo $_GET['class'];

    // foreach文
    // 条件に配列を使用し、要素の件数分繰り返します。
    // 条件内で指定した配列から要素をひとつ取り出し、
    // その要素を変数に代入します。
    // その変数は、その回の繰り返し内でのみ使用できます。
    // foreach (配列 as 変数) {
      // 処理 (この処理の部分で上記変数が使用できる)
    // }
    $user_names = array("けんと", "いっしん", "がく", "さえ", "けいじ");
    // 変数の名前を$user_nameとし、上記の配列を使用して
    // foreach文を作成
    foreach ($user_names as $user_name) {
        // 名前一件一件を繰り返して表示
        echo "<br>";
        echo $user_name;
    }

    // for文
    $ary_count = count($user_names);
    // count()関数を使用して配列の要素数をカウントし
    // $ary_count変数へ代入
    for ($i=0; $i < $ary_count; $i++) {
        echo "<br>";
        echo "====================";
        echo "<br>";
        echo '$ary_count = ' . $ary_count;
        echo "<br>";
        echo '$i = ' . $i;
        // 配列の要素数分 ($ary_count) 繰り返す
        $user_name = $user_names[$i];
        echo "<br>";
        echo $user_name;
    }

    // 多次元配列
    // 配列の要素として更に配列が入っている配列
    // DBからデータを取得していた際などはこの多次元配列であることが多い
    $ichi = array("name" => "いち", "age" => 18);
    $gaku = array("name" => "がく", "age" => 22);
    $yuri = array("name" => "ゆり", "age" => 22);

    $users = array($ichi, $gaku, $yuri); // ← これ
    echo "<br>";
    // var_dump($users);
    echo $users[0]["name"];

    echo "<br>";
    echo "<br>";
    echo "<br>";

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ベーシック</title>
  <!-- CSSやJSの外部ファイルの読み込みはheadタグ内に記述 -->
</head>
<body>
  <!-- リンクを設置する -->
  <!-- <a href="遷移したいページのURL">リンク文字列</a> -->
  <a href="hoge.php">hoge.phpへ遷移</a>

  <!-- フォーム -->
  <!--
  <form action="遷移したいページのURL" method="getかpostを入れる">
    実際に画面に出力する入力欄を作成
    <input type="入力欄タイプ" name="入力欄の名前">
    オプション :
    ①value="入力欄の初期値"
    ②placeholder="入力欄の例"
  </form>

  ※フォームのパーツは必ずformタグ内に記述すること
  -->

  <!--
      method:get
        URLにパラメータとしてフォームのデータを渡す
        PHPの$_GETで取得する
        ブラウザにもよるが、get送信は2000文字程度の制限がある
        使いドコロ :
          DBからデータを取得する際、条件などに使用するデータをこのget送信で作成する

      method:post
        PHPの$_POSTで取得する
        送れるデータは無制限
        使いドコロ :
          DBへデータを登録する際、データのチェックや実際にDBへ登録するためのデータをこのpostで作成する
        画面上にデータは表示されないので、セキュリティを考慮して個人情報を送る場合などは必ずpostで送る

   -->
  <form action="basic.php" method="get">
    タイプtext : <input type="text" name="nick_name">
    <br>
    タイプemail : <input type="email">
    <br>
    タイプpassword : <input type="password">
    <br>
    タイプcheckbox :
    <div>
      <input type="checkbox" name="class" value="ios" id="ios" checked>
      <label for="ios">iOSクラス</label><br>
      <input type="checkbox" name="class" value="web"> WEBクラス
    </div>

    <br>
    タイプradio :
    <div>
      <input type="radio" name="member" value="0" checked> いち
      <input type="radio" name="member" value="1"> いっしん
      <input type="radio" name="member" value="2"> ゆり
      <input type="radio" name="member" value="3"> てんゆー
      <input type="radio" name="member" value="4"> けいじ
      <input type="radio" name="member" value="5"> さえ
      <input type="radio" name="member" value="6"> がく
      <input type="radio" name="member" value="7"> けんと
    </div>

    <br>
    selectタグ :
    <div>
      <select name="programming">
        <option value="0">Ruby</option>
        <option value="1">PHP</option>
        <option value="2">Python</option>
      </select>
    </div>

    <br>
    <input type="submit">
  </form>


</body>
</html>
