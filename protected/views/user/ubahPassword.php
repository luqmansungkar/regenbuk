<div class="container-fluid" style="background-color:#FFF;max-width:1300px;">
		<div class="row slide hero-container">
			<?php $this->widget('SearchWidget'); ?>	
			<br>
</div>
			<div class="col-md-10 col-md-offset-1" style="padding:15px;min-height:600px">

				<div class="col-md-2"><h3 style="color:#096385">Pengaturan</h3>
			<ul class="nav nav-pills nav-stacked">
 				 <li role="presentation"><a href="<?php echo Yii::app()->request->baseUrl; ?>/user/editprofile">Edit Profile</a></li>
 				 <li role="presentation"><a href="<?php echo Yii::app()->request->baseUrl; ?>/user/ubahpassword">Ganti Password</a></li>
			</ul>
		</div>
<div class="col-md-10">
<?php if(Yii::app()->user->hasFlash('ubahpassword')){ ?>

						<div class="alert alert-success" style="color: green">

							<?php echo Yii::app()->user->getFlash('ubahpassword'); ?>

						</div>

					<?php }elseif (Yii::app()->user->hasFlash('gagalubahpassword')) { ?>
						
						<div class="alert alert-danger" style="color: red">

							<?php echo Yii::app()->user->getFlash('ubahpassword'); ?>

						</div>
					<?php } else { ?>
				<?php $form=$this->beginWidget('CActiveForm', array(
					'htmlOptions'=>array('class'=>'form-horizontal','enctype' => 'multipart/form-data'),
					'enableAjaxValidation'=>false,
				)); ?>
				<?php echo $form->errorSummary($model,'Tolong perbaiki kesalahan berikut:'); ?>
				
					<div class="form-group">
						<label for="instagram" class="col-sm-4 control-label">Password Lama</label>
						<div class="col-sm-6">
							<?php echo $form->passwordField($model,'old_password',array('size'=>30,'maxlength'=>50,'class'=>'form-control')); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="instagram" class="col-sm-4 control-label">Password Baru</label>
						<div class="col-sm-6">
							<?php echo $form->passwordField($model,'new_password',array('size'=>30,'maxlength'=>50,'class'=>'form-control')); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="instagram" class="col-sm-4 control-label">Konfirmasi Password</label>
						<div class="col-sm-6">
							<?php echo $form->passwordField($model,'cpassword',array('size'=>30,'maxlength'=>50,'class'=>'form-control')); ?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<?php echo CHtml::submitButton('Simpan', array(
									'class'=>'btn btn-primary btn-lg')); ?>
						</div>
					</div>
				<?php $this->endWidget(); ?>

				<?php } ?>
				</div>
			</div>
		
	</div>