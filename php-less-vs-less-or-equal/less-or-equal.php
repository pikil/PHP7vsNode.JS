<?
$starttime = microtime(true);

$int = 200;
$val = 0;

for ($x=0; $x < 100000; $x++)
  for ($i=1; $i <= $int; $i++)
    $val = $i - 1;

$interval = (microtime(true) - $starttime) * 1000;
echo print_r($x, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.$interval.'ms';
