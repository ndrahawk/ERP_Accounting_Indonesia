<?php
Yii::app()->clientScript->registerScriptFile(Yii::app()->getClientScript()->getCoreScriptUrl() . '/jui/css/2jui-bootstrap/js/jquery-ui-1.8.16.custom.min.js');
Yii::app()->clientScript->registerCssFile(Yii::app()->getClientScript()->getCoreScriptUrl() . '/jui/css/2jui-bootstrap/jquery-ui.css');
Yii::app()->getClientScript()->registerCoreScript('maskedinput');

Yii::app()->clientScript->registerScript('periode_date', "
		$(function() {
		$( \"#" . CHtml::activeId($model, 'periode_date') . "\" ).datepicker({
			
		'dateFormat' : 'yymm',
});
		$( \"#" . CHtml::activeId($model, 'periode_date') . "\" ).mask('999999');
});

		");
?>


<?php
$this->breadcrumbs = array(
    'Account Report',
);
?>

<div class="page-header">
    <h1>
<?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/icon/report.png') ?>
        Accounting Report
    </h1>
</div>



<?php
$form = $this->beginWidget('TbActiveForm', array(
    'id' => 'allocation-form',
    'enableAjaxValidation' => false, 'type' => 'horizontal',
        ));
?>


<?php echo $form->errorSummary($model); ?>

<div class="control-group">
<?php echo $form->labelEx($model, 'some_date', array('class' => 'control-label')); ?>

    <div class="controls">

<?php
$this->widget('ext.EJuiMonthPicker.EJuiMonthPicker', array(
    'model' => $model,
    'attribute' => 'periode_date',
    'options' => array(
        'yearRange' => '-5:+0',
        'dateFormat' => 'yymm',
    ),
        //'htmlOptions'=>array(
        //    'onChange'=>'js:doSomething()',
        //),
));
?>
    </div>
</div>

<?php echo $form->dropDownListRow($model, 'report_id', tAccountReport::accountReportList()); ?>

<div class="form-actions">
<?php echo CHtml::htmlButton('<i class="icon-print"></i> Report', array('class' => 'btn', 'type' => 'submit')); ?>
</div>

<?php $this->endWidget(); ?>

