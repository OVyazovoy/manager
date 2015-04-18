
<?php
$this->breadcrumbs=array(
	'Списки',

);
?>

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'form-create',
	'htmlOptions'=>array('style'=>'width:300px;
	margin-left:auto;
    margin-right:auto;
    '),
	'action' => Yii::app()->createUrl('/lists/default/create'),

		));?>

<fieldset>
	<?php echo $form->textFieldControlGroup($model, 'title'); ?>
</fieldset>

<?php echo 	TbHtml::submitButton(TbHtml::icon(TbHtml::ICON_PLUS)); ?>

<?php $this->endWidget(); ?>

<?php $this->widget('bootstrap.widgets.TbGridView', array(
	'dataProvider' => $model->search(),
	'type' => TbHtml::GRID_TYPE_BORDERED,
	'template' => "{items}",
	'htmlOptions'=>array('style'=>'width:300px;
	margin-left:auto;
    margin-right:auto;
    '),
	'hideHeader'=>true,
	'columns' => array(
		array(
			'name' => 'title',
			'type' => 'html',
			'value'=>'CHtml::link(CHtml::encode($data->title),array("/lists/tasks/","id"=>$data->id))',
			'htmlOptions'=>array('style'=>'text-align: center;'),
		),

		array(
				'htmlOptions' => array('style'=>'text-align:center;  '),
				'class'=>'bootstrap.widgets.TbButtonColumn',
				'viewButtonOptions' => array(
					'style' => 'display:none;'
				),
		),
	),

)); ?>
