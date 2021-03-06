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
				<?php $form=$this->beginWidget('CActiveForm', array(
					'htmlOptions'=>array('class'=>'form-horizontal','enctype' => 'multipart/form-data'),
					// Please note: When you enable ajax validation, make sure the corresponding
					// controller action is handling ajax validation correctly.
					// There is a call to performAjaxValidation() commented in generated controller code.
					// See class documentation of CActiveForm for details on this.
					'enableAjaxValidation'=>false,
				)); ?>
				<?php echo $form->errorSummary($model,'Tolong perbaiki kesalahan berikut:'); ?>
					<div class="form-group">
						<label class="col-sm-4 control-label">Upload Foto Diri</label>
						<div class="col-sm-8" style="text-align:left">
							<div class="fileUpload" style="text-align:center">
								<span>+</span>
								<?php echo CHtml::activeFileField($model, 'foto',array('class'=>'upload')); ?>
							</div>
							<div>Ukuran maksimum gambar 4 MB (jpg, jpeg, png)</div>
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-4 control-label">Alamat Lengkap</label>
						<div class="col-sm-8">
							<?php echo $form->textField($model,'alamat',array('size'=>30,'maxlength'=>50,'class'=>'form-control')); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="education" class="col-sm-4 control-label">Pendidikan</label>
						<div class="col-sm-8">
							<?php echo $form->textField($model,'pendidikan',array('size'=>30,'maxlength'=>50,'class'=>'form-control')); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="facebook" class="col-sm-4 control-label">Alamat Facebook</label>
						<div class="col-sm-8">
							<?php echo $form->textField($model,'fb',array('size'=>30,'maxlength'=>50,'class'=>'form-control')); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="twitter" class="col-sm-4 control-label">Alamat Twitter</label>
						<div class="col-sm-8">
							<?php echo $form->textField($model,'twitter',array('size'=>30,'maxlength'=>50,'class'=>'form-control')); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="instagram" class="col-sm-4 control-label">Alamat Instagram</label>
						<div class="col-sm-8">
							<?php echo $form->textField($model,'ig',array('size'=>30,'maxlength'=>50,'class'=>'form-control')); ?>
						</div>
					</div>
					<div class="form-group">
						<label for="bio" class="col-sm-4 control-label">Bio</label>
						<div class="col-sm-8">
							<?php echo $form->textArea($model,'bio',array('class'=>'form-control')); ?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<?php echo CHtml::submitButton('Simpan', array(
									'class'=>'btn btn-primary btn-lg')); ?>
						</div>
					</div>
				<?php $this->endWidget(); ?>
				</div>
			</div>
		
	</div>