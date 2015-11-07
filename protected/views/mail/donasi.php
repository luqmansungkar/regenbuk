<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html style="margin-top: 0px !important; padding-top: 0px !important">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<style type="text/css">
	.txtholder{
		padding:0 50px;
	}
	</style>
</head>
<body style="width:816px;margin:0;padding:0">

	<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/email/header.png" />
	<div class="txtholder">
		<h2>Kode Pengiriman Buku</h2>
		<table>
			<tr>
				<td>No. Seri Donasi</td>
				<td>:</td>
				<td><?php echo " ".$model->id ?></td>
			</tr>
			<tr>
				<td>Tanggal Pendaftaran Donasi</td>
				<td>:</td>
				<td><?php echo " ".$model->tanggal ?></td>
			</tr>
			<tr>
				<td>Dari</td>
				<td>:</td>
				<td><?php echo " ".$model->id_user ?></td>
			</tr>
		</table>
		<hr />
		<h2>Info Penerima Donasi</h2>
		<table>
			<tr>
				<td>Donasi Kepada</td>
				<td>:</td>
				<td><?php echo " ".$tujuan->nama ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo " ".$tujuan->alamat ?></td>
			</tr>
			<tr>
				<td>Kontak Nama</td>
				<td>:</td>
				<td><?php echo " ".$tujuan->kontak ?></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
				<td><?php echo " ".$tujuan->telepon ?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo " ".$tujuan->email ?></td>
			</tr>
		</table>
		<hr />
		<h2>Info Buku</h2>
		<table>
			<tr>
				<td>Jumlah Buku</td>
				<td>:</td>
				<td><?php echo " ".$model->jumlah ?></td>
			</tr>
			<tr>
				<td>Kategori Buku</td>
				<td>:</td>
				<td><?php echo " ".$model->kategori ?></td>
			</tr>
			<tr>
				<td>Sub-Kategori</td>
				<td>:</td>
				<td><?php echo " ".$model->sub_kategori ?></td>
			</tr>
		</table>
		<hr />
	</div>

	<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/email/middle.png" style="border: 0; display: block; line-height: 0px">
	<div class="txtholder">

		<h2>Profile</h2>
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><?php echo " ".$tujuan->nama ?></td>
			</tr>
			<tr>
				<td>Tujuan organisasi</td>
				<td>:</td>
				<td><?php echo " ".$tujuan->tujuan ?></td>
			</tr>
		</table>
		<hr />
		<h2>Tentang Program/Project:</h2>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<table>
			<tr>
				<td>Facebook</td>
				<td>:</td>
				<td><a href="https://facebook.com/">Lorem Program</a></td>
			</tr>
			<tr>
				<td>Youtube</td>
				<td>:</td>
				<td><a href="https://youtube.com/lorem">Lorem Youtube</a></td>
			</tr>
			<tr>
				<td>Website</td>
				<td>:</td>
				<td><a href="https://example.com">Lorem Website</a></td>
			</tr>
		</table>
		<hr />
		<h2>Foto Bukti Kegiatan:</h2>
		<img src="http://lorempixel.com/400/200/people">
	</div>
	<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/email/footer.png" style="border: 0; display: block; line-height: 0px">
</body>
</html>