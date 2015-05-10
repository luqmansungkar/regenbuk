<?php $this->layout = 'admin'; ?>
<div id="page-wrapper">
<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>


    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Update User <?php echo $model->id; ?></h1>
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