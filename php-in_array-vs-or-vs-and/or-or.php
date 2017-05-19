<?
$starttime = microtime(true);

$res = '';
$check_val = 3;

for ($i=0; $i < 1000000; $i++)
  // $res = ($check_val == 5 || $check_val == 6 || $check_val == 99 || $check_val == 0 || $check_val == 58 || $check_val == 1000 || $check_val == 1212 || $check_val == 1265 || $check_val == 1215 || $check_val == 12165 || $check_val == 125 || $check_val == 126) ? '2' : '1' ;
  $res = ($check_val == 5 || $check_val == 6 || $check_val == 99) ? '2' : '1' ;

print_r($res."\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
