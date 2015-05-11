
<?php 
	echo CHtml::beginForm(array('post/cari'),'post',array('class'=>'form-inline search-box'));
?>
<h2 style="color:#00C3C8">Temukan buku yang kamu cari di sini!</h2>
				<?php 
				$provinsi = Provinsi::model()->findAll();
				
				$provArray["sep1"]="Lokasi";
				$provArray["non-jab"]="Jabodetabek";
				$provArray["non-jak"]="Jakarta";
				$provArray["non-bog"]="Bogor";
				$provArray["non-tan"]="Tangerang";
				$provArray["non-bek"]="Bekasi";
				$provArray["non-ban"]="Bandung";
				$provArray["non-yog"]="Yogyakarta";
				$provArray["non-sur"]="Surabaya dan Sekitarnya";
				$provArray["non-med"]="Medan dan Sekitarnya";
				$provArray["sep2"]="Provinsi";

				$provArray = $provArray + CHtml::listData($provinsi,'id','nama');
				//print_r($provArray);
					?>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-search"></i>
							</span>
							<?php 
							echo CHtml::textField('cari[judul]','',array('class'=>'form-control','placeholder'=>'Cari buku...','style'=>'width:250px'));?>
						</div>
						<?php 
						echo CHtml::dropDownList('cari[provinsi]','',$provArray,array('prompt'=>'Pilih Lokasi','class'=>'form-control','placeholder'=>'Asal Kota'));?>
						<?php 
							echo CHtml::dropDownList('cari[kategori]','', CHtml::listData(Kategori::model()->findAll(),'id','nama'),
							array('prompt'=>'Pilih Kategori','class'=>'form-control','placeholder'=>'Kategori','required'=>'true',
							'ajax' => array(
							'type'=>'POST', //request type
							'url'=>Yii::app()->createUrl('post/DynamicCategories'), //url to call.
							//Style: CController::createUrl('currentController/methodToCall')
							'update'=>'#cari_sub_kategori', //selector to update
							//'data'=>'js:javascript statement' 
							//leave out the data key to pass all form values through
							))); 
						?>
						<?php 
						echo CHtml::dropDownList('cari[sub_kategori]','',array(),array('prompt'=>'Pilih kategori terlebih dahulu','class'=>'form-control','required'=>'true'));?>
						<input class="btn btn-primary search-box-btn" type="submit" value="Cari">
					</div>
<?php echo CHtml::endForm(); ?>

<script>
	
	var semua= document.getElementsByTagName("option");
	for(var i = 0;i<semua.length;i++){ 
		if(semua[i].value.indexOf("sep") > -1){
			semua[i].style.background = "yellow";
			semua[i].disabled = "true";
		}
	}
</script>