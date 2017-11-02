<?
$starttime = microtime(true);

for ($x=0; $x < 100000; $x++) {
  $arr = [];

  for ($i=0; $i < 100; $i++)
    $arr[] = $i;

  $string = implode(',', $arr);
}

echo print_r($string, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
