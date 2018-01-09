<?
$html = '';

$starttime = microtime(true);

ob_start();

for ($i=0; $i < 100000; $i++) {
  ?><a><?=$i?></a><?
}

$html = ob_get_clean();

$interval = (microtime(true) - $starttime) * 1000;
echo print_r('Done', 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.$interval.'ms';
