<?php
$breakfast[] = array('name' => 'idly', 'cousin' => 'indian', 'amount' => 120, 'qty' => 30);
$breakfast[] = array('name' => 'Dosa', 'cousin' => 'korean', 'amount' => 300, 'qty' => 30);
$breakfast[] = array('name' => 'vada', 'cousin' => 'Chinese', 'amount' => 780, 'qty' => 30);
$breakfast[] = array('name' => 'idly1', 'cousin' => 'indian', 'amount' => 1200, 'qty' => 30);
$breakfast[] = array('name' => 'Dosa1', 'cousin' => 'korean', 'amount' => 3000, 'qty' => 30);
$breakfast[] = array('name' => 'vada1', 'cousin' => 'Chinese', 'amount' => 7800, 'qty' => 30);
$array=array('name'=>$breakfast,'cousin'=>$breakfast,'amount'=>$breakfast,'qty'=>$breakfast);
$str = '';
$e = 0;
$f = 0;
foreach ($array as $a) {
  // echo '<pre>';
  // print_r($a);
  // echo '<pre>';
  $c = 0;
  $d = 0;
  foreach ($a as $b) {
    echo '<pre>';
    print_r($b);
    echo '<pre>';
    print_r($b['name']);
    echo "<br>";
    print_r($b['cousin']);
    echo "<br>";
    print_r($b['amount']);
    echo "<br>";
    print_r($b['qty']);
    $str .= '<tr>';
    $str .= '<td>' . $b['name'] . '</td>';
    $str .= '<td>' . $b['cousin'] . '</td>';
    $str .= '<td>' . $b['qty'] . '</td>';
    $str .= '<td>' . $b['amount'] / $b['qty'] . '</td>';
    $str .= '<td>' . $b['amount'] . '</td>';
    $str .= '</tr>';
    $c += $b['qty'];
    $d += $b['amount'];
    $e += $b['qty'];
    $f += $b['amount'];
  }
  $str .= '<tr>';
  $str .= '<td></td>';
  $str .= '<td></td>';
  $str .= '<td>' . $c . '</td>';
  $str .= '<td></td>';
  $str .= '<td>' . $d . '</td>';
  $str .= '</tr>';
}
$str .= '<tr>';
$str .= '<td></td>';
$str .= '<td></td>';
$str .= '<td>' . $e . '</td>';
$str .= '<td></td>';
$str .= '<td>' . $f . '</td>';
$str .= '</tr>';
?>

<html>

<head>
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th>Name</th>
      <th>cousins</th>
      <th>qty</th>
      <th>rate</th>
      <th>amount</th>
    </tr>
    <tbody>
      <?php echo $str;
      ?>
    <tbody>
  </table>
</body>

</html>