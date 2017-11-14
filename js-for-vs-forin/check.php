<?
$arr = [];
for ($i=1; $i <= 500000; $i++)
  $arr[] = [
    'id' => "String_$i",
    'price' => $i * 100,
    'descr' => 'Some descr '.($i + 50),
    'qty' => $i * 2
  ];

$starttime = microtime(true);

$var = [];
// foreach ($arr as $a)
//   $var = $a;

for ($i=1; $i < 500000; $i++)
  $var = $arr[$i];

$interval = (microtime(true) - $starttime) * 1000;
echo print_r($var, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.$interval.'ms';
