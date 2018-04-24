<?php

$id_kegiatan="";
$nama_kegiatan = "";
$jenis_kegiatan = "";
$tgl_kegiatan = "";
$jenis_anggaran = "";
$status = "";
$jumlah = "";
if($input=="input"){
    foreach ($sql->result() as $obj){
         
          $op = "input";
          $id_kegiatan= $obj->id_kegiatan;
          $nama_kegiatan = $obj->nama_kegiatan;
          $jenis_kegiatan = $obj->jenis_kegiatan;
          $tgl_kegiatan = $obj->tgl_kegiatan;
          $jenis_anggaran = $obj->anggaran;
          $status = $obj->status;
          $jumlah = $obj->jumlah;
     
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="header" class="col-sm-12" style="">
        <div style="margin-top:30px;" class="col-sm-10 col-sm-offset-1">
        <div style="float:left; margin-right:15px;">
            <img style="border-radius:50%;" src="<?php echo base_url(); ?>assets/img/profil.jpg" width="80px" height="80px"/>
        </div>
        <div style="margin-bottom:10px;">
            <div>
                <h4>Username</h4>
            </div>
            <div style="font-size:12px;">
                <p>Position</p>
                <p>Sign Out</p>
            </div>
        </div>
        <div style="clear:left; margin-top:15px;">
            <div class="search">
                <p>Project</p>
                <input class="input-search" type="text" size="23">
            </div>
            <div class="search">
                <p>TW</p>
                <input class="input-search" type="text" size="10">
            </div>
            <div class="search">
                <p>Tahun</p>
                <input class="input-search" type="text" size="10">
            </div>
            <div class="search">
                <p>Anggaran</p>
                <input class="input-search" type="text" size="13">
            </div>
            <div class="search">
                <p>Jenis Kegiatan</p>
                <input class="input-search" type="text" size="23">
            </div><b>
            <button class="input-search submit" type="submit" style="color:#ff4145;" size="20">Search</button>
            </b>
            </div>
        </div>
    </div>
    <div class="col-sm-8 col-sm-offset-2 tabel">
        <div class="edit-save">
            <button class="edit" type="submit" data-toggle="modal" data-target="#edit-modal">Edit</button>
            <button class="save" type="submit">Save</button>
        </div>
        <hr>
        <div class="project">
            <h4>Nama Project</h4>
            <table>
                <tr>
                    <td>Total Anggaran</td>
                    <td>:</td>
                    <td>Rp. 100.000,-</td>
                    <td class="triwulan">Triwulan</td>
                </tr>
                <tr>
                    <td>Total Penyerapan</td>
                    <td>:</td>
                    <td>Rp. 90.000,-</td>
                    <td class="tw-tahun">TW/Tahun</td>
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
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kegiatan</th>
                    <th>Jenis Kegiatan</th>
                    <th>Tanggal Kegiatan</th>
                    <th>Jenis Anggaran</th>
                    <th>Status</th>
                    <th>Jumlah</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                            <input class="hapus" type="submit" value="X">
                            1
                    </td>
                    <td>Akuisisi MXP</td>
                    <td>Internal</td>
                    <td>20 Februari 2020</td>
                    <td>Inkubasi</td>
                    <td>Selesai</td>
                    <td>Rp. 90.000,-</td>
                </tr>
                <tr>
                    <td>
                            <input class="hapus" type="submit" value="X">
                            2
                    </td>
                    <td>Akuisisi MXP</td>
                    <td>Internal</td>
                    <td>20 Februari 2020</td>
                    <td>Inkubasi</td>
                    <td>Selesai</td>
                    <td>Rp. 90.000,-</td>
                </tr>
                <tr>
                    <td>
                            <input class="hapus" type="submit" value="X">
                            3
                    </td>
                    <td>Akuisisi MXP</td>
                    <td>Internal</td>
                    <td>20 Februari 2020</td>
                    <td>Inkubasi</td>
                    <td>Selesai</td>
                    <td>Rp. 90.000,-</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
    
<div id="edit-modal" class="modal fade" role="dialog">
    <link href="<?php echo base_url(); ?>assets/css/style-modal.css" rel="stylesheet" type="text/css">
        <div class="modal-dialog modal-sm">
    <!-- Modal content-->
            <div class="modal-content">
                <div class="ket-modal">
                    <h6 class="anggaran">Anggaran</h6>
                    <h6 class="angg-rp">Rp.10.000.000,-</h6>
                </div>
                <p>Nama Kegiatan</p>
                <input type="text">
                <p>Jenis Kegiatan</p>
                <input type="text">
                <p>Tanggal Kegiatan</p>
                <input type="text">
                <p>Jenis Anggaran</p>
                <input type="text">
                <p>Status</p>
                <input type="text">
                <p>Jumlah</p>
                <input type="text">
                <br>
                <div class="button-modal">
                    <button class="cancel-modal" type="button" data-dismiss="modal">Cancel</button>
                    <button class="save-modal" type="button">Save</button>
                </div>
            </div>

        </div>
    </div>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</html>

 <!-- jQuery Version 1.11.0 -->
 <script src="<?php echo base_url() ?>assets/jquery-1.11.0.js"></script>


<!--file include Bootstrap js dan datepickerbootstrap.js-->

<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

<!-- Fungsi datepickier yang digunakan -->
<script type="text/javascript">
 $('.datepicker').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
    });
</script> 

</html>