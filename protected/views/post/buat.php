<div class="container-fluid" style="background-color:#FFF;max-width:1300px;">

	<div class="row slide hero-container">

			<?php $this->widget('SearchWidget'); ?>	

			<br>



			<div class="row">

					<?php $form=$this->beginWidget('CActiveForm', array(

						'htmlOptions'=>array('class'=>'form-horizontal',

							'enctype' => 'multipart/form-data'),

						// Please note: When you enable ajax validation, make sure the corresponding

						// controller action is handling ajax validation correctly.

						// There is a call to performAjaxValidation() commented in generated controller code.

						// See class documentation of CActiveForm for details on this.

						'enableAjaxValidation'=>false,

					)); ?>

						<div class="form-group">
							<h3 style="color:#096385">Pasang Iklan</h3>

							<label for="category" class="col-sm-4 control-label">Kategori</label>

							<div class="col-sm-4">

								<?php 

									echo CHtml::dropDownList('Post[kategori]','', CHtml::listData(Kategori::model()->findAll(),'id','nama'),

									array('class'=>'form-control','placeholder'=>'Kategori','required'=>'true',

									'ajax' => array(

									'type'=>'POST', //request type

									'url'=>CController::createUrl('post/DynamicCategories'), //url to call.

									//Style: CController::createUrl('currentController/methodToCall')

									'update'=>'#Post_sub_kategori', //selector to update

									//'data'=>'js:javascript statement' 

									//leave out the data key to pass all form values through

									))); 

								?>

							</div>

						</div>

						<?php //echo $form->errorSummary($model); ?>

						<div class="form-group">

							<label for="subcategory" class="col-sm-4 control-label">Sub-Kategori</label>

							<div class="col-sm-4">

								<?php echo $form->dropDownList($model,'sub_kategori',array(),array('prompt'=>'Pilih kategori terlebih dahulu','class'=>'form-control','required'=>'true')); ?>

							</div>

						</div>

						<div class="form-group">

							<label for="title" class="col-sm-4 control-label">Judul</label>

							<div class="col-sm-4">

								<?php echo $form->textField($model,'judul',array('size'=>30,'maxlength'=>30,'class'=>'form-control','required'=>'true')); ?>

							</div>

						</div>

						<div class="form-group">

							<label for="province" class="col-sm-4 control-label">Provinsi</label>

							<div class="col-sm-4">

								<?php 

									echo CHtml::dropDownList('Post[provinsi]','', CHtml::listData(Provinsi::model()->findAll(),'id','nama'),

									array('class'=>'form-control','placeholder'=>'Asal Provinsi','required'=>'true',

									'ajax' => array(

									'type'=>'POST', //request type

									'url'=>CController::createUrl('post/dynamiccities'), //url to call.

									//Style: CController::createUrl('currentController/methodToCall')

									'update'=>'#Post_kota', //selector to update

									//'data'=>'js:javascript statement' 

									//leave out the data key to pass all form values through

									))); 

								?>

							</div>

						</div>

						<div class="form-group">

							<label for="city" class="col-sm-4 control-label">Kota</label>

							<div class="col-sm-4">

								<?php echo $form->dropDownList($model,'kota',array(),array('prompt'=>'Pilih provinsi terlebih dahulu','class'=>'form-control','placeholder'=>'Asal Kota','required'=>'true')); ?>

							</div>

						</div>

						<div class="form-group">

							<label for="price" class="col-sm-4 control-label">Harga</label>

							<div class="col-sm-4">

								<?php echo $form->numberField($model,'harga',array('size'=>15,'maxlength'=>15,'class'=>'form-control','required'=>'true')); ?>

							</div>

						</div>

						<div class="form-group">

							<label for="description" class="col-sm-4 control-label">Deskripsi</label>

							<div class="col-sm-4">

								<?php echo $form->textArea($model,'konten',array('class'=>'form-control')); ?>

							</div>

						</div>

						<div class="form-group">

							<label class="col-sm-4 control-label">Upload Foto</label>

							<div class="col-sm-4">

								<div class="fileUpload">

								    <span>+</span>

								    <?php echo CHtml::activeFileField($model, 'foto1',array('class'=>'upload')); ?>

								</div>

								<div class="fileUpload">

								    <span>+</span>

								    <?php echo CHtml::activeFileField($model, 'foto2',array('class'=>'upload')); ?>

								</div>

								<div class="fileUpload">

								    <span>+</span>

								    <?php echo CHtml::activeFileField($model, 'foto3',array('class'=>'upload')); ?>

								</div>

							</div>

						</div>

						<div class="form-group">
							<input type="checkbox" name="vehicle" value="Bike" required> Saya telah membaca dan menerima <a href="http://skebpolicy.strikingly.com">persyaratan dan ketentuan</a> Skebbook<br>

							<div class="col-sm-offset-2 col-sm-12" style="margin-top:20px;margin-left:auto;margin-right:auto">

								<button type="submit" class="btn btn-primary btn-lg">Pasang</button>

							</div>

						</div>

					<?php $this->endWidget(); ?>

			</div>

	</div>



</div>