<?
$starttime = microtime(true);

$v = null;

for ($x=0; $x < 1000000; $x++)
  $res = ($v === null) ? 'Value' : null ;

print_r("Done\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
