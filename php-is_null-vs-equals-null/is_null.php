<?
$starttime = microtime(true);

$res = null;

for ($x=0; $x < 1000000; $x++)
  $res = (is_null($res)) ? 'Value' : null ;

print_r("Done\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
