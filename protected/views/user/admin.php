<?php $this->layout = 'admin'; ?>

<div id="page-wrapper">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Users</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Manage User
                </div>
                <div class="panel-body">
                    
<?php $this->widget('zii.widgets.grid.CGridView', array(

    'id'=>'user-grid',

    'dataProvider'=>$model->search(),

    'filter'=>$model,

    'columns'=>array(

        'id',

        'nama',

        'username',

        'email',

        //'password',

        //'provinsi',

        array(
            'name'=>'provinsi',
            'value'=>'Provinsi::model()->findByPk($data->provinsi)->nama',
            ),

        //'kota',

        array(
            'name'=>'kota',
            'value'=>'Kota::model()->findByPk($data->kota)->nama',
            ),

        'telepon',

        /*'pendidikan',

        'bb',

        'fb',

        'twitter',

        'ig',

        'bio',

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