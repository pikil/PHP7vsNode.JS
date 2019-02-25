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

$new_arr = [];
$ids = [];

for ($i=0; $i < 10000; $i++) {
  $ids = [];

  foreach ($source_arr as $s)
    $ids[] = [
      $id_key => $s['id'],
      $qty_key => $s['qty']
    ];
}

echo print_r($ids, 1)."\n";
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
