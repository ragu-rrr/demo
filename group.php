<?php
$employee[]=array('name'=>'manickam','checkin'=>10,"Meridiem"=>"AM",'checkout'=>11,'salary'=>1000,'workhours'=>9,'deductionpercentage'=>10,'overtimecostpercentage'=>15);
$employee[]=array('name'=>'natraj','checkin'=>10,"Meridiem"=>"PM",'checkout'=>7,'salary'=>2000,'workhours'=>9,'deductionpercentage'=>15,'overtimecostpercentage'=>10);
$employee[]=array('name'=>'shiva','checkin'=>9,"Meridiem"=>"PM",'checkout'=>8,'salary'=>1000,'workhours'=>9,'deductionpercentage'=>20,'overtimecostpercentage'=>25);
$employee[]=array('name'=>'gopal','checkin'=>10,"Meridiem"=>"PM",'checkout'=>8,'salary'=>1000,'workhours'=>9,'deductionpercentage'=>30,'overtimecostpercentage'=>5);
$employee[]=array('name'=>'ragu','checkin'=>11,"Meridiem"=>"PM",'checkout'=>11,'salary'=>1000,'workhours'=>9,'deductionpercentage'=>40,'overtimecostpercentage'=>20);
// echo '<pre>';
// print_r($employee);
// echo '</pre>';
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
        <thead>
        <tr>
            <th>Sno</th> 
            <th>Name</th>
            <th>Checkin</th>
            <th>Meridiem</th>
            <th>Checkout</th>
            <th>Workhours</th>
            <th>ActualSalary</th>
            <th>Overtimecost</th>
            <th>GrandTotal</th>
        </tr>
    </thead>
        <tbody>
            <?php
            $sno=1;
            foreach($employee as $a)
            {
                if($a["Meridiem"]=="AM") //AM
                {
                $b=$a['checkout']-$a['checkin']; //11-10=1
                }
                else
                {
                $b=$a['checkout']+12-$a['checkin'];
                }
                //$j=$a['workhours']-$b;
                $d=$a['salary']/100*$a['deductionpercentage']*2; //1000/50
                //$g=$a['salary']/100*$a['overtimecostpercentage'];  //1000/100*15
            $e=0;
            $f=0;
            $g=0;
            $h=0;
            echo '<tr>';
            echo'<td>'.$sno++.'</td>';
            echo '<td>'.$a['name'].'</td>';
            echo'<td>'.$a['checkin'].'</td>';
            echo'<td>'.$a['Meridiem'].'</td>';
            echo'<td>'.$a['checkout'].'</td>';
            echo'<td>'.$b.'</td>';
            if($a['workhours']==$b) //11==9
            {   
                $e=$a['salary']; //                
            }
            else
            {
                if($a['workhours']<=$b) //9<=1
                {
                $e=$a['salary'];                 
                }
                else
                {
                    $e=$a['salary']-$d;
                }
            }
            if($b<=$a['workhours'])
            {
                $g=0;
            }
            else
            {
                if($a['workhours']<=$b)
                {
                    $i=$b-$a['workhours'];
                    $g=$i*$a['salary']/100*$a['overtimecostpercentage'];
                }
            }
            echo '<td>'.$e.'</td>';
            //echo '<td>'.$f.'</td>';
            echo '<td>'.$g.'</td>';
            //echo '<td>'.$h.'</td>';
            $k=$e+$g;
            echo '<td>'.$k.'</td>';
            echo '</tr>';
        }
            ?>
        <tbody>
    </table>
</body>
</html>