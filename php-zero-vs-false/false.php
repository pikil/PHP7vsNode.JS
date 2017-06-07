<?
$starttime = microtime(true);

$cond = 0;
$res = '';

for ($i=0; $i < 1000000; $i++) {
  if ($cond) {
    $res = 'true';
    $cond = false;
  } else {
    $res = 'false';
    $cond = true;
  }
}

print_r($res."\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
