<?php
/* @var $this DonasiController */
/* @var $model Donasi */

$this->breadcrumbs=array(
	'Donasis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Donasi', 'url'=>array('index')),
	array('label'=>'Create Donasi', 'url'=>array('create')),
	array('label'=>'Update Donasi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Donasi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Donasi', 'url'=>array('admin')),
);
?>

<h1>View Donasi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_user',
		'tujuan',
		'jumlah',
		'kategori',
		'sub_kategori',
		'deskripsi',
		'pesan',
	),
)); ?>
