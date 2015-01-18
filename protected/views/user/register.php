<div class="container-fluid" style="background-color:#FFF;max-width:1200px;">
		<div class="row slide hero-container">
			<div class="col-md-12">
				<?php $this->widget('SearchWidget'); ?>	
				<br>

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
								'htmlOptions'=>array('class'=>'expanded-form'),
								// Please note: When you enable ajax validation, make sure the corresponding
								// controller action is handling ajax validation correctly.
								// There is a call to performAjaxValidation() commented in generated controller code.
								// See class documentation of CActiveForm for details on this.
								'enableAjaxValidation'=>false,
							)); ?>
								<?php echo $form->errorSummary($model); ?>
								<div class="col-md-6">
									<?php echo $form->textField($model,'nama',array('size'=>30,'maxlength'=>30,'class'=>'form-control','placeholder'=>'Nama Lengkap')); ?>
									<?php //echo $form->error($model,'nama'); ?>
								</div>
								<div class="col-md-6">
									<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255,'class'=>'form-control','placeholder'=>'Password')); ?>
									<?php //echo $form->error($model,'password'); ?>
								</div>
								<div class="col-md-6">
									<?php echo $form->textField($model,'username',array('size'=>30,'maxlength'=>30,'class'=>'form-control','placeholder'=>'Nama Tampilan (Profile)')); ?>
									<?php //echo $form->error($model,'username'); ?>
								</div>
								<div class="col-md-6">
									<?php echo $form->passwordField($model,'cpassword',array('size'=>60,'maxlength'=>255,'class'=>'form-control','placeholder'=>'Konfirmasi Password')); ?>
									<?php //echo $form->error($model,'cpassword'); ?>
								</div>
								<div class="col-md-6">
									<?php echo $form->textField($model,'email',array('size'=>30,'maxlength'=>30,'class'=>'form-control','placeholder'=>'Email')); ?>
									<?php //echo $form->error($model,'email'); ?>
								</div>
								<div class="col-md-6">
									<?php echo $form->textField($model,'telepon',array('size'=>15,'maxlength'=>15,'class'=>'form-control','placeholder'=>'Nomor Telepon')); ?>
									<?php //echo $form->error($model,'telepon'); ?>
								</div>
								<div class="col-md-6">
									<?php echo $form->textField($model,'provinsi',array('class'=>'form-control','placeholder'=>'Asal Provinsi')); ?>
									<?php //echo $form->error($model,'provinsi'); ?>
								</div>
								<div class="col-md-6">
									<?php echo $form->textField($model,'kota',array('class'=>'form-control','placeholder'=>'Asal Kota')); ?>
									<?php //echo $form->error($model,'kota'); ?>
								</div>
								<?php echo CHtml::submitButton('Daftar', array(
									'class'=>'btn btn-primary btn-lg')); ?>
							<?php $this->endWidget(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>