<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

?>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions'=>array(
		'style'=>'text-align:center'
	)
)); ?>

	<h1>Войти</h1>
	<p class="note">Обязательніе поля<span class="required">*</span> </p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
	<div class="link">
		<?php echo CHtml::link('Регистрация',array('site/registration')); ?>

	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Войти'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<?php /*echo TbHtml::beginFormTb(TbHtml::FORM_LAYOUT_HORIZONTAL); */?><!--
<?php /*echo TbHtml::textFieldControlGroup('username', '',
	array('label' => 'username', 'placeholder' => 'username')); */?>
<?php /*echo TbHtml::passwordFieldControlGroup('password', '',
	array('label' => 'Password', 'placeholder' => 'Password')); */?>
<?php /*echo TbHtml::checkBoxControlGroup('rememberMe', false, array(
	'label' => 'Remember me',
	'controlOptions' => array('after' => TbHtml::submitButton('Sign in')),
)); */?>
--><?php /*echo TbHtml::endForm(); */?>