<?php $this->layout = 'admin'; ?>
<div id="page-wrapper">
<?php
/* @var $this TujuanDonasiController */
/* @var $model TujuanDonasi */

$this->breadcrumbs=array(
	'Tujuan Donasis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TujuanDonasi', 'url'=>array('index')),
	array('label'=>'Create TujuanDonasi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tujuan-donasi-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Tujuan Donasi</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Manage Tujuan Donasi
                </div>
                <div class="panel-body">
                	<p>
					You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
					or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
					</p>

					<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
					<div class="search-form" style="display:none">
					<?php $this->renderPartial('_search',array(
						'model'=>$model,
					)); ?>
					</div><!-- search-form -->


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tujuan-donasi-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		'alamat',
		'kontak',
		'telepon',
		'email',
		/*
		'profil',
		'tujuan',
		'tentang',
		'fb',
		'youtube',
		'website',
		'foto',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
        'itemsCssClass'=>'table table-striped table-bordered table-hover',
)); ?>
                </div>
            </div>
        </div>
    </div>



</div>