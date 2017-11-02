<?
$starttime = microtime(true);

$val = '';
for ($x=0; $x < 1000000; $x++) {
  $str = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies magna et maximus congue. Curabitur sed fringilla dolor. Donec facilisis lectus justo. Curabitur sodales velit ut massa volutpat gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam erat volutpat. Aenean urna nibh, mattis sed sollicitudin non, pharetra ac ligula. Fusce aliquet augue non risus ullamcorper posuere. Quisque egestas egestas massa sit amet ullamcorper. Integer tellus odio, egestas in porta in, tincidunt sit amet turpis. Proin aliquet id urna vitae ullamcorper. Nulla feugiat eget dui sit amet finibus.';

  $val = $str.$x;
}

$interval = (microtime(true) - $starttime) * 1000;
echo print_r($val, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.$interval.'ms';
