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

	<div class="col-lg-12">
        <div class="form-group">
            <label><?php echo $form->labelEx($model,'nama'); ?></label>
            <?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
            <p class="help-block"><?php echo $form->error($model,'nama'); ?></p>
        </div>
	</div>

	<div class="col-lg-12">
        <div class="form-group">
            <label><?php echo $form->labelEx($model,'alamat'); ?></label>
            <?php echo $form->textField($model,'alamat',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
            <p class="help-block"><?php echo $form->error($model,'alamat'); ?></p>
        </div>
	</div>

	<div class="col-lg-12">
        <div class="form-group">
            <label><?php echo $form->labelEx($model,'kontak'); ?></label>
            <?php echo $form->textField($model,'kontak',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
            <p class="help-block"><?php echo $form->error($model,'kontak'); ?></p>
        </div>
	</div>

	<div class="col-lg-12">
        <div class="form-group">
            <label><?php echo $form->labelEx($model,'telepon'); ?></label>
            <?php echo $form->textField($model,'telepon',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
            <p class="help-block"><?php echo $form->error($model,'telepon'); ?></p>
        </div>
	</div>

	<div class="col-lg-12">
        <div class="form-group">
            <label><?php echo $form->labelEx($model,'email'); ?></label>
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
            <p class="help-block"><?php echo $form->error($model,'email'); ?></p>
        </div>
	</div>

	<div class="col-lg-12">
        <div class="form-group">
            <label><?php echo $form->labelEx($model,'profil'); ?></label>
            <?php echo $form->textField($model,'profil',array('size'=>60,'maxlength'=>500, 'class' => 'form-control')); ?>
            <p class="help-block"><?php echo $form->error($model,'profil'); ?></p>
        </div>
	</div>

	<div class="col-lg-12">
        <div class="form-group">
            <label><?php echo $form->labelEx($model,'tujuan'); ?></label>
            <?php echo $form->textField($model,'tujuan',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
            <p class="help-block"><?php echo $form->error($model,'tujuan'); ?></p>
        </div>
	</div>

	<div class="col-lg-12">
        <div class="form-group">
            <label><?php echo $form->labelEx($model,'tentang'); ?></label>
            <?php echo $form->textField($model,'tentang',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
            <p class="help-block"><?php echo $form->error($model,'tentang'); ?></p>
        </div>
	</div>

	<div class="col-lg-12">
        <div class="form-group">
            <label><?php echo $form->labelEx($model,'fb'); ?></label>
            <?php echo $form->textField($model,'fb',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
            <p class="help-block"><?php echo $form->error($model,'fb'); ?></p>
        </div>
	</div>

	<div class="col-lg-12">
        <div class="form-group">
            <label><?php echo $form->labelEx($model,'youtube'); ?></label>
            <?php echo $form->textField($model,'youtube',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
            <p class="help-block"><?php echo $form->error($model,'youtube'); ?></p>
        </div>
	</div>

	<div class="col-lg-12">
        <div class="form-group">
            <label><?php echo $form->labelEx($model,'website'); ?></label>
            <?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
            <p class="help-block"><?php echo $form->error($model,'website'); ?></p>
        </div>
	</div>

	<div class="col-lg-12">
        <div class="form-group">
            <label><?php echo $form->labelEx($model,'foto'); ?></label>
            <?php echo $form->textField($model,'foto',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
            <p class="help-block"><?php echo $form->error($model,'foto'); ?></p>
        </div>
	</div>

	<div class="col-lg-12">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->