<?
$starttime = microtime(true);

$val = '';
for ($x=0; $x < 1000000; $x++) {
  $str1 = 'str1';
  $str2 = 'str2';
  $str3 = 'str3';

  $val = implode('-', [$str1, $str2, $str3]);
}

echo print_r($val, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
