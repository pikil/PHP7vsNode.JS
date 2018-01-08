<?
$needle_arr = ['not that', 'not that', 'tHis One', 'not that'];
$haystack_arr = [
  'this element does not contain the value',
  'this element does not contain the value',
  'this one does contain the value',
  'this element does not contain the value',
];
$val = '';

$starttime = microtime(true);

for ($i=0; $i < 10000; $i++) {
  foreach ($haystack_arr as $h) {
    $needle_id = 0;

    foreach ($needle_arr as $k => $n) {
      if (preg_match('/'.$n.'/i', $h)) {
        $needle_id = $k;
        break;
      }
    }

    if ($needle_id) {
      $val = $needle_arr[$needle_id];
      break;
    }
  }
}

echo print_r($val, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
