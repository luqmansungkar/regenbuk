<div class="container-fluid" style="background-color:#FFF;max-width:1200px;">

	<div class="row slide hero-container">

		<div class="col-md-12">

			<?php $this->widget('SearchWidget'); ?>	

		</div>

		<?php if (Yii::app()->session['id'] == $model->id) { ?>

			<div><a href="<?php echo Yii::app()->request->baseUrl ?>/user/editprofile">Edit Profile <span class="fa fa-pencil"></span></a></div>

		<?php }?>

	</div>





	<div class="row slide profile-header">

		<h1 class="profile-name"><strong><?php echo $model->username; ?></strong> 

		<?php if ($model->verified == 1) { ?>

			<span class="verified fa fa-check-circle" data-toggle="tooltip" data-placement="top" title="Verified Account"style="color: #5890FF" />

		<?php } ?>

		</h1>

		<img class="profile-image" src="<?php 

			if (empty($model->foto)) {

				echo "http://placehold.it/150x150";

			}else{

				echo Yii::app()->request->baseUrl."/images/user/".$model->foto;

			}

		?> ">

		

	</div>

	<div class="row slide basic-info-container" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/img/bgheader.png);">

		

		<div class="col-md-offset-3 col-md-3" style="text-align:left">

			<div>Nama Lengkap: <?php echo $model->nama; ?></div>

			<div>Asal Provinsi: <?php echo $model->provinsi; ?></div>

			<div>Asal Kota: <?php echo $model->kota; ?></div>

			<div>Nomor Telepon: <?php echo $model->telepon; ?></div>

		</div>

		<div class="col-md-offset-1 col-md-5">

			<div>Pendidikan: <?php echo $model->pendidikan; ?></div>

			<div>Pin BB: <?php echo $model->bb; ?></div>

			<div>Facebook: <?php echo $model->fb; ?></div>

			<div>Twitter: <?php echo $model->twitter; ?></div>

		</div>

		

	</div>



	<div class="row slide slide-description">

		<div class="slide-description-title">Tentang <?php echo $model->nama; ?>: </div>
		<div clsas="slide-description-about"><?php echo $model->bio; ?></div>

	</div>

	<div class="row slide gallery">

		<div class="modal fade" id="advertiseModal" tabindex="-1" role="dialog" aria-labelledby="advertiseModalLabel" aria-hidden="true">

			<div class="modal-dialog modal-sm">

				<div class="modal-content">

					<form id="statusform" method="post" action="<?php echo Yii::app()->request->baseUrl; ?>/post/ubah">

						<div class="modal-header">

							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

							<h4 class="modal-title" id="advertiseModalLabel">Ubah Opsi</h4>

						</div>

						<div class="modal-body">

							<p>Nama Buku: <span class="modal-bookname"></span></p>

							<p>Opsi Status Iklan:

								<select style='padding:5px;margin:0 0 5px' name="ubah[status]" id="avertstatus">

									<option value='1'>Ada</option>

									<option value='2'>Terjual</option>

									<option value='remove'>Hapus</option>

								</select>

							</p>

							<input type='hidden' name='ubah[id]' id="avertbookid" value="0">

						</div>

						<div class="modal-footer">

							<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>

							<input type="submit" class="btn btn-primary" value="Simpan"></input>

						</div>

					</form>

				</div>

			</div>

		</div>

		<!-- <h2 style="text-align:center">Galeri Toko Buku <?php echo $model->nama; ?></h2> -->

		<div class="row items" style="border:1px solid rgb(231, 231, 231)">

			<ul>

			<?php 

				//echo print_r($post);

				foreach ($post as $temp) {

					# code...

					$kategori = Kategori::model()->findByPk($temp->kategori)->nama;

					$subKategori = SubKategori::model()->findByPk($temp->sub_kategori)->nama;

					$provinsi = Provinsi::model()->findByPk($temp->provinsi)->nama;

					$kota = Kota::model()->findByPk($temp->kota)->nama;

					echo '

					<li class="col-md-12" style="background-color:#fff">

						<div class="col-md-1">

							<img src="http://placehold.it/80x80">

						</div>

						<div class="col-md-9">

							<a href="'.Yii::app()->request->baseUrl.'/post/'.$temp->id.'"><h5><strong>'.$temp->judul.'</strong></h5></a>

							<p> '.$temp->konten.'<br>
							'.$kota.', '.$provinsi.'<br>
							Kategori : '.$kategori.', sub kategori : '.$subKategori.'</p>

						</div>

						<div class="col-md-2" style="text-align:center">';

					echo ($model->id != Yii::app()->session['id']) ? '' : '<a class="btn btn-xs btn-danger btn-primary openModal" data-toggle="modal" href="#advertiseModal" data-bookTitle="'.$temp->judul.'" data-bookid="'.$temp->id.'">Edit Iklan</a> ';
					/*echo ($model->id != Yii::app()->session['id']) ? '' : '<button type="button" class="btn btn-xs btn-danger btn-primary" data-bookid="'.$temp->id.'">X</button>';*/
					

					echo '<div><strong>Status</strong></div>

							<div>'.(($temp->status == 1) ? 'Ada' : 'Terjual').'</div>

							<h5><strong>Harga</strong></h5>

							<div>Rp '.number_format( $temp->harga, 0 , '' , '.' ) . ',-' .'</div>

						</div>

					</li>';

					}

				?>

				<!-- Dummy -->

			</ul>

		</div>

	</div>

</div>



<!--<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.1.3.min.js"></script>-->

	<!-- <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script> -->

	<script type="text/javascript">

	// Submit with ajax

	/*$("#statusform").submit(function(event){

		event.preventDefault();

		var $form = $(this), url = $form.attr('action');

		

		var posting = $.post(url,{

			bookid: $('#avertbookid').val(),

			status: $('#avertstatus').val()

		});



		posting.done(function(data){

			// alert('Berhasil menyimpan');

			$('#advertiseModal').modal('hide');

		});



		posting.error(function(data){

			alert('error');

			$('#advertiseModal').modal('hide');

		});

	});*/



/*	$('[data-toggle="popover"]').popover({

		'trigger': 'click',

		'placement': 'left',

		'html' : true, });
*/
	$(document).on("click", ".openModal", function () {

	  //var button = $(event.relatedTarget); // Button that triggered the modal

	  var bookTitle = $(this).data('booktitle'); // Extract info from data-* attributes

	  var bookid = $(this).data('bookid'); // Extract info from data-* attributes

	  
	  console.log(bookTitle+", "+bookid);
	  	  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).

	  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

	  var modal = $(".modal-body");

	  modal.find('.modal-bookname').text(bookTitle);

	  modal.find('#avertbookid').val(bookid);

	})

	</script>