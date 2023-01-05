<?php
$malecount=0;
$femalecount=0;
$genders=['male','female','male','male','female','male','male','female','male'];
//echo count($genders);
//echo sizeof($genders).'<br>';
foreach($genders as $a)
{
    if($a=='male')
    {
        $malecount=$malecount+1;
    }
    else
    {
        $femalecount=$femalecount+1;
    }
}
echo $malecount.'<br>';     //6
echo $femalecount.'<br>';  //3
 ?>