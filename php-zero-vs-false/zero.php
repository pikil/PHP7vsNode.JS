<?
$starttime = microtime(true);

$cond = 0;
$res = '';

for ($i=0; $i < 1000000; $i++) {
  if ($cond) {
    $res = 'true';
    $cond = 0;
  } else {
    $res = 'false';
    $cond = 1;
  }
}

print_r($res."\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
