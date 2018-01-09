<?
$html = '';

$starttime = microtime(true);

for ($i=0; $i < 100000; $i++)
  $html .= '<a>'.$i.'</a>';

$interval = (microtime(true) - $starttime) * 1000;
echo print_r('Done', 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.$interval.'ms';
