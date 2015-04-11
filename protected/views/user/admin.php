<?php $this->layout = 'admin'; ?>
<div id="page-wrapper">
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
        'provinsi',
        
        'kota',
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
)); ?>
</div>