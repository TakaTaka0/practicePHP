<?php

//underGoing
//曜日の設定
$weekDay = array("日","月","火","水","木","金","土");
//当月の開始日設定
$day =1;

//年月日を取得
$datetime = new datetime("Asia/Tokyo");

$year = $datetime->format("Y");
$month = $datetime->format("m");


$datetime->setDate($year, $month, $day);
$firstWeekDay = (int)$datetime->format("w");
$lastDay = (int)$datetime->format("t");

//前月の値を取得
$lastDayOfMonth =  (int)date('j', strtotime('last day of previous month')-60*60*96);
var_dump($lastDayOfMonth);
$firstDayofNextMonth = (int)date('j', strtotime('first day of next month'));

?>

<!DOCTYPE html>
<html lang="ja">
<meta charset="utf-8">
<head>
  <title>カレンダー</title>
</head>

<body>
  <table>
    <figcaption><?= $year.$month;?></figcaption>
    <tr>
    <?php foreach ($weekDay as $value) :?>
      <th><?= $value; ?></th>
    <?php endforeach;?>
    </tr>

    <tr>
    <?php

    for ($i=0; $i<$firstWeekDay; $i++) {
        $getValue =$i+1;
        $value = $lastDayOfMonth + $getValue;
        echo "<td>".$value."</td>";
    }

    for ($cell = $firstWeekDay; $cell<35; $cell++) {
        if ($cell %7===0) {
            echo "<tr></tr>";
        }
        if ($day <= $lastDay) {
            echo "<td>".$day."</td>";
        } else {
            echo "<td></td>";
        }
        $day++;
    }
    ?>
    </tr>
  </table>
<body>

</html>
