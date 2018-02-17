<?
$starttime = microtime(true);

$v = false;

for ($i=1; $i<=500000; $i++)
  $v = ($v) ? false : true ;

print_r("Done\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
