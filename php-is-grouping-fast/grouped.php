<?
$arr = [];
for ($i=1; $i < 50000; $i++)
  $arr[] = [
    'id' => "String_$i",
    'price' => $i * 100,
    'descr' => 'Some descr '.($i + 50),
    'qty' => $i * 2
  ];

$starttime = microtime(true);

$new_arr = [];
foreach ($arr as $a)
  $new_arr[$a['id']] = $a;

$var = [];
for ($i=1; $i < 50000; $i+=250)
  $var = $new_arr["String_$i"];

$interval = (microtime(true) - $starttime) * 1000;
echo print_r($var, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.$interval.'ms';
