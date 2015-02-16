<?php
/* @var $this DonasiController */
/* @var $model Donasi */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_user'); ?>
		<?php echo $form->textField($model,'id_user'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tujuan'); ?>
		<?php echo $form->textField($model,'tujuan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jumlah'); ?>
		<?php echo $form->textField($model,'jumlah'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kategori'); ?>
		<?php echo $form->textField($model,'kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sub_kategori'); ?>
		<?php echo $form->textField($model,'sub_kategori'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pesan'); ?>
		<?php echo $form->textArea($model,'pesan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->