<div id="isi" style="width:900px;margin:auto">
<?php
/* @var $this TujuanDonasiController */
/* @var $model TujuanDonasi */

$this->breadcrumbs=array(
	'Tujuan Donasis'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TujuanDonasi', 'url'=>array('index')),
	array('label'=>'Manage TujuanDonasi', 'url'=>array('admin')),
);
?>

<h1>Create TujuanDonasi</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

</div>