<?
$starttime = microtime(true);

$res = '';
$check_val = 3;

for ($i=0; $i < 1000000; $i++)
  // $res = (!in_array($check_val, [5,6,99,0,58,1000,1212,1265,1212,12165,125,126])) ? '1' : '2' ;
  $res = (!in_array($check_val, [5,6,99])) ? '1' : '2' ;

print_r($res."\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
