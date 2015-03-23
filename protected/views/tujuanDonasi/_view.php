<?php
/* @var $this TujuanDonasiController */
/* @var $data TujuanDonasi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kontak')); ?>:</b>
	<?php echo CHtml::encode($data->kontak); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telepon')); ?>:</b>
	<?php echo CHtml::encode($data->telepon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profil')); ?>:</b>
	<?php echo CHtml::encode($data->profil); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tujuan')); ?>:</b>
	<?php echo CHtml::encode($data->tujuan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tentang')); ?>:</b>
	<?php echo CHtml::encode($data->tentang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fb')); ?>:</b>
	<?php echo CHtml::encode($data->fb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('youtube')); ?>:</b>
	<?php echo CHtml::encode($data->youtube); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
	<?php echo CHtml::encode($data->foto); ?>
	<br />

	*/ ?>

</div>