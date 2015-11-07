<div class="container-fluid" style="background-color:#FFF;max-width:1300px;">

	<div class="row slide hero-container">

		<div class="col-md-12">

			<?php $this->widget('SearchWidget'); ?>	

		</div>

	</div>


	


	<div class="row slide category-box">

		<div class="row">

			<div class="row">

				<div class="col-md-3" style="margin-left:50px; text-align:center">
					<div class="boxes">
						<h4 style="margin:0; margin-bottom:10px;"><?php echo $cari['kategori']; ?></h4>
						<div class="row" style="text-align:center; margin-bottom:50px;"><img height="80px" src="<?php echo Yii::app()->request->baseUrl; ?>/img/icon disamping iklan.png"></div>
					</div>
					<ul class="itemsby-menu" style="margin-top:20px;">
						<li class="active">Semua Buku</li>
					</ul>
				</div>
				
				<div class="col-md-8">
					<ul id="slippry-demo">
						<li>
							<a href=#><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/iklan1.png" width= 180px alt=""></a>
						</li>
						<li>
							<a href=#><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/iklan2.png" width= 180px alt=""></a>
						</li>
						<li>
							<a href=#><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/iklan3.png" width= 180px alt=""></a>
						</li>
					</ul>
				</div>
			</div>

		</div>

		<div class="row items" style="">

			<ul>

			<?php 

				foreach ($model as $data) {

					//print_r($data);

					$kategori = Kategori::model()->findByPk($data->kategori)->nama;

					$subKategori = SubKategori::model()->findByPk($data->sub_kategori)->nama;

					$provinsi = Provinsi::model()->findByPk($data->provinsi)->nama;

					$kota = Kota::model()->findByPk($data->kota)->nama;
					
					
				        $gambar = explode(";", $data->foto,-1);
			

					echo '

					<li class="row" style="background-color:white; padding-left:20px;">

						<div class="col-md-1">
							
							<img src="'.Yii::app()->request->baseUrl.'/images/post/'.$gambar[0].'" width="80px" length="80px">
							
			

						</div>

						<div class="col-md-9">

							<a href="'.Yii::app()->request->baseUrl.'/post/'.$data->id.'"><h5><strong> '.$data->judul.'</strong></h5></a>

							<p>
							'.$kota.', '.$provinsi.'<br>
							Kategori : '.$kategori.', sub kategori : '.$subKategori.'</p>

						</div>

						<div class="col-md-2" style="text-align:center">

							<div><strong>Status</strong></div>

							<div>'.(($data->status == 1) ? 'Ada' : 'Terjual').'</div>

							<h5><strong>Harga</strong></h5>

							<div>Rp '.number_format( $data->harga, 0 , '' , '.' ) . ',-' .'</div>

						</div>

					</li>

					';

				}

			?>

				

			</ul>

		</div>

		<nav style="text-align:center">
			<?php $this->widget('CLinkPager',array(
				'currentPage'=>$pages->getCurrentPage(),
				'itemCount'=>$item_count,
				'pageSize'=>$page_size,
				'maxButtonCount'=>5,
				'htmlOptions'=>array('class'=>'pagination'),
				'header'=>'',
			)); ?>
			<!-- <ul class="pagination">

				<li>

					<a href="#" aria-label="Previous">

						<span aria-hidden="true">&laquo;</span>

					</a>

				</li>

				<li class="active"><a href="#">1</a></li>

				<li><a href="#">2</a></li>

				<li><a href="#">3</a></li>

				<li><a href="#">4</a></li>

				<li><a href="#">5</a></li>

				<li>

					<a href="#" aria-label="Next">

						<span aria-hidden="true">&raquo;</span>

					</a>

				</li>

			</ul> -->

		</nav>



	</div>

</div>
<script>
		$(document).ready(
			function(){
				$('#slippry-demo').slippry({
					adaptiveHeight: false
				});
			}
		);
	</script>