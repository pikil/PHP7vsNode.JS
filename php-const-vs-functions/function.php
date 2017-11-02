<?
$starttime = microtime(true);

$var = '';

for ($x=0; $x < 1000000; $x++)
  $var = ($x%2 == 0) ? date('Y') : 'not year' ;

// for ($x=0; $x < 1000000; $x++)
//   $var = ($x%2 == 0) ? 'not year' : date('Y') ;

print_r("Done. | '.$var.' |\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
