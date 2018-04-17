<?
$arr = [];

$starttime = microtime(true);

for ($x=0; $x < 1000000; $x++)
  $arr[] = $x;

$interval = (microtime(true) - $starttime) * 1000;
echo print_r($arr[999999], 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.$interval.'ms';
