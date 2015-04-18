<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'user-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
		'htmlOptions'=>array(
			'style'=>'text-align:center'
		)
	)); ?>
<h1>Регистрация</h1>
	<p class="note">Обязательные поля <span class="required">*</span> </p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pass'); ?>
		<?php echo $form->passwordField($model,'pass',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'pass'); ?>
	</div>


	<?php if(CCaptcha::checkRequirements()): ?>
		<div class="row">
			<?php echo $form->labelEx($model,'verifyCode'); ?>
			<div>
				<?php $this->widget('CCaptcha');?>
				<?php
				echo '</br>';
				echo $form->textField($model,'verifyCode'); ?>
			</div>
			<?php echo $form->error($model,'verifyCode'); ?>
		</div>
	<?php endif; ?>


	<div class="buttons">
		<?php echo CHtml::submitButton('Регистрация'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->