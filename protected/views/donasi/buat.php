<div class="container-fluid" style="background-color:#FFF;max-width:1300px;">
	<div class="row slide hero-container">
			<?php $this->widget('SearchWidget'); ?>	
		<br>
		<?php if(Yii::app()->user->hasFlash('sukses')){ ?>
				<div class="row" style="color:#F1AB17">
					<div class="col-md-offset-3 col-md-6">
					<img src="" height="300">
					<h2>Terima kasih telah berdonasi buku bekas.</h2>
					<p>Kami telah mengirimkan email kepada Anda berupa alamat lengkap tempat buku akan didonasikan serta surat pengantar untuk dapat mengirim buku secara gratis melalui kantor pos.</p>
					<img src="" height="200">
					</div>
				</div>
			<?php } else { ?>
		<div class="row">

			<ul class="expanded-menu">
				<li class="active">Donasi Buku</li>
				<li class="">Kirim Buku</li>
			</ul>
			<hr />
			
			<?php $form=$this->beginWidget('CActiveForm', array(
				'htmlOptions'=>array('class'=>'form-horizontal',
					'enctype' => 'multipart/form-data'),
				// Please note: When you enable ajax validation, make sure the corresponding
				// controller action is handling ajax validation correctly.
				// There is a call to performAjaxValidation() commented in generated controller code.
				// See class documentation of CActiveForm for details on this.
				'enableAjaxValidation'=>false,
			)); ?>
				<h4>Pilih Tujuan Donasi</h4>
				<div class="form-group">
					<label for="destination" class="col-sm-4 control-label">untuk</label>
					<div class="col-sm-4">
						<?php echo $form->dropDownList($model,'tujuan', CHtml::listData(TujuanDonasi::model()->findAll(),'id','nama'),array('prompt'=>'Pilih Tujuan','class'=>'form-control','required'=>'true')); ?>
					</div>
				</div>
				<h4>Keterangan Buku</h4>
				<div class="form-group">
					<label for="bookcount" class="col-sm-4 control-label">Jumlah Buku</label>
					<div class="col-sm-4">
						<?php echo $form->numberField($model,'jumlah',array('class'=>'form-control','required'=>'true')); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="category" class="col-sm-4 control-label">Kategori</label>
					<div class="col-sm-4">
						<?php 
							echo CHtml::dropDownList('Donasi[kategori]','', CHtml::listData(Kategori::model()->findAll(),'id','nama'),
							array('class'=>'form-control','placeholder'=>'Kategori','required'=>'true',
							'ajax' => array(
							'type'=>'POST', //request type
							'url'=>CController::createUrl('donasi/DynamicCategories'), //url to call.
							//Style: CController::createUrl('currentController/methodToCall')
							'update'=>'#Donasi_sub_kategori', //selector to update
							//'data'=>'js:javascript statement' 
							//leave out the data key to pass all form values through
							))); 
						?>
					</div>
				</div>
				<div class="form-group">
					<label for="subcategory" class="col-sm-4 control-label">Sub-Kategori</label>
					<div class="col-sm-4">
						<?php echo $form->dropDownList($model,'sub_kategori',array(),array('prompt'=>'Pilih kategori terlebih dahulu','class'=>'form-control','required'=>'true')); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="description" class="col-sm-4 control-label">Deskripsi</label>
					<div class="col-sm-4">
						<?php echo $form->textArea($model,'deskripsi',array('class'=>'form-control','required'=>'true')); ?>
					</div>
				</div>
				<div class="form-group">
					<label for="message" class="col-sm-4 control-label">Pesan untuk Penerima Donasi</label>
					<div class="col-sm-4">
						<?php echo $form->textArea($model,'pesan',array('class'=>'form-control','required'=>'true')); ?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary btn-lg">Donasikan</button>
					</div>
				</div>
			<?php $this->endWidget(); } ?>
		</div>
	</div>

</div>