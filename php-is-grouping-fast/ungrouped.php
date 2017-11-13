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

$var = [];
for ($i=1; $i < 2000; $i+=2) {
  foreach ($arr as $a) {
    if ($a['id'] == "String_$i") {
      $var = $a;
      break;
    }
  }
}

$interval = (microtime(true) - $starttime) * 1000;
echo print_r($var, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.$interval.'ms';
