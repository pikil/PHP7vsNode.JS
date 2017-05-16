<?
$starttime = microtime(true);

$array = [3,4,1,3,5,1,92,2,4124,424,52,12];
$sorted = false;
$len = count($array) - 1;

for ($j=0; $j < 100000; $j++) {
  while ($sorted === false) {
    $sorted = true;

    for ($i = 0; $i <= $len; ++$i) {
      $current = $array[$i];
      $next = $array[$i+1];

      if ($next < $current) {
        $array[$i] = $next;
        $array[$i+1] = $current;
        $sorted = false;
      }
    }
  }
}

print_r($array."\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
