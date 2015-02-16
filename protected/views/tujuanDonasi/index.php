<?php
/* @var $this TujuanDonasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tujuan Donasis',
);

$this->menu=array(
	array('label'=>'Create TujuanDonasi', 'url'=>array('create')),
	array('label'=>'Manage TujuanDonasi', 'url'=>array('admin')),
);
?>

<h1>Tujuan Donasis</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
