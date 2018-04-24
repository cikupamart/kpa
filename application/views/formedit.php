<?php

$id_penyerapan = "";
$nama_kegiatan ="";
$jenis_kegiatan ="";
$tanggal="";
$status = "";
$jumlah="";
if($op=="edit"){
    foreach ($sql->result() as $obj){
         
        $op = "edit";
        $id_penyerapan = $obj->id_penyerapan;
        $nama_kegiatan =$obj->nama_kegiatan;
        $jenis_kegiatan =$obj->jenis_kegiatan;
        $tanggal=$obj->tanggal;
        $status = $obj->status;
        $jumlah = $obj->jumlah;
    }
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/style-modal.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/style-dashboard-karyawan.css" rel="stylesheet" type="text/css">
</head>
<body>
                <div class="ket-modal">
                    <h6 class="anggaran">Anggaran</h6>
                    <h6 class="angg-rp">Rp.10.000.000,-</h6>
                </div>
                <form action="<?php echo base_url(); ?>karyawan/simpan" method="POST">
                <input type="hidden" name="op" value="update" class="form-control">
                <input type="hidden" name="id_penyerapan" value="<?php echo $id_penyerapan ?>" class="form-control">
                <p>Nama Kegiatan</p>
                <input type="text" name="nama_kegiatan" value="<?php echo $nama_kegiatan ?>" class="form-control">
                <p>Jenis Kegiatan</p>
                <input type="text" name="jenis_kegiatan" value="<?php echo $jenis_kegiatan ?>" class="form-control">
                <p>Tanggal Kegiatan</p>
                <input type="date" name="tanggal" value="<?php echo $tanggal ?>" class="form-control">
                <p>Status</p>
                <input type="text" name="status" value="<?php echo $status ?>" class="form-control">
                <p>Jumlah</p>
                <input type="text" name="jumlah" value="<?php echo $jumlah ?>" class="form-control">
                <br>
                <div class="button-modal">
                    <button class="cancel-modal" type="button" data-dismiss="modal">Cancel</button>
                    <button class="save-modal" type="submit">Save</button>
                </div>
                </form>

        
</body>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</html>