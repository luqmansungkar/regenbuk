<div class="container-fluid" style="background-color:#FFF;max-width:1300px;">
	<div class="row slide hero-container">
		<div class="col-md-12">
			<?php $this->widget('SearchWidget'); ?>	
		</div>
	</div>

	<div class="row" style="padding:15px">
		<div class="col-md-12">
			<h1 style="color:#FEC144;font-weight:bold"><?php echo $model->judul; ?></h1>
			<h5><?php echo $model->provinsi.", ".$model->kota; ?></h5>
		</div>
		<div class="col-md-6">
			<div class="row">
			<?php 
				$gambar = explode(";", $model->foto,-1);
			?>
				<div class="img-holder" style="background-image:url('<?php echo Yii::app()->request->baseUrl."/images/post/".$gambar[0]; ?>');">
				</div>
				<div class="img-small-holder">
					<ul>
						<?php 
							foreach ($gambar as $temp) {
								echo '<li><img src="'.Yii::app()->request->baseUrl.'/images/post/'.$temp.'"></li>';
							}
						?>
					</ul>
				</div>
				<div class="" style=" text-align:left;color:#fff;">
					<div style="font-size:20px;font-weight:bold;background-color:#DD9606;padding:5px">Informasi dan Sinopsis Buku:</div>
					<div style="font-size:14px;background-color:#FEC144;padding:5px"><?php echo $model->konten; ?></div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-md-offset-1" style="padding:0 15px 0;">
			<div style="background-color: #00A8B3;padding:15">
				<br />
				<div style="background-color:#FEC144;font-size:48px;color:#fff;text-align:center;font-weight:bold;width:110%;margin-left:-5%;"><?php echo 'Rp. ' . number_format( $model->harga, 0 , '' , '.' ) . ',-'; ?></div>
				<div style="position:relative;height:150px;background-color: #0974A0" >
					<div class="col-md-2">
						<img src="<?php 
						if (empty($user->foto)) {
							echo "http://placehold.it/100x100";
						}else{
							echo Yii::app()->request->baseUrl."/images/user/".$user->foto;
						}
					?>" style="border-radius:50%;border: 5px solid #fff;position:absolute;bottom:-80px;left:-50px;top:10px;height:100px;width:100px">
					</div>
					<div class="col-md-10" style="color:#fff">
						<h2><strong><?php echo $user->username; ?></strong>
						<?php if ($user->verified == 1) { ?>
			<span class="verified fa fa-check-circle" data-toggle="tooltip" data-placement="top" title="Verified Account"style="color: #5890FF" />
		<?php } ?>
						
						</h2>
						<a class="btn btn-primary" href="<?php echo Yii::app()->request->baseUrl."/user/".$user->id; ?>"><i class="fa fa-profile"></i> Kunjungi Profile</a>
						<p>Temukan banyak koleksi buku pribadi di dalam profilenya.</p>
					</div>
				</div>
				<div class="content-phone"><i class="fa fa-phone"></i> <?php 
				$telp = str_split($user->telepon, 4);
				echo $telp[0]."-".$telp[1]."-"; ?><span id="txt-phone" data-last="<?php echo $telp[2]; ?>">XXXX</span>
					<div class="btn btn-danger btn-sm" id="btn-show-phone">Lihat nomor telepon</div></div>
				<hr />
				<div style="font-size:2em;text-align:center;padding:15px;color:#fff">
					<div>Kategori: <?php echo $model->kategori; ?></div>
					<div>Sub-Kategori: <?php echo $model->sub_kategori; ?></div>
				</div>
				<hr />
				<div style="font-size:2em;text-align:center;padding:15px;color:#fff">
					<a class="btn btn-lg btn-primary" href="mailto:<?php echo $user->email; ?>">Kirim Email <i class="fa fa-paper-plane"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.1.3.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".img-small-holder li").click(function(){
			var imgsrc = $(this).find("img").attr("src");
			$(".img-holder").css('background-image','url('+imgsrc+')');
		})
	})
</script>