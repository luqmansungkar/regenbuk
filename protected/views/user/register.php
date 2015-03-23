<div class="container-fluid" style="background-color:#FFF;max-width:1200px;">
		<div class="row slide hero-container">
			<div class="col-md-12">
				<?php $this->widget('SearchWidget'); ?>	
				<br>

				<?php if(Yii::app()->user->hasFlash('terdaftar')){ ?>
						<div class="alert alert-success" style="color: green">
							<?php echo Yii::app()->user->getFlash('terdaftar'); ?>
						</div>
					<?php } else { ?>
				<div class="row">
					<ul class="expanded-menu">
						<li class="active">Registrasi</li>
						<li class="">Profile</li>
					</ul>
					<hr />
					<div class="row">
						<div class="col-md-6">
							<img src="http://placehold.it/500x500">
						</div>
						<div class="col-md-6">
							<h1 style="font-weight:bold;color:#F0AB18">Registrasi</h1>
							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'user-form',
								'htmlOptions'=>array('class'=>'expanded-form','role'=>'form','data-toggle'=>'validator'),
								// Please note: When you enable ajax validation, make sure the corresponding
								// controller action is handling ajax validation correctly.
								// There is a call to performAjaxValidation() commented in generated controller code.
								// See class documentation of CActiveForm for details on this.
							)); ?>
								<?php if($form->errorSummary($model) != ''){ ?>
								<div class="alert alert-danger alert-dismissible" role="alert">
								  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								  <?php echo $form->errorSummary($model,'Tolong perbaiki kesalahan berikut:'); ?>
								</div>
								<?php } ?>
								<div class="row col-md-12">
									<div class="col-md-6 form-group">
										<?php echo $form->textField($model,'nama',array('size'=>30,'maxlength'=>30,'class'=>'form-control','placeholder'=>'Nama Lengkap','required'=>'true','data-error'=>'Silahkan isi Nama Lengkap anda')); ?>
										<div class="help-block with-errors"></div>
										<?php //echo $form->error($model,'nama'); ?>
									</div>
									<div class="col-md-6 form-group">
										<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255,'class'=>'form-control','placeholder'=>'Password','required'=>'true','data-error'=>'Silahkan isi Password anda')); ?>
										<div class="help-block with-errors"></div>
										<?php //echo $form->error($model,'password'); ?>
									</div>
								</div>
								<div class="row col-md-12">
									<div class="col-md-6 form-group">
										<?php echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30,'class'=>'form-control','placeholder'=>'Nama Tampilan (Profile)','required'=>'true','data-error'=>'Silahkan isi Nama Tampilan (Profile) anda')); ?>
										<div class="help-block with-errors"></div>
										<?php //echo $form->error($model,'username'); ?>
									</div>
									<div class="col-md-6 form-group">
										<?php echo $form->passwordField($model,'cpassword',array('size'=>60,'maxlength'=>255,'class'=>'form-control','placeholder'=>'Konfirmasi Password','required'=>'true','data-error'=>'Silahkan isi Konfirmasi Password anda')); ?>
										<div class="help-block with-errors"></div>
										<?php //echo $form->error($model,'cpassword'); ?>
									</div>
								</div>
								<div class="row col-md-12">
									<div class="col-md-6 form-group">
										<?php echo $form->emailField($model,'email',array('size'=>30,'maxlength'=>30,'class'=>'form-control','placeholder'=>'Email','required'=>'true','data-error'=>'Silahkan isi Email anda')); ?>
										<div class="help-block with-errors"></div>
										<?php //echo $form->error($model,'email'); ?>
									</div>
									<div class="col-md-6 form-group">
										<?php echo $form->numberField($model,'telepon',array('size'=>15,'maxlength'=>15,'class'=>'form-control','placeholder'=>'Nomor Telepon','required'=>'true','data-error'=>'Silahkan isi nomor telepon anda','pattern'=>"^([+0-9]){3,}$")); ?>
										<div class="help-block with-errors"></div>
										<?php //echo $form->error($model,'telepon'); ?>
									</div>
								</div>
								<div class="row col-md-12">
									<div class="col-md-6 form-group">
										<?php 
											echo CHtml::dropDownList('User[provinsi]','', CHtml::listData(Provinsi::model()->findAll(),'id','nama'),
											array('class'=>'form-control','placeholder'=>'Asal Provinsi','required'=>'true','data-error'=>'Silahkan isi provinsi anda',
											'ajax' => array(
											'type'=>'POST', //request type
											'url'=>CController::createUrl('user/dynamiccities'), //url to call.
											//Style: CController::createUrl('currentController/methodToCall')
											'update'=>'#User_kota', //selector to update
											//'data'=>'js:javascript statement' 
											//leave out the data key to pass all form values through
											))); 
										?>
										<div class="help-block with-errors"></div>
									</div>
									<div class="col-md-6 form-group">
										<?php echo $form->dropDownList($model,'kota',array(),array('prompt'=>'Pilih provinsi terlebih dahulu','class'=>'form-control','placeholder'=>'Asal Kota','required'=>'true','data-error'=>'Silahkan isi kota anda')); ?>
										<div class="help-block with-errors"></div>
										<?php //echo $form->error($model,'kota'); ?>
									</div>
								</div>
								<?php echo CHtml::submitButton('Daftar', array(
									'class'=>'btn btn-primary btn-lg')); ?>
							<?php $this->endWidget(); ?>
						</div>
					</div>
					
				</div>
				<?php } ?>
			</div>
		</div>
	</div>