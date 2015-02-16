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
				echo CHtml::beginForm(array('user/recover'),'post',array('class'=>'form-horizontal', 'id'=>'recover'));
			?>
				<h4>Masukkan password baru anda</h4>
				<div class="form-group">
					<label for="destination" class="col-sm-4 control-label">Password baru: </label>
					<div class="col-sm-4">
						<?php 
							echo CHtml::passwordField('np','',array('class'=>'form-control','required'=>'true'));
							?>
					</div>
				</div>
				<div class="form-group">
					<label for="destination" class="col-sm-4 control-label">Konfirmasi password baru: </label>
					<div class="col-sm-4">
						<?php 
							echo CHtml::passwordField('cp','',array('class'=>'form-control','required'=>'true'));
							?>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input type="hidden" name="tok" value="<?php echo $token; ?>"></input>
						<button type="submit" class="btn btn-primary btn-lg">Submit</button>
					</div>
				</div>
			<?php echo CHtml::endForm(); 

			}
			?>
		</div>
	</div>

</div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.js"></script>
<script>
 $("#recover").validate({
           rules: {
               np: { 
                 required: true,
                    minlength: 6,
                    maxlength: 10,

               } , 

                   cp: { 
                    equalTo: "#np",
                     minlength: 6,
                     maxlength: 10
               }


           },
     messages:{
         password: { 
                 required:"the password is required"

               }
     }

});
</script>