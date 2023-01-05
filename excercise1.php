<?php
// $year=2021;
// if((0==$year%4) && (0!=$year%100) || (0==$year%400))
// {
//     echo $year." this leap year";
// }
// else
// {
//     echo $year."this not leap year";
// }
//$array=array('male'=>[12,3,29,6,67,7,74,8,31,9,45,6,56,8],'female'=>[33,4,23,4,45,3,45,56,34,5,6,56]);
// echo '<pre>';
// print_r($array);
// echo '<pre>';
// $a=$array['male'];
// echo '<pre>';
// print_r($a);
// echo '<pre>';
//echo "minimum value:";
//echo (min($a));
/*$min=0;
$x=0;
$index=0;
foreach($array as $b)
{
    $x=0;
    foreach($b as $key=>$value)
    {
        echo $value.'=>';
        if($x==0)
        {
            $min=$value;
            
        }
        else
        {
          if($min >$value){
          $min=$value;
          $index=$key;
        }
    }
    $x++;     
}
echo $min.'<br>index:'. $index.'<br>';
}*/
/* task 1*/
//find sum of the array malesum,femalesum
// echo array_sum($array['male']).'<br>';
// echo array_sum($array['female']);
//echo "malesum = ". array_sum($array['male']).'<br>';
//echo "femalesum = ". array_sum($array['female']).'<br>','<br>';
/*$malesum=0;
$femalesum=0;
foreach($array as $gen=>$arr)
{
    foreach($arr as $key=>$value)
    {
        // echo $gen;
    if($gen=='male')
    {
        //echo $value.'<br>';
        $malesum+=$value;
    }
    else
    {
        $femalesum+=$value;
    }
}
}
echo "array sum:".$malesum.'<br>';
echo "array sum:".$femalesum.'<br>';*/
// echo "array sum:",$femalesum;
// /* task 2 */
//  // find the only number greater than 10 in both arrays above
//  echo '<pre>';
//  print_r($array);
//  echo '<pre>';
//  $b=$array['male'];
//  $c=$array['female'];
//  echo '<pre>';
//  print_r($b);
//  echo '<pre>';
//  echo '<pre>';
//  print_r($c);
//  echo '<pre>';
//$c= array_push($a);
/*$b=[];
$b['male']=[];
$b['female']=[];
//print_r($b);
foreach($array as $key=>$a)
{
    echo '<br>'.$key.'<br>';
    foreach($a as $val)
    {
       
        if($val>=10)
        {
           //echo $key.'<br>';
          //echo $a;
          echo $val.'<br>';
          array_push($b[$key],$val);
          //echo $key;
          //echo $val.'<br>';
        }
    }
}*/
//  echo '<pre>';
//  print_r($b);
//  echo '<pre>';
//print_r($b);
 /* task 3 */
 // find average of both arrays;

