<?
$arr = [];
for ($i=0; $i < 100000; $i++)
  $arr[$i] = $i * 2;

$starttime = microtime(true);

for ($x=0; $x < 100000; $x++)
  $arr[$x] = $x + 1;

$interval = (microtime(true) - $starttime) * 1000;
echo print_r($x, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.$interval.'ms';
