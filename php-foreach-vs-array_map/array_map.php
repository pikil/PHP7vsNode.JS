<?
$source_arr = [
  ['id' => 5645, 'qty' => 30],
  ['id' => 1565, 'qty' => 150],
  ['id' => 15, 'qty' => 1],
  ['id' => 1545478, 'qty' => 0],
  ['id' => 354558, 'qty' => 1500]
];

$id_key = 'id_key';
$qty_key = 'qty_key';

$starttime = microtime(true);

for ($i=0; $i < 10000; $i++)
  $ids = array_map(function($s) use ($id_key, $qty_key) {
    return [
      $id_key => $s['id'],
      $qty_key => $s['qty']
    ];
  }, $source_arr);

echo print_r($ids, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
