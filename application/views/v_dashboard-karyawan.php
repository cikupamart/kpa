<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Karyawan</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/style-dashboard-karyawan.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="header" class="col-sm-12" style="">
		<div style="margin-top:30px;" class="col-sm-10 col-sm-offset-1">
			<div style="float:left; margin-right:15px;">
				<img style="border-radius:50%;" src="<?php echo base_url(); ?>assets/img/profil.jpg" width="80px" height="80px"/>
			</div>
			<div style="margin-bottom:10px;">
				<div>
					<h4><?php echo $username;?></h4>
				</div>
				<div style="font-size:12px;">
					<p><?php echo $page;?></p>
					<p><a style="color:white;" href="<?php echo base_url("login/keluar");?>">
						Sign Out</a></p>
					</div>
				</div>
				<div style="clear:left; margin-top:15px;">
					<form method="" action="">
						<div class="search">
							<p>Project</p>
							<input class="form-control" type="text" size="23">
						</div>
						<div class="search">
							<p>TW</p>
							<input class="form-control" type="text" size="10">
						</div>
						<div class="search">
							<p>Tahun</p>
							<input class="form-control" type="text" size="10">
						</div>
						<div class="search">
							<p>Anggaran</p>
							<input class="form-control" type="text" size="13">
						</div>
						<div class="search">
							<p>Jenis Kegiatan</p>
							<input class="form-control" type="text" size="23">
						</div>
						<b><input class="submit" type="submit" value="Search" size="20"></b>
					</form>
				</b>
			</div>
		</div>
	</div>

	<?php foreach ($project as $row) { 
		$id_project_project = $row['id_project'];?>
		<div class="col-sm-10 col-sm-offset-1 tabel-isi">
			<div class="edit-save">
				<button class="edit" data-toggle="modal" data-target="#add-modal-<?php echo $row['id_project']; ?>">Add</button>
				<button class="save" onclick="window.location.href='<?php echo base_url(); ?>karyawan/export_excel'">Save</button>
			</div>
			<hr>
			<div class="project">
				<h4><?php echo $row['nama_project']; ?></h4>
				<table>
					<tr>
						<td>Total Anggaran</td>
						<td>:</td>
						<td><?php 
							foreach ($triwulan as $row_triwulan){
								echo $row_triwulan['jumlahtriwulan'];
							} ?>,-</td>
							<td class="triwulan">Triwulan</td>
						</tr>
						<tr>
							<td>Total Penyerapan</td>
							<td>:</td>
							<td>Rp. 90.000,-</td>
							<td class="tw-tahun">1/2017</td>
						</tr>
						<tr>
							<td>Saldo</td>
							<td>:</td>
							<td align="center">
								<div class="saldo">Rp. 10.000,-</div>
							</td>
						</tr>
					</table>
				</div>
				<div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Nama Kegiatan</th>
								<th>Jenis Kegiatan</th>
								<th>Tanggal Kegiatan</th>
								<th>Status</th>
								<th>Jumlah</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=0; foreach ($kegiatan as $row) {
								$id_project_penyerapan = $row['id_project'];
								if ($id_project_project == $id_project_penyerapan) {
									$no++;


									?>
									<tr>
										<td><?php echo $no; ?></td>
										<td>
											<p class="n-keg"><?php echo $row['nama_kegiatan']; ?></p>
											<p class="ket">Submited : <?php echo $row['submited']," ", $row['tanggal_submit'];?></p>
										</td>
										<td><?php echo $row['jenis_kegiatan'];?></td>
										<td><?php echo $row['tanggal']; ?></td>
										<td><?php echo $row['status']; ?></td>
										<td>Rp.<?php echo $row['jumlah']; ?>,-</td>
										<td>
											<a href="<?php echo base_url(); ?>Karyawan/edit/<?php echo $row['id_penyerapan']; ?>" style="color:#53c609;" data-toggle="modal" data-target="#edit-modal">
												<span class="glyphicon glyphicon-pencil"></span>
											</a>
											<a href="<?php echo base_url(); ?>Karyawan/hapus/<?php echo $row['id_penyerapan']; ?>" onclick="return confirm('Anda yakin menghapus <?php echo $row['nama_kegiatan']; ?>');" style="color:red;">
												<span class="glyphicon glyphicon-trash"></span>
											</a>			
										</td>
									</tr>
									<?php }} ?>
								</tbody>
							</table>
						</div>
					</div>
					<?php }?>


				</body>
				<?php foreach ($project as $row) { ?>
				<div id="add-modal-<?php echo $row['id_project'];?>" class="modal fade" role="dialog">
					<link href="<?php echo base_url(); ?>assets/css/style-modal.css" rel="stylesheet" type="text/css">
					<div class="modal-dialog modal-sm">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="ket-modal">
								<h6 class="anggaran">Anggaran</b></h6>
								<h6 class="angg-rp">Rp.10.000.000,-</h6>
							</div>
							<form action="<?php echo base_url(); ?>Karyawan/simpan" method="POST">
								<input type="hidden" name="op" value="tambah" class="form-control">
								<input type="hidden" name="id_project" value="<?php echo $row['id_project'];?>" class="form-control">
								<p>Nama Kegiatan</p>
								<input type="text" name="nama_kegiatan" class="form-control">
								<p>Jenis Kegiatan</p>
								<input type="text" name="jenis_kegiatan" class="form-control">
								<p>Tanggal Kegiatan</p>
								<input type="date" name="tanggal" class="form-control">
								<p>Status</p>
								<input type="text" name="status" class="form-control">
								<p>Jumlah</p>
								<input type="text" name="jumlah" class="form-control">
								<br>
								<div class="button-modal">
									<button class="cancel-modal" type="button" data-dismiss="modal">Cancel</button>
									<button class="save-modal" type="submit">Save</button>
								</div>
							</form>
						</div>

					</div>
				</div>
				<?php }?>

				<div id="edit-modal" class="modal fade" role="dialog">
					<link href="<?php echo base_url(); ?>assets/css/style-modal.css" rel="stylesheet" type="text/css">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
						</div>
					</div>
				</div>
				<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
				<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
				</html>