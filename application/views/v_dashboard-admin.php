<?php $op="tambah"; ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>

	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/style-dashboard-admin.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="col-sm-2 side">
		<div class="user">
			<img src="<?php echo base_url(); ?>assets/img/profil.jpg">
			<h4><?php echo $username; ?></h4>
			<p><?php echo $page; ?></p>
			<hr align="center">
			<h6><a href="<?php echo base_url("login/keluar");?>">
				Sign Out</a></h6>
			</div>

		</div>
		<div class="col-md-10 wrapper">
			<div style="isi">

				<div class="col-sm-10 isi">
					<div class="create-view">
						<img src="<?php echo base_url();?>assets/img/create.png">
						<div>
							<h3>Create User</h3>
							<hr align="left">
						</div>
					</div>
					<form action="<?php echo base_url(); ?>admin/simpan" method="POST">
						<input type="hidden" name="op" value="<?php echo $op; ?>">
						<div class="save save-name">
							<p>NIK</p>
							<input class="form-control" type="text" name="nik" size="20">
						</div>
						<div class="save">
							<p>Member Group</p>
							<select name="member_group" class="form-control">
								<?php foreach ($group as $row_group) {?>
								<option value="<?php echo $row_group['id_group'] ?>"><?php echo $row_group['nama_group'] ?></option>
								<?php }?>
							</select>

						</div>
						<div class="save">
							<p>Level</p>
							<select name="level" class="form-control">
								<option value="2">Sekretaris</option>
								<option value="0">Karyawan</option>
							</select>
						</div>
						<div class="save">
							<p>User Name</p>
							<input class="form-control" type="text" name="username" size="12">
						</div>
						<div class="save">
							<p>Password</p>
							<input class="form-control" type="text" name="password" size="12">
						</div>
						<div class="save">
							<p></p>
							<input class="save-save" type="submit" value="Save">
						</div>
					</form>
				</div>
				<div class="col-sm-8 isi">
					<div class="create-view">
						<img src="<?php echo base_url();?>assets/img/view.png" width="">
						<div>
							<h3>View User</h3>
							<hr align="left">
						</div>
					</div>
					<div class="table-isi">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>NIK</th>
									<th>Member Group</th>
									<th>Level</th>
									<th>User Name</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<?php 
								foreach ($user as $row) {?>
								<tr>
									<td><?php echo $row['nik']; ?></td>
									<td>
										<?php foreach ($group as $row_group) {?>
										<?php if ($row_group['id_group'] == $row['id_group']) {
											echo $row_group['nama_group'];
										}
									}
									?>
								</td>
								<td>
									<?php if ($row['level'] == 1){
										echo "Admin";
									}
									elseif ($row['level'] == 2) {
										echo "Sekretaris";
									}
									elseif ($row['level'] == 0) {
										echo "Karyawan";
									}
									?>
								</td>
								<td><?php echo $row['username']; ?></td>

								<td class="action">
									<a href="<?php echo base_url(); ?>admin/edit/<?php echo $row['nik']; ?>" class="action-button" type="button" data-toggle="modal" data-target="#edit-modal">
										<img src="<?php echo base_url(); ?>assets/img/edit.png" alt="Edit" />
									</a>

									<a class="action-button" type="button" onclick=" return confirm('Anda yakin menghapus <?php echo $row['username']; ?>');" href="<?php echo base_url(); ?>admin/hapus/<?php echo $row['nik']; ?>">
										<img src="<?php echo base_url(); ?>assets/img/delete.png" alt="Delete"  />
									</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</body>

<div id="edit-modal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
		</div>
	</div>
</div>

<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</html>