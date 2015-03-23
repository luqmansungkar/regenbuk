<?php
/* @var $this TujuanDonasiController */
/* @var $model TujuanDonasi */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tujuan-donasi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kontak'); ?>
		<?php echo $form->textField($model,'kontak',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kontak'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telepon'); ?>
		<?php echo $form->textField($model,'telepon',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telepon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profil'); ?>
		<?php echo $form->textField($model,'profil',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'profil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tujuan'); ?>
		<?php echo $form->textField($model,'tujuan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tujuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tentang'); ?>
		<?php echo $form->textField($model,'tentang',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tentang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fb'); ?>
		<?php echo $form->textField($model,'fb',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'youtube'); ?>
		<?php echo $form->textField($model,'youtube',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'youtube'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->