<div class="container-fluid" style="background-color:#FFF;max-width:1300px;">

	<div class="row slide hero-container">

		<div class="col-md-12">

			<?php $this->widget('SearchWidget'); ?>	

		</div>

	</div>





	<div class="row slide category-box">

		<div class="row boxes">

			<div class="row">

				<div class="col-md-3" style="text-align:center">
					<h3 style="margin:0"><?php echo $cari['kategori']; ?></h3>
					<div class="row" style="text-align:center"><img src="http://placehold.it/80x80"></div>
				</div>
				<div class="col-md-9">
					<div class="col-md-12">Sub-Kategori</div>
					<div class="col-md-6 sub-category">

						<ul style="padding:0">

							<li><a href="">Akuntansi dan Audition</a></li>

							<li><a href="">Ekonomi Mikro</a></li>

							<li><a href="">Moneter</a></li>

							<li><a href="">Sosial Ekonomi</a></li>

						</ul>

					</div>

					<div class="col-md-6 sub-category">

						<ul style="padding:0">

							<li><a href="">Ekonomi Makro</a></li>

							<li><a href="">Koperasi</a></li>

							<li><a href="">Perbankan</a></li>

							<li><a href="">Lain-lainnya</a></li>

						</ul>

					</div>
				</div>



			</div>

		</div>

		<hr />

		<ul class="itemsby-menu">

			<li class="active">Semua Buku</li>

			<li class="">Berdasarkan Waktu</li>

			<li class="">Berdasarkan Judul</li>

		</ul>



		<div class="row items" style="">

			<ul>

			<?php 

				foreach ($model as $data) {

					//print_r($data);

					$kategori = Kategori::model()->findByPk($data->kategori)->nama;

					$subKategori = SubKategori::model()->findByPk($data->sub_kategori)->nama;

					$provinsi = Provinsi::model()->findByPk($data->provinsi)->nama;

					$kota = Kota::model()->findByPk($data->kota)->nama;

					echo '

					<li class="row">

						<div class="col-md-1">

							<img src="http://placehold.it/80x80">

						</div>

						<div class="col-md-9">

							<a href="'.Yii::app()->request->baseUrl.'/post/'.$data->id.'"><h5><strong> '.$data->judul.'</strong></h5></a>

							<p> '.$data->konten.'<br>
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