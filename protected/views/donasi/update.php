<?php
/* @var $this DonasiController */
/* @var $model Donasi */

$this->breadcrumbs=array(
	'Donasis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Donasi', 'url'=>array('index')),
	array('label'=>'Create Donasi', 'url'=>array('create')),
	array('label'=>'View Donasi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Donasi', 'url'=>array('admin')),
);
?>

<h1>Update Donasi <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>