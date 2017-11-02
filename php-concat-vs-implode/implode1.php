<?
$starttime = microtime(true);

$val = '';
for ($x=0; $x < 1000000; $x++) {
  $arr = ['str1', 'str2', 'str3'];

  $val = implode('-', $arr);
}

echo print_r($val, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
