<?
$starttime = microtime(true);

define('YEAR', date('Y'));

$var = '';

for ($x=0; $x < 1000000; $x++)
  $var = ($x%2 == 0) ? 'not year' : YEAR ;

// for ($x=0; $x < 1000000; $x++)
//   $var = ($x%2 == 0) ? YEAR : 'not year' ;

print_r("Done. | '.$var.' |\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
