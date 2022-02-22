<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。


// 以下は自動販売機のお釣りを計算するプログラムです。
// 150円のお茶を購入した際のお釣りを計算して表示してください。
// 計算内容は関数に記述し、関数を呼び出して結果表示すること
// $yen と $product の金額を変更して計算が合っているか検証を行うこと

// 表示例1）
// 10000円札で購入した場合、
// 10000円札x0枚、5000円札x1枚、1000円札x4枚、500円玉x1枚、100円玉x3枚、50円玉x1枚、10円玉x0枚、5円玉x0枚、1円玉x0枚

// 表示例2）
// 100円玉で購入した場合、
// 50円足りません。

$yen = 100;   // 購入金額
$product = 150; // 商品金額

function calc($yen, $product) {
    // この関数内に処理を記述
    echo $yen."円で購入した場合、"."<br>";

    if ($yen > $product) {
        $change = $yen - $product;

        $change_10000 = floor($change / 10000);
        $change = $change % 10000;
        $change_5000 = floor($change / 5000);
        $change = $change % 5000;
        $change_1000 = floor($change / 1000);
        $change = $change % 1000;
        $change_500 = floor($change / 500);
        $change = $change % 500;
        $change_100 = floor($change / 100);
        $change = $change % 100;
        $change_50 = floor($change / 50);
        $change = $change % 50;
        $change_10 = floor($change / 10);
        $change = $change % 10;
        $change_5 = floor($change / 5);
        $change = $change % 5;
        $change_1 = floor($change / 1);
    
        echo "10000円札x".$change_10000."枚、5000円札x".$change_5000."枚、1000円札x".$change_1000."枚、500円玉x".$change_500."枚、100円玉x".$change_100."枚、50円玉x".$change_50."枚、10円玉x".$change_10."枚、5円玉x".$change_5."枚、1円玉x".$change_1."枚";
    } else {
        $change = $product - $yen;
        echo $change."円足りません。";
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>お釣り</title>
</head>
<body>
    <section>
        <!-- ここに結果表示 -->
        <?php  calc($yen, $product)  ?>
    </section>
</body>
</html>