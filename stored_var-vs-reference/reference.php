<?
$starttime = microtime(true);

$arr = [
  'el_one' => [
    'sub_el_1' => [
      'sub_sub_el_1' => 25
    ],
    'sub_el_2' => [
      'sub_sub_el_1' => 99
    ]
  ],
  'el_two' => [
    'sub_el_1' => [
      'sub_sub_el_1' => 36
    ],
    'sub_el_2' => [
      'sub_sub_el_1' => 46
    ]
  ]
];

for ($x=0; $x < 1000000; $x++) {
  $arr['el_two']['sub_el_2']['sub_sub_el_1'] = ($arr['el_two']['sub_el_2']['sub_sub_el_1'] == 46) ? 73 : 46 ;
}

// for ($x=0; $x < 1000000; $x++)
//   $var = ($x%2 == 0) ? 'not year' : date('Y') ;

print_r("Done. | '.$arr['el_two']['sub_el_2']['sub_sub_el_1']." |\n");
echo 'PHP script ('.basename(__FILE__).') took '.((microtime(true) - $starttime) * 1000).'ms';
