<?php
/* @var $this DefaultController */
/* @var $model TaskList */
$this->menu=array(
	array('label'=>'List TaskList', 'url'=>array('index')),
);
?>

<h1>Редактировать список "<?php echo $model->title; ?>"</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>