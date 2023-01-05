<?php
// $age=26;
// $feet=7;
// $weight=120;
// if($age<18)
// {
//     echo "minor";
// }
// elseif($age>=18 && $age<=20)
// {
//     echo "major";
// }
// elseif($age>20)
// {
//     echo "old man";
// }
// else 
// {
//     echo "Invalid age";    
// }
// echo "<br>";
// if($feet<5.5)
// {
//     echo "shorter";
// }
// elseif($feet<=6 && $feet>=6.5)
// {
//     echo "tall";
// }
// elseif($feet>6.5)
// {
//     echo "taller";
// }
// else 
// {
//     echo "Invalid feet";    
// }
// echo "<br>";
// if($weight>=70 && $weight<=79)
// {
//     echo "lean";
// }
// elseif($weight>=80 && $weight<=100)
// {
//     echo "normal weight";
// }
// elseif($weight>100)
// {
//     echo "over weight";
// }
// else 
// {
//     echo "Invalid weight";    
// }
$person=[];
$person['name']='ragu';
$person['account']='SBI';
$person['ministatement']=true;
$person['ministatementcost']=25;
$person['otheratmcost']=15;
$person['balance_amount']=10000;
$person['withdraw_amount']=6000;

$atm1=[];
$atm2=[];
$atm3=[];
$atm1['atmname']='BOB';
$atm1['available_amount']=2000;
$atm2['atmname']='SBI';
$atm2['available_amount']=3000;
$atm3['atmname']='IOB';
$atm3['available_amount']=10000;
$atm=[$atm1,$atm2,$atm3];
// echo '<pre>';
// print_r($atm);
// echo '</pre>';
// var_dump($person);
// echo "<br>";
$d=$person['withdraw_amount'];//6000
$credit=0;
foreach($atm as $val)
{
    if($d<=$val['available_amount'])
{
    $credit=$person['withdraw_amount'];
    echo $credit.'<br>';
    $d=0;
}
else if($d>$val['available_amount'])
{
    $credit=$credit+$val['available_amount'];
    echo $credit.'<br>';
    $d=$d-$val['available_amount'];
}
        $a=$person['balance_amount']-$person['withdraw_amount'];
         if($person['ministatement']==true)
         {
            if($person['account']==$val['atmname'])
            {
            $b=$person['ministatementcost'];
            $c=$a-$b;
            }
            else
            {
                $b=$person['ministatementcost']+$person['otheratmcost'];
                $c=$a-$b;
                // echo "Withdraw After Balance Amount:".$a;
                // echo "<br>";
                // echo "ATM cost charges:".$b;
                // echo "<br>";
                // echo "ATM cost deducted after balance amount:".$c;
                // break;
            }
         }
    }
    echo 'withdraw amount:' .$credit.'<br>';
    echo "Withdraw After Balance Amount:".$a;
    echo "<br>";
    echo "ATM cost charges:".$b;
    echo "<br>";
    echo "ATM cost deducted after balance amount:".$c;
?>