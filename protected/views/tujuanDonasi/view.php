<?php
/* @var $this TujuanDonasiController */
/* @var $model TujuanDonasi */

$this->breadcrumbs=array(
	'Tujuan Donasis'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TujuanDonasi', 'url'=>array('index')),
	array('label'=>'Create TujuanDonasi', 'url'=>array('create')),
	array('label'=>'Update TujuanDonasi', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TujuanDonasi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TujuanDonasi', 'url'=>array('admin')),
);
?>

<h1>View TujuanDonasi #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
