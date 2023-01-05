<?php
$passengername='ragu';
$destination='Chennai';
$prefered='train';
$gender='male';
$havetravelcost=500;
$readytime=9;
$waitingtime=1;
$ctrain=[];
$ctrain[]=array('name'=>'kex','fair'=>array('male'=>400,'child'=>300),'seats'=>'YES','time'=>"10");
$ctrain[]=array('name'=>'qex','fair'=>array('male'=>400,'child'=>200),'seats'=>'YES','time'=>"10");
$ctrain[]=array('name'=>'aex','fair'=>array('male'=>700,'child'=>300),'seats'=>'YES','time'=>"9");

$cbus=[];
$cbus[]=array('name'=>'chennai','fair'=>array('male'=>900,'child'=>300),'seats'=>'NO','time'=>"all");
$cbus[]=array('name'=>'bengaluru','fair'=>array('male'=>1500,'child'=>700),'seats'=>'YES','time'=>"all");
$cbus[]=array('name'=>'kerala','fair'=>array('male'=>1900,'child'=>600),'seats'=>'YES','time'=>"all");

$ttrain=[];
$ttrain[]=array('name'=>'kex','fair'=>array('male'=>400,'child'=>300),'seats'=>'YES','time'=>"8");
$ttrain[]=array('name'=>'qex','fair'=>array('male'=>400,'child'=>800),'seats'=>'YES','time'=>"10");
$ttrain[]=array('name'=>'aex','fair'=>array('male'=>450,'child'=>300),'seats'=>'YES','time'=>"10");

$tbus=[];
$tbus[]=array('name'=>'thirunelveli','fair'=>array('male'=>1000,'child'=>200),'seats'=>'NO','time'=>"all");
$tbus[]=array('name'=>'bengaluru','fair'=>array('male'=>1500,'child'=>300),'seats'=>'YES','time'=>"all");
$tbus[]=array('name'=>'kerala','fair'=>array('male'=>1900,'child'=>300),'seats'=>'YES','time'=>"all");
$routes=array('Chennai'=>array('train'=>$ctrain,'bus'=>$cbus),'Thirunelveli'=>array('train'=>$ttrain,'bus'=>$tbus));

// find best route with best fair

// echo '<pre>';
// print_r($routes);
// echo '<pre>';
 $a=$routes[$destination];
// echo '<pre>';
// print_r($a);
// echo '<pre>';
 $b=$a[$prefered];
//  echo '<pre>';
//  print_r($b); 
//  echo '<pre>';
// echo $routes['Chennai']['train'][0]['name'];
$msg='No trains availbale';  //run   $msg='No trains availbale'
foreach($b as $value)
{
    //  echo '<pre>';
    //  print_r($value);
    //  echo '<pre>';
      if($havetravelcost>$value['fair'][$gender] && $value['seats']=='YES')  
      {
        if(($readytime+$waitingtime)<=$value['time'] )
        {
            $msg= "<br>Best Train Routes is = ".$value['name'];
            break;
        }
      }
}   
echo $msg;
?>    