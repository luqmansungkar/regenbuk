
<?php $this->layout = 'admin'; ?>
<div id="page-wrapper">
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
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Tujuan Donasi</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Form Tujuan Donasi
                </div>
                <div class="panel-body">
					<?php $this->renderPartial('_form', array('model'=>$model)); ?>
                </div>
            </div>
        </div>
    </div>

</div>