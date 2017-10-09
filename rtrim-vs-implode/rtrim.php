<?
$starttime = microtime(true);

for ($x=0; $x < 100000; $x++) {
  $string = '';

  for ($i=0; $i < 100; $i++)
    $string .= $i.',';

  $string = rtrim($string, ',');
}

echo print_r($string, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
