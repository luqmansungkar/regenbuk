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
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="col-lg-12">
		<div class="form-group">
			<label><?php echo $form->labelEx($model,'nama'); ?></label>
			<?php echo $form->textField($model,'nama',array('size'=>30,'maxlength'=>30, 'class' => 'form-control')); ?>
			<p class="help-block"><?php echo $form->error($model,'nama'); ?></p>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			<label><?php echo $form->labelEx($model,'username'); ?></label>
			<?php echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30, 'class' => 'form-control')); ?>
			<p class="help-block"><?php echo $form->error($model,'username'); ?></p>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			<label><?php echo $form->labelEx($model,'email'); ?></label>
			<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30, 'class' => 'form-control')); ?>
			<p class="help-block"><?php echo $form->error($model,'email'); ?></p>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			<label><?php echo $form->labelEx($model,'password'); ?></label>
			<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
			<p class="help-block"><?php echo $form->error($model,'password'); ?></p>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			<label><?php echo $form->labelEx($model,'provinsi'); ?></label>
			<?php echo $form->textField($model,'provinsi', array('class' => 'form-control')); ?>
			<p class="help-block"><?php echo $form->error($model,'provinsi'); ?></p>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			<label><?php echo $form->labelEx($model,'kota'); ?></label>
			<?php echo $form->textField($model,'kota', array('class' => 'form-control')); ?>
			<p class="help-block"><?php echo $form->error($model,'kota'); ?></p>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			<label><?php echo $form->labelEx($model,'telepon'); ?></label>
			<?php echo $form->textField($model,'telepon',array('size'=>15,'maxlength'=>15,'class' => 'form-control')); ?>
			<p class="help-block"><?php echo $form->error($model,'telepon'); ?></p>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			<label><?php echo $form->labelEx($model,'pendidikan'); ?></label>
			<?php echo $form->textField($model,'pendidikan',array('size'=>20,'maxlength'=>20,'class' => 'form-control')); ?>
			<p class="help-block"><?php echo $form->error($model,'pendidikan'); ?></p>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			<label><?php echo $form->labelEx($model,'bb'); ?></label>
			<?php echo $form->textField($model,'bb',array('size'=>10,'maxlength'=>10,'class' => 'form-control')); ?>
			<p class="help-block"><?php echo $form->error($model,'bb'); ?></p>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			<label><?php echo $form->labelEx($model,'fb'); ?></label>
			<?php echo $form->textField($model,'fb',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
			<p class="help-block"><?php echo $form->error($model,'fb'); ?></p>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			<label><?php echo $form->labelEx($model,'twitter'); ?></label>
			<?php echo $form->textField($model,'twitter',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
			<p class="help-block"><?php echo $form->error($model,'twitter'); ?></p>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			<label><?php echo $form->labelEx($model,'ig'); ?></label>
			<?php echo $form->textField($model,'ig',array('size'=>60,'maxlength'=>100,'class' => 'form-control')); ?>
			<p class="help-block"><?php echo $form->error($model,'ig'); ?></p>
		</div>
	</div>

	<div class="col-lg-12">
		<div class="form-group">
			<label><?php echo $form->labelEx($model,'bio'); ?></label>
			<?php echo $form->textArea($model,'bio',array('rows'=>6, 'cols'=>50,'class' => 'form-control')); ?>
			<p class="help-block"><?php echo $form->error($model,'bio'); ?></p>
		</div>
	</div>

	<div class="col-lg-12">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class' => 'btn btn-primary btn-lg')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->