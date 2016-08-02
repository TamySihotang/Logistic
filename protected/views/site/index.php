<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
<a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=tbOffice/summary2">spareable</a><br><br>
<?php
function initialize_2d($m, $value = 0) {
    $result = array();
    for ($i=1; $i <= $m ; $i++) {
        for ($j=1; $j <= $m ; $j++) { 
            $result['r'.$i]['c'.$j] = 0;
         }
    }
    return $result;
}

function convert_2d($m_arr){
    $matrix_arr = initialize_2d(sizeof($m_arr));
    foreach($m_arr as $sub_arr)
    {
        $matrix_arr[$sub_arr[0]][$sub_arr[1]] = $sub_arr[2];
    }
    return $matrix_arr;
}

function print_2d($matrix_arr){
    $table_html = '';
    $table_html .= '<table>
                    <tr><td></td>';
    foreach ($matrix_arr as $matrix_subarr) {
        foreach ($matrix_subarr as $key => $value) {
            $table_html .= '<td>'.$key.'</td>';
        }
        break;
    }
    foreach ($matrix_arr as $key => $matrix_subarr) {
        $table_html .= '<tr>
                    <td>'.$key.'</td>';
        foreach ($matrix_subarr as $value) {
        $table_html .='<td>'.$value.'</td>';
        }
        $table_html .=  '</tr>';
    }
    $table_html .= '</table>';
    return $table_html;
}

 $m_arr = array(array("r1","c1","1"),array("r2","c2","4"),array("r3","c3","3"));

    $matrix_arr = convert_2d($m_arr);
    $table_html = print_2d($matrix_arr);

    echo $table_html;
?>

<?php
$model = new TbOffice();
$a = $model->branch_office;
$x = TbOffice::model()->findAllByAttributes(array('branch_office'=>'balikpapan'));
$y = TbOffice::model()->find();
print_r($y);

//print_r(die);

$token = array('Technology', 'languange', 'town', 'gadget', 'smartphone');
        $num = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25);
        $counttoken = count($token);
        $k = 0;
        foreach($token as $value)
        {
            echo "<tr><td>".$value."</td>"; // here i am just printing the token value like 'Technology'
            for($i=0; $i<$counttoken;$i++)
            {
                if(isset($num[$i+$k]))
                {
                    echo "<td>" .$num[$i+$k]. "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";// for first loop of token it will print value of $num[0] to $num[4] means 1,2,3,4,5 and for second loop of token it will print $num[5+0] to $num [5+4] means 6,7,8,9,10 etc
                }
                else
                {
                    echo "<td>&nbsp;</td>";
                }
            }
            $k=$k+$counttoken;     // increase the value of $k for spliting $num array in 5 interval
            echo "</tr><br>"; // for new line
        }       
        ?>