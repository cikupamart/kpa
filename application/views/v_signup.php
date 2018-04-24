<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>

	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
	
	<div class="container" style="margin-top: 100px;">

		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">

					<form method="post" action="<?php echo base_url('register/simpan') ?>">

						<input type="hidden" name="op" value="<?php echo $op; ?>" class="form-control">

						<div class="form-group">
							<label for="nik"> NIK </label>
							<input type="text" class="form-control" id="nik" name="nik" placeholder="Nama Pengguna">
						</div>
						<div class="form-group">
							<label for="password"> Password </label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Kata Sandi">
						</div>
						<button type="submit" class="btn btn-primary" value="signup">Daftar</button>
						
					</form>
					</div>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>

</body>
<script src="assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</html>