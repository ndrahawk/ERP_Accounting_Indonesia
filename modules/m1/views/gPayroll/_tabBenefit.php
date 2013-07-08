<?php
$this->widget('TbGridView', array(
    'id' => 'g-payroll-benefit-grid',
    'dataProvider' => gPayrollBenefit::model()->search($model->id),
    //'filter'=>$model,
    'template' => '{items}',
    'htmlOptions' => array("style" => "padding-top:0px"),
    'columns' => array(
        'benefit_id',
        'yearmonth_start',
        'yearmonth_end',
        'amount',
        'remark',
    //array(
    //	'class'=>'CButtonColumn',
    //),
    ),
));
?>

<h4>New Benefit</h4>

<?php
echo $this->renderPartial('_formBenefit', array('model' => $modelPayrollBenefit));
