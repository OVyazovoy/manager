<?php
/* @var $this DefaultController */
/* @var $model TaskList */

$this->breadcrumbs=array(
	'Task Lists'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List TaskList', 'url'=>array('index')),
	array('label'=>'Create TaskList', 'url'=>array('create')),
	array('label'=>'Update TaskList', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TaskList', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TaskList', 'url'=>array('admin')),
);
?>

<h1>View TaskList #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_user',
		'title',
		'date',
	),
)); ?>
