<?
$starttime = microtime(true);

$res = '';

for ($i=0; $i < 100000; $i++)
  $res = $i.' times run';

print_r($res."\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
