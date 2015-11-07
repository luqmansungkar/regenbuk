<div class="container-fluid" style="background-color:#FFF;max-width:1300px;">
	<div class="row slide hero-container">
			<?php $this->widget('SearchWidget'); ?>	
		<br>
		<div class="row">
			<hr />
			<?php if(Yii::app()->user->hasFlash('forgot')){ 
				if (Yii::app()->user->getFlash('forgot') == '0') { ?>
					<div class="alert alert-danger" role="alert">
						Email yang anda masukkan tidak terdaftar.
					</div>
				<?php	}else{ ?>
					<div class="alert alert-success" role="alert">
						Instruksi untuk mereset password sudah dikirim ke alamat email anda.
					</div>
					<?php }?>
					
				<?php } else { ?>
			<?php 
				echo CHtml::beginForm(array('user/forgot'),'post',array('class'=>'form-horizontal'));
			?>
				<h4>Masukkan email yang anda daftarkan</h4>
				<div class="form-group">
					<label for="destination" class="col-sm-4 control-label">Email: </label>
					<div class="col-sm-4">
						<?php 
							echo CHtml::textField('emailForgot','',array('class'=>'form-control','required'=>'true','placeholder'=>'user@domain.com'));?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary btn-lg">Submit</button>
					</div>
				</div>
			<?php echo CHtml::endForm(); 

			}
			?>
		</div>
	</div>

</div>