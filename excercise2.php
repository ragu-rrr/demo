<?php
$menu = "breakfast";
$cousin = 'indian';
$breakfast[] = array('name' => 'idly', 'cousins' => array(array('cousin' => 'indian', 'amount' => 120, 'qty' => 30), array('cousin' => 'Chinese', 'amount' => 180, 'qty' => 15)));
$breakfast[] = array('name' => 'Dosa', 'cousins' => array(array('cousin' => 'indian', 'amount' => 120, 'qty' => 30), array('cousin' => 'korean', 'amount' => 300, 'qty' => 30)));
$breakfast[] = array('name' => 'poori', 'cousins' => array(array('cousin' => 'North indian', 'amount' => 580, 'qty' => 10), array('cousin' => 'south Indian', 'amount' => 480, 'qty' => 25)));
$breakfast[] = array('name' => 'vada', 'cousins' => array(array('cousin' => 'indian', 'amount' => 700, 'qty' => 30), array('cousin' => 'Chinese', 'amount' => 780, 'qty' => 30)));
$lunch[] = array('name' => 'rice', 'cousins' => array(array('cousin' => 'indian', 'amount' => 420, 'qty' => 30), array('cousin' => 'Chinese', 'amount' => 180, 'qty' => 30)));
$lunch[] = array('name' => 'Briyani', 'cousins' => array(array('cousin' => 'indian', 'amount' => 700, 'qty' => 30), array('cousin' => 'Chinese', 'amount' => 180, 'qty' => 40)));
$lunch[] = array('name' => 'shawarma', 'cousins' => array(array('cousin' => 'indian', 'amount' => 900, 'qty' => 30), array('cousin' => 'Chinese', 'amount' => 180, 'qty' => 30)));
$dinner[] = array('name' => 'chappathi', 'cousins' => array(array('cousin' => 'indian', 'amount' => 1200, 'qty' => 30), array('cousin' => 'Chinese', 'amount' => 1300, 'qty' => 20)));
$dinner[] = array('name' => 'idly', 'cousins' => array(array('cousin' => 'indian', 'amount' => 1000, 'qty' => 30), array('cousin' => 'Chinese', 'amount' => 2000, 'qty' => 30)));
$dinner[] = array('name' => 'idiyappam', 'cousins' => array(array('cousin' => 'indian', 'amount' => 1020, 'qty' => 30), array('cousin' => 'Chinese', 'amount' => 7000, 'qty' => 70)));
$array = array('breakfast' => $breakfast, 'lunch' => $lunch, 'dinner' => $dinner);
$str = '';
// echo '<pre>';
// print_r($array);
// echo '</pre>';
$sno = 1;
$f = 0;
$g = 0;
foreach ($array as $akey => $a) 
{
    if ($menu == $akey) 
    {
        $h = 0;
        $i = 0;
        $str .= '<tr>';
        $str .= '<td>' . $akey . '</td>';
        $str .= '</tr>';
        foreach ($a as $bkey => $b) 
        {
            // print_r($b['name']);
            // echo '<pre>';
            // print_r($b['cousins']);
            // echo '</pre>';
            $d = 0;
            $e = 0;
            foreach ($b['cousins'] as $c) {
                // print_r($c['cousin']);
                // echo "<br>";
                // print_r($c['qty']);
                // echo "<br>";
                // print_r($c['amount']/$c['qty']);
                if ($cousin == $c['cousin']) {
                    echo "<br>";
                    $str .= '<tr>';
                    $str .= '<td>' . $sno++ . '</td>';
                    $str .= '<td>' . $b['name'] . '</td>';
                    $str .= '<td>' . $c['cousin'] . '</td>';
                    $str .= '<td>' . $c['qty'] . '</td>';
                    $str .= '<td>' . $c['amount'] / $c['qty'] . '</td>';
                    $str .= '<td>' . $c['amount'] . '</td>';
                    $str .= '</tr>';
                    //$str.= '<td>'."Item Name".'</td>';
                    //$str.= '<td>'.$b['name'] .'</td>';
                    //$str.= '<td>'."Total Qty".'</td>';
                    // $str.= '<td>'."Total Amount".'</td>';
                    $d += $c['qty'];
                    $e += $c['amount'];
                    $f += $c['qty'];
                    $g += $c['amount'];
                    $h += $c['qty'];
                    $i += $c['amount'];
                }
            }
            $str .= '<tr>';
            $str .= '<td></td>';
            $str .= '<td></td>';
            $str .= '<td></td>';
            $str .= '<td>' . $d . '</td>';
            $str .= '<td></td>';
            $str .= '<td>' . $e . '</td>';
            $str .= '</tr>';
        }
        $str .= '<tr>';
        $str .= '<td></td>';
        $str .= '<td></td>';
        $str .= '<td></td>';
        $str .= '<td>' . $h . '</td>';
        $str .= '<td></td>';
        $str .= '<td>' . $i . '</td>';
        $str .= '</tr>';
    }
}
$str .= '<tr>';
$str .= '<td></td>';
$str .= '<td></td>';
$str .= '<td></td>';
$str .= '<td>' . $f . '</td>';
$str .= '<td></td>';
$str .= '<td>' . $g . '</td>';
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
            <th>Sno</th>
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