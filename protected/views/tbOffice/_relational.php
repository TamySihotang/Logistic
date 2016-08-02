 <?php
/* @var $this RrCimyUefDataController */
/* @var $model RrCimyUefData */

$this->breadcrumbs=array(
    'Rr Cimy Uef Datas'=>array('index'),
    'Create',

);
?>



<?php
$this->widget(
    'booster.widgets.TbDetailView',
    array(
        'data'=> $model,
        'attributes'=>array(
            'id_office',
            'branch_office',
            'address_office',
            'email_office',
            'phone_office',
        ),
    )
);
?>
