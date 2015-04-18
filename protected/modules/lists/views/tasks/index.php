<?php
$this->breadcrumbs=array(
	'Списки'=>array('/lists/'),
	'Список задач',);
?>
<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'form-create',
	'htmlOptions'=>array('style'=>'width:600px;
	margin-left:auto;
    margin-right:auto;
    '),
/*	'action' => Yii::app()->createUrl('/lists/tasks/create'),*/
));?>

	<fieldset>
		<?php echo $form->textFieldControlGroup($model, 'title'); ?>
		<?php echo $form->textArea($model, 'note'); ?>


	</fieldset>

<?php echo 	TbHtml::submitButton(TbHtml::icon(TbHtml::ICON_PLUS)); ?>

<?php $this->endWidget(); ?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'dataProvider' => $model->search(),
	'filter'=>$model,
	'type' => TbHtml::GRID_TYPE_BORDERED,
	'template' => "{items}",
	'hideHeader'=>false,
	'htmlOptions'=>array('style'=>'width:600px;
	margin-left:auto;
    margin-right:auto;
    '),
	'columns' => array(
		array(
			'name' => 'title',
			'type' => 'html',
			'value'=>'CHtml::link(CHtml::encode($data->title),array("/lists/tasks/update","id"=>$data->id))',
			'htmlOptions'=>array('style'=>'width:200px; text-align:center;'),
		),
		'note',
		array(
			'htmlOptions' => array('style'=>'text-align:center;  '),
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'viewButtonOptions' => array(
				'style' => 'display:none;'
			),
			'updateButtonOptions' => array(
				'style' => 'display:none;'
			),
		),

	),

)); ?>