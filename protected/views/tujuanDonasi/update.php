<?php
/* @var $this TujuanDonasiController */
/* @var $model TujuanDonasi */

$this->breadcrumbs=array(
	'Tujuan Donasis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TujuanDonasi', 'url'=>array('index')),
	array('label'=>'Create TujuanDonasi', 'url'=>array('create')),
	array('label'=>'View TujuanDonasi', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TujuanDonasi', 'url'=>array('admin')),
);
?>

<h1>Update TujuanDonasi <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>